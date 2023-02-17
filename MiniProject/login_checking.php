<?php
error_reporting(0);
include 'config.php';
?>

<?php
session_start();
$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "select * from users where username = '" . $uname . "' AND password = '" . $pass . "'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "student") {

        $_SESSION['username'] = $uname;
        $_SESSION['usertype'] = "student";

        header("location:student/studentpage.php");
    } elseif ($row["usertype"] == "admin") {

        $_SESSION['username'] = $uname;
        $_SESSION['usertype'] = "admin";
        header("location:admin\adminpage.php");
    } else {
        session_start();
        $msg= "Invaliad Username or password";
        $_SESSION['Msg']=$msg;
        header("location:loging.php");

    }


}
?>