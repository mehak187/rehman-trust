<?php
 include 'admin-login-auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="about-admin.css">
    <link rel="stylesheet" href="adminhome.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../path/to/flowbite/dist/flowbite.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <!-- <link rel="stylesheet" href="about-admin.css"> -->
    <link rel="stylesheet" href="admin-partner.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>volunteer admin</title>
    <?php
        include 'main-style.php';
    ?>
</head>

<body>
    <div class="nav-admin-about">
        <?php
            include 'aside.php';
        ?>
        <div class="r-content-main relative overflow-x-auto shadow-sm sm:rounded-lg">
            <div class="heading">
                <div class="admin-heading">
                    <h1><?php echo $_SESSION['a_name'] ."'s"?> Admin Panel</h1>
                    <div class="logout-btn">
                          <a href="logout-admin.php">Log out</a>
                    </div>
                </div>
                <div class="admin-home">
                    <h1></i>Volunteer Form</h1>
                </div>
            </div>
            <section class="tbl-main">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sr#
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Person Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Contact
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Form submission Date
                        </th>


                    </tr>
                </thead>
                <tbody>
                <?php
                include 'connection.php';
                $sql = "SELECT * FROM vol_admin";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res)){
    ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          <?php echo $row['vol_id'] ?>
                        </th>
                        <td class="px-6 py-4">
                             <?php echo $row['name'] ?>
                        </td>
                        <td class="px-6 py-4">
                             <?php echo $row['telephone'] ?>
                        </td>
                        <td class="px-6 py-4">
                              <?php echo $row['email'] ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php echo $row['f_date'] ?>
                        </td>

                        <td class="px-6 py-4">
                            <a href="voulnteer-detail-admin.php?vol_id=<?php echo $row['vol_id'];?>"
                                class="font-medium admin-about-btn1 back-ground-blue-600 dark:text-blue-500 ">Detail</a>

                        </td>
                    </tr>

            <?php } ?>
                </tbody>
            </table>
            </section>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</body>

</html>