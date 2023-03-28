<?php
  session_start();
  //   ------------check if user is idle or not--------
if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if((time()-$_SESSION['LAST_ACTIVE_TIME'])>60*20) {
        header('location:logout.php');
    }
 }

$_SESSION['LAST_ACTIVE_TIME'] = time();
  if(!isset($_SESSION['a_name'])){
    ?> 
    <script>window.location = "https://khass-trust.000webhostapp.com/admin-login.php";</script>
    <?php
  }
?>