<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checking</title>
</head>

<body>
    <?php
    include '../config.php';
    $conn = OpenCon();


    if (isset($_POST['submit'])) {



        $registernumber = $_POST['registernumber'];
        $iat = $_POST['iat'];
        $subjectcode = $_POST['subjectcode'];
        $mark = $_POST['mark'];
        $semester = $_POST['semester'];

        $user_check_sql = "SELECT * FROM users WHERE registernumber='$registernumber' AND semester='$semester'";
        $user_check_query = mysqli_query($conn, $user_check_sql);
        $user_row = mysqli_num_rows($user_check_query);

        $already_exist_check_sql = "SELECT * FROM marks WHERE registernumber='$registernumber' AND iat='$iat' AND subjectcode='$subjectcode' AND semester='$semester'";
        $already_exist_check_query = mysqli_query($conn, $already_exist_check_sql);
        $row = mysqli_num_rows($already_exist_check_query);


        $subjectname_sql = "SELECT * FROM subjects WHERE subjectcode='$subjectcode' ";
        $subname = mysqli_query($conn, $subjectname_sql);
        $subjectname = $subname->fetch_assoc();
        $d = mysqli_fetch_array($subname);

        if ($user_row != 0) {
            if ($row == 0) {

                $insert_sql = "INSERT INTO `marks` (`registernumber`, `subjectname`, `subjectcode`, `semester`, `iat`, `mark`) VALUES ('$registernumber', '{$subjectname['subjectname']}', '$subjectcode', '$semester', '$iat', '$mark');";

                $insert = mysqli_query($conn, $insert_sql);
                if ($insert) {
                    session_start();
                    $_SESSION['reg'] = $registernumber;
                    $_SESSION['dep'] = $subjectname['department'];
                    $_SESSION['sem'] = $subjectname['semester'];
                    $_SESSION['r'] = $subjectname['regulation'];
                    $_SESSION['iat'] = $iat;
                    $_SESSION['AddMsg'] = "Mark was added,upload next one";
                    header("location:upload_mark.php");


                }
            } else {
                session_start();
                $_SESSION['reg'] = $registernumber;
                $_SESSION['dep'] = $subjectname['department'];
                $_SESSION['sem'] = $subjectname['semester'];
                $_SESSION['r'] = $subjectname['regulation'];
                $_SESSION['iat'] = $iat;
                $_SESSION['AddMsg'] = "Already Added";
                header("location:upload_mark.php");
            }

        } else {
            session_start();
            $_SESSION['reg'] = $registernumber;
            $_SESSION['dep'] = $subjectname['department'];
            $_SESSION['sem'] = $subjectname['semester'];
            $_SESSION['r'] = $subjectname['regulation'];
            $_SESSION['iat'] = $iat;
            $_SESSION['AddMsg'] = "$registernumber No One Founded,Please Check your Registernumber";
            header("location:upload_mark.php");
        }
    }
    ?>

</body>

</html>