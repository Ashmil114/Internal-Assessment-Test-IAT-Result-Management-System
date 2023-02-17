<?php
session_start();
include '../config.php';
?>


<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../registrations.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Add student</title>

</head>

<body>
    <?php
    include 'admin_base.php';

    $conn = OpenCon();

    $id = $_GET['student_id'];

    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    ?>

    <?php
    
    $id = $_GET['student_id'];

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $registernumber = $_POST['registernumber'];
        $department = $_POST['department'];
        $semester = $_POST['semester'];
        

        $sql = "UPDATE users SET username='$username',phone='$phone',email='$email',password='$password',registernumber='$registernumber',department='$department',semester='$semester' WHERE id='$id'";

        $result = mysqli_query($conn, $sql);

        if($result){
            session_start();
            $_SESSION['msg']="Student Data updated";
            session_start();
            $_SESSION['id']=$id;
            header("location:more_details.php");
        }


        CloseCon($conn);
    }

    ?>

    <div class="box">
        <div class="container">

            <div class="top">


                <header>Edit Student Datas</header>
            </div>
            <form action="#" method="post">
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username" required autocomplete="off"
                        value="<?php echo $data['username'] ?>" >
                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="phone" placeholder="Phone" required autocomplete="off"
                        value="<?php echo $data['phone'] ?>" maxlength="10">

                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="email" class="input" name="email" placeholder="Email" required autocomplete="off"
                        value="<?php echo $data['email'] ?>">

                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="registernumber" placeholder="registernumber" required
                        autocomplete="off" value="<?php echo $data['registernumber'] ?>">
                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="department" placeholder="department" required
                        autocomplete="off" value="<?php echo $data['department'] ?>" >
                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="semester" placeholder="semester" required autocomplete="off"
                        value="<?php echo $data['semester'] ?>" maxlength="1">
                </div>
                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="password" required
                        autocomplete="off" value="<?php echo $data['password'] ?>">
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Update" name="submit">
                </div>
            </form>
        </div>
    </div>


    
</body>

</html>