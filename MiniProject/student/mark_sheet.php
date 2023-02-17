<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mark Sheet</title>
</head>

<body class="bg-green-600">
    <?php
    include '../config.php';
    $conn = OpenCon();
    $reg = $_GET['reg'];
    if (isset($_POST['submit'])) {
        $sem = $_POST['sem'];
        $iat = $_POST['iat'];
        $sql = "SELECT * FROM marks WHERE registernumber='$reg' AND semester='$sem' AND iat='$iat'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_num_rows($result);
        $total_u_get = 0;
        $result_array = new ArrayObject(
            array()
        );

        session_start();

        $_SESSION['reg'] = $reg;
        $_SESSION['sem'] = $sem;
        $_SESSION['iat'] = $iat;


    }


    ?>



    <div class="container">
        <div class="flex justify-center p-10  ">
            <p class="bg-white p-4 font-medium">
                <?php echo "Register Number : " . $reg . "<br></br>Semester : " . $sem . "<br></br>" . $iat . " Internal Assessment Test Result" ?>
            </p>
        </div>
        <?php if ($row > 0) { ?>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-gray-200 border-b">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            SUBJECT CODE
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            SUBJECT NAME
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            MARK
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            RESULT
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                    while ($data = $result->fetch_assoc()) {
                                        $total_u_get += $data['mark'];
                                        ?>
                                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                <?php echo $data['subjectcode'] ?>
                                            </td>
                                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                <?php echo $data['subjectname'] ?>
                                            </td>
                                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                <?php echo $data['mark'] ?>
                                            </td>
                                            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                                <?php
                                                if ($data['mark'] >= 45) {
                                                    echo "PASS";
                                                    $result_array->append('PASS');

                                                } else {
                                                    echo "FAIL";
                                                    $result_array->append('FAIL');
                                                }

                                                ?>

                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex justify-center p-5">
                <?php
                $total_mark = $row * 100;
                $per = ($total_u_get * 100) / $total_mark;
                $i = 0;
                while ($i < count($result_array)) {
                    if ($result_array[$i] == 'FAIL') {
                        $status = 'FAIL';
                        break;
                    } else {
                        $status = 'PASS';
                    }
                    $i++;
                }

                $_SESSION['status'] = $status;
                $_SESSION['per'] = $per;
                ?>
                <p class=" text-white font-medium">Total Percentage :
                    <?php echo $per . "% &nbsp   Status : &nbsp" . $status; ?>
                </p>
            </div>
            <div class="flex justify-center   ">
                <a class="hover:text-black text-white font-medium" href="../pdf.php" id="print">Print</a>
            </div>

            <?php
        } else {
            echo "<h1 class='flex justify-center p-10 font-medium text-white'>RESULT IS NOT FOUND</h1>";
        } ?>
        <div class="flex justify-center   ">
            <a class="hover:text-black text-white font-medium m-10" href="studentpage.php">Back to Home?</a>
        </div>

    </div>

    </div>


    <style>
        #print{
            position: relative;
            margin: 5px;
            width: 100px;
            padding: 8px;
            margin: 3px;
            border-radius: 15px;
            outline: none;
            border: 0 solid black;
            background-color: black;
            color: #fff;
            text-align: center;
        }

        #print:hover {
            background-color: #fff;
            color: black;
        }
        
    </style>
</body>

</html>