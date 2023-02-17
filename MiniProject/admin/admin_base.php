<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="admin_base_css.css"> -->

    <title>admin</title>
</head>

<body>

    <div class="header">
        <div class="top-nav">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="add_students.php">ADD STUDENT</a></li>
                <li><a href="add_subjects.php">ADD SUBJECTS</a></li>
                <li><a href="student_list.php">VIEW STUDENTS DETAILS</a></li>
                <li><a href="add_result.php">ADD RESULTS</a></li>


            </ul>
            <a href="../loging.php"><button>Logout</button></a>



        </div>



    </div>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgb(0, 0, 0)), url("../images/gscet.jpg"); */
            /* background: linear-gradient(rgba(0, 0, 0, 0.1), rgb(0, 0, 0)), #16a34a; */
            background-color: #166534;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .header {
            width: 100%;
            height: 20vh;
            padding-left: 5%;
            padding-right: 5%;

        }

        .top-nav {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 0 15px;
            border-bottom: 1px solid #bababa;

        }

        .top-nav ul li {
            list-style: none;
            display: inline-block;
            margin-right: 30px;
            margin-top: 10px;
            margin-bottom: 10px;


        }

        .top-nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 15px;
        }



        .top-nav ul li a:hover {
            color: #CCFFBB;

        }

        .top-nav button {
            background: #CCFFBB;
            color: black;
            border: 0;
            outline: 0;
            border-radius: 30px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</body>

</html>