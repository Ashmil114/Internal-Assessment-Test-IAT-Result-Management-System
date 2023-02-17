<?php
include 'config.php';
?>



<?php
// <!-- Database Connecting -->
$conn = OpenCon();
// echo "Connected Successfully";



if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $password = $_POST['password'];
    $registernumber = $_POST['registernumber'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];

    // echo $username ." ".$phone." ".$email," ".$usertype." ".$password;

    $sql = "INSERT INTO `users` (`username`, `phone`, `email`, `usertype`, `password`, `registernumber`, `department`, `semester`) VALUES ('$username', '$phone', '$email', '$usertype', '$password', '$registernumber', '$department', '$semester');";
    if ($conn->query($sql) == true) {
        session_start();
        $msg= "Registeration Successfully, please login using your username and password";
        $_SESSION['Msg']=$msg;
        header("location:registration.php");
    } else {
        session_start();
        $msg= "ERROR : $sql <br> $conn->error";
        $_SESSION['Msg']=$msg;
        header("location:registration.php");
    }
    CloseCon($conn);
}
?>