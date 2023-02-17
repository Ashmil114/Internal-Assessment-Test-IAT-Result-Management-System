<?php
include '../config.php';
error_reporting(0);
$conn = OpenCon();
if ($_GET['student_id']) {
    $id = $_GET['student_id'];
    $sql = "SELECT * FROM users WHERE id='$id'";
} else {
    session_start();
    $id_1 = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id='$id_1'";
}
$result = mysqli_query($conn, $sql);
$data = $result->fetch_assoc();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>
        <?php echo $data['username'] ?>'s Details
    </title>





</head>

<body>
    <?php
    include 'admin_base.php'
        ?>

    <div class="container">
        <div class='flex items-center justify-center min-h-screen '>
            <div
                class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl  md:max-w-sm rounded-xl">
                <div class="pb-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="flex justify-center w-full">
                            <div class="relative">
                                <img src="../images/gscetlogo.png"
                                    class="dark:shadow-xl border-white  rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 mt-20 text-center">
                        <h3 class="mb-1 text-2xl font-bold leading-normal text-black ">
                            <?php echo $data['username'] ?>
                        </h3>
                        <h3 class="mb-1 text-2xl font-bold leading-normal text-black">
                            <?php echo $data['registernumber'] ?>
                        </h3>
                        <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                            <div class="text-sm font-bold tracking-wide text-black font-mono text-xl">
                                <?php echo $data['semester'] ?> semester/
                                <?php echo $data['department'] ?> dept
                            </div>
                        </div>

                    </div>
                    <div class="pt-6 mx-6 mt-6  ">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full px-4 ">
                                <p class="mb-4  text-black">
                                    Email:
                                    <?php echo $data['email'] ?>
                                </p>
                                <p class="mb-4  text-black">
                                    Phone:
                                    <?php echo $data['phone'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="flex  justify-between m-5">
                            <?php
                            echo "<a href='edit_student.php?student_id={$data['id']}' class='text-white bg-blue-600 py-3 rounded-xl hover:bg-blue-800 px-10' >Edit</a>";
                            ?>
                            <?php
                            echo "<a onClick=\" javascript:return confirm('Are u sure to delete')\" href='delete_student.php?student_id={$data['id']}' class='text-white bg-red-600 py-3 rounded-xl hover:bg-red-800 px-10'>Delete</a>";
                            ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


</body>

</html>