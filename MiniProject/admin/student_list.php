<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <?php
    include '../config.php';
    error_reporting(0);
    $conn = OpenCon();
    $sql = "SELECT * FROM users WHERE usertype='student'";
    $result = mysqli_query($conn, $sql);
    ?>
    <title>Student Details</title>


</head>

<body>
    <?php
    include 'admin_base.php'
        ?>
    <center>
        <h3 style="margin-bottom:40px; color:#fff; margin-top:100px;">Stucent details</h3>

        <h5 style="margin-bottom:20px; color:#fff ; margin-top:40px;">
            <?php
            session_start();
            session_destroy();
            error_reporting(0);
            echo $_SESSION['msg'];
            ?>
        </h5>

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-gray-200 border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-bold text-black px-6 py-4 ">
                                        S NO
                                    </th>
                                    <th scope="col" class="text-sm font-bold text-black px-6 py-4 ">
                                        NAME
                                    </th>
                                    <th scope="col" class="text-sm font-bold text-black px-6 py-4 ">
                                        REGISTER NUMBER
                                    </th>
                                    <th scope="col" class="text-sm font-bold text-black px-6 py-4 ">
                                        MORE
                                    </th>
                                </tr>
                            </thead>
                            <?php
                            while ($data = $result->fetch_assoc()) {
                                $i++;
                                ?>
                                <tbody>
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-green-300">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900 text-left">
                                            <?php echo $i; ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-semibold px-6 py-4 whitespace-nowrap text-left">
                                            <?php echo "{$data['username']}"; ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-semibold px-6 py-4 whitespace-nowrap text-left">
                                            <?php echo "{$data['registernumber']}"; ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-semibold px-6 py-4 whitespace-nowrap text-left">
                                            <?php
                                            echo "<a href='more_details.php?student_id={$data['id']}' class=' hover:bg-green-600 bg-green-500 p-1 rounded-full text-white'>More Details</a>";

                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php

                            }
                            ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </center>

    <style>
        table {
            background-color: #fff;
            /* width: 100%; */
            border-collapse: collapse;



        }

        table td,
        table th {
            padding: 12px 15px;
            padding: 6px 7px;
            border: 1px solid #ddd;
            text-align: center;
        }


        /* @media(max-width:953px) {
            

            table thead {
                display: none;
            }

            table,
            table tbody,
            table tr,
            table td {
                display: block;
                


            }

            table tr {
                margin-bottom: 20px;
            }

            .table td {
                text-align: right;
                padding-left: 50%;
                text-align: right;
                position: relative;

            }

            table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 15px;
                font-weight: bold;

            }

            .br {
                background-color: black;
            }
        } */
    </style>



</body>

</html>