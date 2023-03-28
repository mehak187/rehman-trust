<?php
 include 'admin-login-auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="adminhome.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../path/to/flowbite/dist/flowbite.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="about-admin.css">
    <!-- <link rel="stylesheet" href="managmnet-admin.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog admin 2</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php 
        include 'managmnet-admin-style.php';
        include 'main-style.php';

        ?>

</head>

<body>
    <div class="nav-admin-about">
        <?php 
          include 'aside.php';
        ?>
        <div class="r-content-main relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="heading">

                    <div class="admin-heading">
<h1><?php echo $_SESSION['a_name'] ."'s"?> Admin Panel</h1>
                        <div class="logout-btn">
                             <a href="logout-admin.php">Log out</a>
                        </div>

                    </div>
                <form action="" method="POST" enctype="multipart/form-data" class="blog-form px-4">
                    <div class="about-changes temp">
                        <div class="header" style="justify-content:start">
                            <h1><label for="head"> Add Header</label></h1>
                            <textarea name="head" id="head" required></textarea>
                        </div>
                        <div class="imgss">
                            <div class="img">
                                <h1>Add Picture</h1>
                                <!-- <a href=""><i class="fa-solid fa-user-large"></i></a> -->
                                <input type="file" name="pfile" required>
                            </div>
                            <div class="img">
                                <h1>Add Header Picture</h1>
                                <!-- <a href=""><i class="fa-solid fa-plus"></i></a> -->
                                <input type="file" name="hfile" required>
                            </div>
                        </div>
                    </div>
                    <div class="about-changes">
                        <div class="header">
                            <h1><label for="date">Add Publish Date</h1>
                            <textarea name="date" id="date" required></textarea>
                        </div>
                    </div>
                    <div class="discripition">
                        <h1><label for="des">Descripition</h1>
                        <textarea name="des" id="des" required></textarea>

                        <input type="submit" value="Add Blog" name="submit">
                    </div>
                </form>
            </div>
            <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
            <script src="../path/to/flowbite/dist/flowbite.js"></script>
        </div>
</body>

</html>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){

        $head = $_POST['head'];
        $date = $_POST['date'];
        $des= mysqli_real_escape_string($conn,$_POST['des']);

        $pfile = $_FILES['pfile'];
        $hfile = $_FILES['hfile'];

        $pfile_name = $pfile['name'];
        $hfile_name = $hfile['name'];

        $pfiletmp = $pfile['tmp_name'];
        $hfiletmp = $hfile['tmp_name'];

        $pfileext = explode('.',$pfile_name);
        $hfileext = explode('.',$hfile_name);

        $pfileext_lower = strtolower(end($pfileext));
        $hfileext_lower = strtolower(end($hfileext));

        $pfileext_main = array('png','jpg','jpeg');
        $hfileext_main = array('png','jpg','jpeg');

        if((in_array($pfileext_lower,$pfileext_main)) && (in_array($hfileext_lower,$hfileext_main))){
            $pdest_file = 'upload/'.$pfile_name;
            move_uploaded_file($pfiletmp,$pdest_file);

            $hdest_file = 'upload/'.$hfile_name;
            move_uploaded_file($hfiletmp,$hdest_file);

        $sql = "INSERT INTO blog(head,date,des,pfile,hfile) VALUES('$head','$date','$des','$pdest_file',' $hdest_file')";
        $res = mysqli_query($conn,$sql) or die("Query failed"); 
       
?><script>
swal("", "Data entered successfully", "success");
</script><?php

         }
else{
   
?><script>
swal("", "Please choose an image", "error");
</script><?php

}
    }
?>