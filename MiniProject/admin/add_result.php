<?php
include '../config.php';
$conn = OpenCon();

// if (isset($_POST['submit'])) {

//     $department = $_POST['department'];
//     $semester = $_POST['semester'];
//     $requlation = $_POST['requlation'];



//     $sql = "SELECT * FROM subjects WHERE department='$department' AND semester='$semester' AND requlation='$requlation';";
//     $result = mysqli_query($conn, $sql);
//     while ($data = $result->fetch_assoc()) {
//         echo $data['subjectcode'] . " ";
//     }
// } else {
//     echo "<h1>error</h1>";
// }
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Result</title>

</head>

<body>
    <?php
    include 'admin_base.php'
        ?>
    <div class="main">
        <div class="container">
            <form  action="upload_mark.php" method="post">
                <h3>ADD RESULTS</h3>
                <div class="input-field">
                    <label for="">Register Number</label>
                    <input class="form-control" name="registernumber">
                </div>
                <div class="input-field">
                    <label for="">Department</label>
                    <select name="department" class="form-control">
                        <option value="">--select--</option>
                        <option value="cse">CSE</option>
                        <option value="ece">ECE</option>
                        <option value="mech">MECH</option>
                        <option value="civil">CIVIL</option>
                    </select>
                </div>
                <div class="input-field">
                    <label for="">Semester</label>
                    <select name="semester" class="form-control">
                        <option value="">--select--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="input-field">
                    <label for="">Regulation</label>
                    <select name="requlation" class="form-control">
                        <option value="">--select--</option>
                        <option value="2017">2017</option>
                        <option value="2021">2021</option>

                    </select>
                </div>
                <div class="input-field">
                    <label for="">Internal Assessment Test Type</label>

                    <select name="iat" class="form-control">
                        <option value="">--select--</option>
                        <option value="1">1 st</option>
                        <option value="2">2 nd</option>
                        <option value="3">3 rd</option>

                    </select>

                </div>
                <input type="submit" name="submit" class="button"></input>
            </form>
        </div>
    </div>
    </div>

    <style>
        .container {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin-top:7rem; */

        }

        form {
            background-color: #fff;
            padding: 2rem;
            width: 500px;
            /* height: 100hv; */
            border-radius: 30px;
            text-align: center;
        }
        h3{
            margin-bottom: 20px;
        }
        .input-field {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .input-field input,select{
            border-top: 0px solid gray;
            border-bottom: 2px solid gray;
            border-left: 0px solid gray;
            border-right: 0px solid gray;
            padding: 5px;
            outline:none;
            font-weight: bold;
            font-size: 16px;
        }
        .input-field input:hover,select:hover{
            border-bottom: 1.5px solid black;
        }
        .input-field input:focus,select:focus{
            border-bottom: 2px solid black;
        }
        .input-field label{
            text-transform: uppercase;
            padding: 5px;
            font-weight: bold;
        }
        .button{
            position: relative;
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

        .button:hover {
            background-color: darkgreen;
        }
    </style>
</body>

</html>