<?php
error_reporting(0);
include 'config.php';
?>

<?php
session_start();
$conn = OpenCon();

if (isset($_POST['submit'])) {
    $reg = $_POST['registernumber'];
    $pass = $_POST['password'];

    $sql = "select * from users where registernumber = '" . $reg . "' AND password = '" . $pass . "'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    

    if ($row["usertype"] == "student") {
        $_SESSION['reg']=$reg;
        $_SESSION['usertype'] = "student";

        header("location:student/studentpage.php");
    }
    else {

        session_start();
        $msg= "Invaliad Username or password";
        $_SESSION['Msg']=$msg;
        header("location:loging.php");

    }



}
?>