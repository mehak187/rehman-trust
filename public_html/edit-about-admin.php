<?php
  session_start();
  if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if((time()-$_SESSION['LAST_ACTIVE_TIME'])>60*30) {
        header('location:logout.php');
    }
 }

 $_SESSION['LAST_ACTIVE_TIME3'] = time();

 if(!isset($_SESSION['umail'])){
    header('location: login.php');
  }
  
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit FAQ</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions one of the Top IT Company provides services in Web Application, Software development, Mobile App Development, Web Development, UI/UX design and Electrical Hardware Development .">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
<meta name="author" content="fab techsol">
    <link rel="stylesheet" href="../css/main.css">
    <?php 
    include '../css/style.php';
    include 'main.php';
    ?>
</head>

<body>
    <!-- ==================================
        |            Primary nav               |
        ==================================== -->
    <section class="primary-nav-wrapper">
        <div class="container">
            <div class="primary-nav">
                <!-- ----------primary nav left------ -->
                <div class="p-nav-left">
                    <a href="https://www.google.com/maps/dir/32.5040684,74.5111716/fabtech+solutions+sialkot/@32.4919858,74.4989334,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x391eebf05050a257:0x65c6ed11df82a794!2m2!1d74.5271225!2d32.4811242"
                        target="_blank">
                        <div class="icon">
                            <img src="../img/location.png" alt="location-icon">
                        </div>
                        Akbar Plaza near Rescue 1122 Sialkot
                    </a>
                    <a href="mailto:info@fabtechsol" target="_blank">
                        <div class="icon">
                            <img src="../img/mail.png" alt="mail-icon" class="mail-icon-home">
                        </div>
                        Info@fabtechsol
                    </a>
                </div>
                <!-- ----------primary nav right------ -->
                <div class="p-nav-right">
                    <ul class="p-links">
                        <li><a href="../get-hired.php">Get Hired</a></li>
                        <li><a href="../faq.php">FAQ</a></li>
                        <li><a href="../about.php">About</a></li>
                    </ul>
                    <ul class="p-social">
                        <li><a href="#"><img src="../img/twitter.png" alt="twitter-icon"></a></li>
                        <li><a href="https://www.facebook.com/fabulousolutions/" target="_blank"><img
                                    src="../img/fb.png" alt="facebook-icon"></a></li>
                        <li><a href="#" target="_blank"><img src="../img/linkedin.png" alt="linkedin-icon"></a></li>
                        <li><a href="https://www.instagram.com/fabulous_technology_solutions/?hl=en"
                                target="_blank"><img src="../img/instagram.png" alt="instagram-icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================
        |              Main nav               |
        ==================================== -->
     <nav>
        <div class="container">
            <div class="main-nav">
                <!-- ----------logo---------- -->
                <div class="logo">
                    <div class="logo-img">
                        <img src="../img/logo.png" alt="logo">
                    </div>
                    <div>
                        <span>Fabulous</span>
                        <span>Technology Solutions</span>
                    </div>
                </div>
                <!-- -------------------------------
                    |              Mbl nav             |
                    ------------------------------------>
                <div class="mbl-nav">
                    <a href="tel:92 318 232 232 3" class="call call-mbl">
                        <div class="icon">
                            <img src="../img/phone-icon.png" alt="phone-icon">
                        </div>
                        <div class="">
                            <span>+92 318 232 232 3</span>
                            <span>Call to Expert</span>
                        </div>
                    </a>

                    <div class="search-mbl">
                        <input type="search" placeholder="Search" id="search">
                        <label for="search" class="icons">
                            <img class="search" src="../img/search-icon.png" alt="search-icon">
                        </label>
                    </div>

                    <ul class="mbl-menu">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="contact-details.php">Contact </a></li>
                        <li><a href="get-hired-details.php">Get Hired </a></li>
                        <li><a href="news-admin.php">News</a></li>
                        <!--<li><a href="../contact-us.php">Contact Us</a></li>-->
                        <!--<li><a href="../blog.php">Our Blogs</a></li>-->
                    </ul>
                    <div class="close">
                        <img src="../img/close.png" alt="close-icon">
                    </div>
                </div>
                <!-- -------------------------------
                    |        main-nav-right-desktop     |
                    ------------------------------------>
                <div class="main-nav-r">
                    <!-- ----------navbox------------ -->
                    <div class="navbox">
                        <ul>
                            <div class="search-box-d">
                                <input type="search" id="search-d" placeholder="Search">
                            </div>
                             <li><a href="../index.php">Home</a></li>
                            <li><a href="contact-details.php">Admin Contact </a></li>
                            <li><a href="get-hired-details.php">Admin Get Hired </a></li>
                            <li><a href="news-admin.php">Admin News</a></li>
                             <li><a href="logout.php">Logout</a></li>
                            <!--<li><a href="../contact-us.php">Contact Us</a></li>-->
                            <!--<li><a href="../blog.php">Our Blogs</a></li>-->
                            <li class="icons">
                                <img src="../img/Line.png" alt="line-icon">
                                <label for="search-d" class=""><img class="search"
                                        src="../img/search-icon.png" alt="search-icon"></label>
                            </li>
                            <li class="chat-btn"><a href="#">Chat With Us</a></li>
                        </ul>
                    </div>
                    <!-- -----------call----------- -->
                    <a href="tel:92 318 232 232 3" class="call">
                        <div class="icon">
                            <img src="../img/phone-icon.png" alt="phone-icon">
                        </div>
                        <div class="">
                            <span>+92 318 232 232 3</span>
                            <span>Call to Expert</span>
                        </div>
                    </a>
                </div>
                <!-- -------------------------------
                    |           mbl content             |
                    ------------------------------------>
                <div class="res-con">
                    <!-- ---------hamburger------------- -->
                    <div class="togg">
                        <img src="../img/togg.png" alt="hamburger">
                    </div>
                    <div class="chat-btn mbl-chat"><a href="#">Chat With Us</a></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- -------Form--------- -->
    <div class="contact-details-sec contact-us-sec">
        <div class="container">
           <?php 
             include 'connection.php';
             $id2 = $_GET['id'];
             $sql = "select * FROM faq where id = $id2";
             $res1 = mysqli_query($conn,$sql);
             $row1 = mysqli_fetch_assoc($res1); 
             
            if(isset($_POST['submit'])) {
                $question = mysqli_real_escape_string($conn,$_POST['question']);
                $answer =mysqli_real_escape_string($conn,$_POST['answer']);

                $faq_id = $_POST['faq_id'];

                $up_sql = "update tech_tbl set question='$question', answer='$answer' WHERE id=$faq_id" or die("query failed");
                $res = mysqli_query($conn,$up_sql);
                ?>
                <script>window.location="https://fabtechsol.com/admin/manage-faq.php";</script>
                <?php
                $_SESSION['EDIT'] = "hey2";
                }  ?>
            <div class="add-news">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                            enctype="multipart/form-data">
                        <h4>Edit FAQ</h4>
                        <div>
                            <input type="hidden" placeholder="" name="faq_id" id="faq_id" value="<?php echo $row1['id'] ?>">
                        </div>

                        <div class="field">
                            <label for="question">Question</label>
                            <textarea placeholder="" name="question" id="question" value="<?php echo $row1['question'] ?>"></textarea>
                        </div>
                       
                        <div class="field">
                            <label for="answer">Answer</label>
                            <textarea placeholder="" name="answer" id="answer" value="<?php echo $row1['answer'] ?>"></textarea>
                        </div>

                        <div class="submit-btn">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </form>
               </div>
            </div>
            
        </div>
    </div>
    <!-- ==================================
        |           FOOTER SECTION            |
        ==================================== -->
    <footer>
        <div class="container">
            <div class="ftr-main">
                <div class="ftr-col">
                    <p><span>Fabtechsol</span> is a web and mobile app development Company that believes in making
                        tomorrow’s world a better place. We focus on.</p>
                    <div class="social-icons">
                        <a href="#"><img src="../img/twitter.png" alt="twitter-icon"></a>
                        <a href="https://www.facebook.com/fabulousolutions/" target="_blank"><img src="../img/fb.png"
                                alt="facebook-icon"></a>
                        <a href="#" target="_blank"><img src="../img/linkedin.png" alt="linkedin-icon"></a>
                        <a href="https://www.instagram.com/fabulous_technology_solutions/?hl=en" target="_blank"><img
                                src="../img/instagram.png" alt="instagram-icon"></a>
                    </div>
                </div>
                <div class="ftr-col">
                    <a href="https://www.google.com/maps/dir/32.5040684,74.5111716/fabtech+solutions+sialkot/@32.4919858,74.4989334,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x391eebf05050a257:0x65c6ed11df82a794!2m2!1d74.5271225!2d32.4811242"
                        target="_blank">
                        <div class="icon">
                            <img src="../img/location.png" alt="location-icon">
                        </div>
                        Akbar Plaza near Rescue 1122 Sialkot
                    </a>
                    <a href="mailto:info@fabtechsol" target="_blank">
                        <div class="icon">
                            <img src="../img/mail.png" alt="mail-icon" style="width: 24px; height:18px">
                        </div>
                        Info@fabtechsol
                    </a>
                </div>
                <div class="ftr-col">
                    <form action="">
                        <div class="email-box">
                            <input type="email" placeholder="Email">
                            <button type="submit"><img src="../img/send-ftr.png" alt="send-icon-footer"></button>
                        </div>
                    </form>
                    <div class="ftr-call">
                        <a href="tel:92 318 232 232 3" class="call">
                            <div class="icon">
                                <img src="../img/phone-icon.png" alt="phone-icon">
                            </div>
                            <div class="">
                                <span>+92 318 232 232 3</span>
                                <span>Call to Expert</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- ########################
    |              JS            |
    ########################## -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>
     <!-- -------sweet alert------ -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>

</html>