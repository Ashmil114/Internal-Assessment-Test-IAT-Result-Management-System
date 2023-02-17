<?php
$registernumber = $_GET['registernumber'];


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Result</title>
</head>

<body class="bg-green-600">
    <div class="main">
        <div class='container'>
            <form action="mark_sheet.php?reg=<?php echo $registernumber; ?>" method="post" class='bg-white p-5 '>
                <h3>SELECT YOUR SEMESTER AND IAT TYPE </h3>
                <label class='text-black '>IAT Type</label>
                <select name="iat" class="border">
                    <option value="">--select--</option>
                    <option value="1">1 st</option>
                    <option value="2">2 nd</option>
                    <option value="3">3 rd</option>
                </select><br>
                <label for="">Semester</label>
                <select name="sem" class="border">
                    <option value="">--select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select><br>
                <input type="submit" value="View" name='submit' class="button">
            </form>
        </div>
    </div>

    <style>
        body {
            background-color: #16a34a;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h3 {
            text-align: center;
            margin-bottom: 50px;
            text-decoration: underline;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }

        form select,
        option {
            border: 1.5px solid black;
            outline: none;
            padding: 5px;
            border-radius: 20px;
            font-weight: bold;
            margin: 10px;

        }

        form label {
            font-weight: bold;
            padding: 5px;
            text-transform: uppercase;
        }

        form select:hover,
        option:hover {
            border: 2px solid green;
        }

        .button {
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