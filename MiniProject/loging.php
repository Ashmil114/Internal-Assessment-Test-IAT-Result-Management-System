<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="loging.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>

</head>

<body>
    <div class="invalid">
        <?php
        session_start();
        session_destroy();
        echo $_SESSION['Msg'];
        ?>
    </div>
    <div class="box">

        <div class="container">

            <div class="top">
                <span>

                </span>

                <header>Staff Login</header>
            </div>
            <form action="login_checking.php" method="post">
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username" required autocomplete="off">
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="password" required
                        autocomplete="off">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="Login" name="submit">
                </div>
            </form>
            <div class="two-col">
                <div class="two">
                    <a href="registration.php" style="text-decoration:none;"><span>Create an account?</span></a>
                    <label><a href="base.php">Back to Home ?</a></label>
                </div>
            </div>
        </div>

        <!-- student login -->
        <div class="container">

            <div class="top">

                <header>Student login</header>
            </div>
            <form action="student_login_checking.php" method="post">
                <div class="input-field">
                    <input type="text" class="input" placeholder="Register Number" name="registernumber" required
                        autocomplete="off">
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="password" required
                        autocomplete="off">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="Login" name="submit">
                </div>
            </form>
            <div class="two-col">
                <div class="two">
                    <a href="registration.php" style="text-decoration:none;"><span>Create an account?</span></a>
                    <label><a href="base.php">Back to Home ?</a></label>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');

        * {
            font-family: 'poppins', sans-serif;
        }

        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgb(0, 0, 0)), url("images/gscet.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;

        }

        .invalid {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            color: #fff;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }

        .container {
            /* background: linear-gradient(rgba(0,0,0,0.5),rgb(0, 0, 0)); */
            width: 350px;
            display: flex;
            flex-direction: column;
            padding: 50px 15px 50px 15px;
            border-radius: 30px;
            background: rgba(0, 0, 0,0.6);
            margin: 10px;
            


        }

        span {
            color: #fff;
            font-size: small;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        header {
            color: #fff;
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        .input-field .input {
            height: 45px;
            width: 87%;
            border: none;
            border-radius: 30px;
            color: #fff;
            font-size: 15px;
            padding: 0 0 0 45px;
            background: rgba(255, 255, 255, 0.1);
            outline: none;
        }

        i {
            position: relative;
            top: -33px;
            left: 17px;
            color: #fff;
        }

        ::-webkit-input-placeholder {
            color: #fff;
        }

        .submit {
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            outline: none;
            width: 100%;
            color: black;
            background: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            transition: .3s;
        }

        .submit:hover {
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.6);
        }

        .two-col {
            display: flex;
            flex-direction: row;
            text-align: center;
            justify-content: center;
            color: #fff;
            font-size: small;
            margin-top: 10px;
        }

        label a {
            text-decoration: none;
            color: #fff;
        }
    </style>

</body>

</html>