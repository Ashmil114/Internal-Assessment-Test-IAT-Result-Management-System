<?php 
include '../config.php';
$conn = OpenCon();

if($_GET['student_id']){
    $user_id=$_GET['student_id'];
    $sql="DELETE FROM users WHERE id='$user_id'";
    $result=mysqli_query($conn,$sql);

    if($result){
        session_start();
        $_SESSION['msg']="Student data Deleted Successfully";
        header("location:student_list.php");
    }
}

?>