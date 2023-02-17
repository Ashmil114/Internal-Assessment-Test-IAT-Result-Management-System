<?php
include '../config.php';
$conn = OpenCon();
error_reporting(0);

if (isset($_POST['submit'])) {

    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $requlation = $_POST['requlation'];
    $registernumber = $_POST['registernumber'];
    $iat = $_POST['iat'];



    $sql = "SELECT * FROM subjects WHERE department='$department' AND semester='$semester' AND regulation='$requlation';";
    $result = mysqli_query($conn, $sql);

} else {
    session_start();
    $registernumber = $_SESSION['reg'];
    $department = $_SESSION['dep'];
    $semester = $_SESSION['sem'];
    $iat = $_SESSION['iat'];
    // $requlation = $_SESSION['r'];

    $sql = "SELECT * FROM subjects WHERE department='$department' AND semester='$semester' AND regulation='{$_SESSION['r']}';";
    $result = mysqli_query($conn, $sql);



}


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>

</head>

<body>
    <?php
    include 'admin_base.php'
        ?>
    <div class="container ">
        <div class="d-flex justify-content-center ">

            <form class="bg-secondary px-5 py-2 " action="mark_to_database.php" method="post">
                <h3><?php echo $_SESSION['AddMsg']; ?></h3>
                <div class="input-field">
                    <label for="">Register Number</label>
                    <input type="text" class="form-control" value="<?php echo $registernumber; ?>"
                        name="registernumber">

                </div>
                <div class="input-field">
                    <label for="">Semester</label>
                    <input type="text" class="form-control" value="<?php echo $semester ?>" name="semester">
                </div>
                <div class="input-field">
                    <label for="">IAT</label>
                    <input type="text" class="form-control" value="<?php echo $iat ?>" name="iat">
                </div>
                <div class="input-field d-flex justify-content-between">
                    <label for="">SubCode</label>
                    <select name="subjectcode" class="form-control">
                        <option value="">--select--</option>
                        <?php
                        while ($data = $result->fetch_assoc()) {
                            echo "<option value='{$data['subjectcode']}'>{$data['subjectcode']} : {$data['subjectname']}</option>";
                        }

                        ?>

                    </select>
                </div>
                <div class="input-field">
                    <label for="">Mark</label>
                    <input type="text" class="form-control" name="mark">
                </div>

                <input type="submit" name="submit" class="button"></input>
            </form>
        </div>
    </div>
    </div>

    <style>
        .container {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin-top:7rem; */

        }

        form {
            background-color: #fff;
            padding: 2rem;
            width: 500px;
            /* height: 100hv; */
            border-radius: 30px;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
        }

        .input-field {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .input-field input,
        select {
            border-top: 0px solid gray;
            border-bottom: 2px solid gray;
            border-left: 0px solid gray;
            border-right: 0px solid gray;
            padding: 5px;
            outline: none;
            font-weight: bold;
            font-size: 16px;
        }

        .input-field input:hover,
        select:hover {
            border-bottom: 1.5px solid black;
        }

        .input-field input:focus,
        select:focus {
            border-bottom: 2px solid black;
        }

        .input-field label {
            text-transform: uppercase;
            padding: 5px;
            font-weight: bold;
        }

        .button {
            position: relative;
            margin: 5px;
            width: 100px;
            padding: 12px;
            margin: 3px;
            /* border-top: 0px solid gray;
            border-bottom: 1.5px solid gray;
            border-left: 0px solid gray;
            border-right: 0px solid gray; */
            border-radius: 20px;
            outline: none;
            border: 0 solid black;
            background-color: green;
            color: white;
        }

        .button:hover {
            background-color: darkgreen;
        }
    </style>


</body>

</html>