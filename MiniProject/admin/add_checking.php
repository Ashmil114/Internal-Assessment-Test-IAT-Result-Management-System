<?php
include '../config.php';
// <!-- Database Connecting -->
$conn = OpenCon();
// echo "Connected Successfully";



if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $registernumber = $_POST['registernumber'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];

    $check = "SELECT * FROM users WHERE registernumber='$registernumber'";
    $check_user = mysqli_query($conn, $check);
    $row_count = mysqli_num_rows($check_user);

    if ($row_count == 1) {
        session_start();
        $mas = "Already Existed";
        $_SESSION['suc'] = $mas;
        header("location:add_students.php");
        
    } else {


        $sql = "INSERT INTO `users` (`username`, `phone`, `email`, `usertype`, `password`, `registernumber`, `department`, `semester`) VALUES ('$username', '$phone', '$email', 'student', '$password', '$registernumber', '$department', '$semester');";
        if ($conn->query($sql) == true) {
            session_start();
            $mas = "Added";
            $_SESSION['suc'] = $mas;
            header("location:add_students.php");
        } else {
            echo "ERROR : $sql <br> $conn->error";
        }
        CloseCon($conn);
    }
}
?>