<?php
include '../config.php';
?>



<?php

$conn = OpenCon();



if (isset($_POST['submit'])) {

    $subjectname = $_POST['subjectname'];
    $subjectcode = $_POST['subjectcode'];
    $requlation = $_POST['requlation'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];

    // echo $username ." ".$phone." ".$email," ".$usertype." ".$password;

    $sql = "INSERT INTO `subjects` (`subjectcode`, `subjectname`, `department`, `semester`, `regulation`) VALUES ('$subjectcode', '$subjectname', '$department', '$semester', '$requlation');";
    if ($conn->query($sql) == true) {
        session_start();
        $msg= "Subject Added";
        $_SESSION['Msg']=$msg;
        header("location:add_subjects.php");
    } else {
        session_start();
        $msg= "ERROR : $sql <br> $conn->error";
        $_SESSION['Msg']=$msg;
        header("location:add_subjects.php");
    }
    CloseCon($conn);
}
?>