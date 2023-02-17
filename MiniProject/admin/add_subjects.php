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
    <!-- <link rel="stylesheet" href="../registrations.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->

    <title>Add Subject</title>

</head>

<body>
    <?php
    include 'admin_base.php'
        ?>

    <div class="box">
        <div class="container">
            <form action="add_subject_checking.php" method="post">
                <h3>Add Subject</h3>
                <span>
                    <?php
                    session_start();
                    session_destroy();
                    echo $_SESSION['Msg'];
                    ?>
                </span>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="subjectname" placeholder="Subject name" required
                        autocomplete="off">
                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="subjectcode" placeholder="Subject Code" required
                        autocomplete="off">
                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="department" placeholder="department" required
                        autocomplete="off">
                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="semester" placeholder="semester" required autocomplete="off"
                        maxlength="1">
                </div>
                <div class="input-field" style="display:flex; justify-content: space-between; ">
                    <input type="text" class="input" name="requlation" placeholder="requlation" required
                        autocomplete="off" maxlength="4">
                </div>
                <div class="input-sub">
                    <input type="submit" class="submit" value="Add" name="submit">

                </div>

            </form>

        </div>
        <div class="back">

            <label><a href="home.php">Back to Home ?</a></label>

        </div>
    </div>


    <style>
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin-top:7rem; */

        }

        form {
            background-color: #fff;
            padding: 2rem;
            width: 500px;
            border-radius: 30px;
        }

        form h3 {
            text-align: center;
            padding: 5PX;
        }

        form span {
            text-align: center;
            padding: 5PX;
        }

        .input-field {
            margin: 5px;
            /* border-style: none; */
        }

        .input-field input {
            width: 100%;
            padding: 12px;
            margin: 3px;
            border-top: 0px solid gray;
            border-bottom: 1.5px solid gray;
            border-left: 0px solid gray;
            border-right: 0px solid gray;
            /* border-radius:20px; */
            /* transition: .5s border-bottom; */

        }

        .input-field input:hover {
            border-bottom: 1.7px solid black;
        }

        .back {
            displey: flex;
            justify-content: center;
            text-align: center;
            /* margin-top: 30px; */
            margin-bottom: 50px;


        }

        .back label a {
            color: #fff;
            text-decoration: none;


        }

        input:focus {
            outline: none;
        }

        .input-sub .submit {
            position: relative;
            left: 35%;
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

        .input-sub .submit:hover {
            background-color: darkgreen;
        }
    </style>


</body>

</html>

<!-- INSERT INTO `subjects` (`id`, `subjectcode`, `subjectname`, `department`, `semester`, `requlation`) VALUES (NULL, 'MA8151', 'eng maths 1', 'cse', '1', '2017'); -->