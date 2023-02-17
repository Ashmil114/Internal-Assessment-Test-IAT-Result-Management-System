<?php
session_start();
// echo 'Admin Page';

if (!isset($_SESSION['username'])) {
    header("location:loging.php");

} elseif ($_SESSION['usertype'] == 'student') {
    header("location:loging.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>
    
    <div class="main">
        <ul>
        <li class="container">
            <a href="add_students.php">ADD STUDENT</a>

        </li>
        <li class="container">
            <a href="add_subjects.php">ADD SUBJECTS</a>

        </li>
        <li class="container">
            <a href="student_list.php">VIEW STUDENTS DETAILS</a>


        </li>
        <li class="container">
            <a href="add_result.php">ADD RESULTS</a>
        </li>
        <li class="container">
            <a href="../loging.php">LOGOUT</a>
        </li>
    </ul>
    </div>

    <style>
        body{
            background-color: #16a34a;
        }
        .main{
            display:flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        ul{
            list-style:none ;
            background-color: #fff;
            padding: 50px;
            border-radius:20px;
        }
        li{
            padding: 10px;
            
        }
        .container a{
            text-decoration: none;
            background-color: #fff;
            color: black;
            margin-left:10px;
            padding-left:15px;
            font-size:24px;
            /* padding:5px; */

        }
        .container a:hover{
            border-left: 5px solid black ;
            font-weight: bold;
        }
    </style>
</body>

</html>
