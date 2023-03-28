<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php
        include 'form-style.php';
        include 'translate.php';
    ?>
  <style>
   
    
.goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
}

#goog-gt-tt,
.goog-te-balloon-frame {
    display: none !important;
}

.goog-te-gadget {
    height: 28px !important;
    overflow: hidden;
}

.goog-logo-link {
    display: none !important;
}

body {
    top: 0px !important;
}

.main-p-translate {
    margin-top: -30px;
}
  </style>
</head>

<body>
    <div class="login-form">
        <form class="reg" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <h1>Register</h1>
            <div class="form-field">
                <input type="text" name="name" id="name" placeholder="Name" required>
            </div>

            <div class="form-field">
                <input type="email" name="email" id="email" placeholder="Email address" required>
            </div>

            <div class="form-field">
                <input type="text" name="mob" id="mob" placeholder="Mobile Number" required>
            </div>

            <div class="form-field">
                <input type="password" name="pass" id="pass" placeholder="Password" required>
            </div>

            <div class="form-field">
                <input type="password" name="repass" id="repass" placeholder="Retype password" required>
            </div>

            <div class="form-field">
                <input type="text" name="country" id="country" placeholder="Country" required>
            </div>

            <div class="form-field">
                <input type="text" name="region" id="region" placeholder="Region/Province" required>
            </div>

            <div class="form-field">
                <input type="text" name="city" id="city" placeholder="City" required>
            </div>

            <div class="submit-btn">
                <input type="submit" value="Register" name="submit">
            </div>
            <div class="alt-link">
                <p>Already have an acoount, <a href="login.php">Log in</a></p>
            </div>
        </form>
    </div>
    <!-----------successful model------->
    <div class="m-4">
    <div id="myModal" class="modal suc-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Congratulations</h5>
                    <button type="button" class="btn-close close-popup" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="swal-icon swal-icon--success">
                        <span class="swal-icon--success__line swal-icon--success__line--long"></span>
                        <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
                        <span class="swal-icon--success__ring"></span>
                        <span class="swal-icon--success__hide-corners"></span>
                    </div>
                    <p class="text-center position-relative">Your account is created successfully</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-popup" data-bs-dismiss="modal">Cancel</button>
                    <a href="login.php"><button type="button" class="btn btn-primary">
                        Login
                    </button></a>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-----------email already exist model------->
    <div class="m-4">
    <div id="myModal" class="modal email-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                     <button type="button" class="btn-close close-popup d-block ms-auto" data-bs-dismiss="modal"></button>
                    <div class="swal-icon swal-icon--error">
                        <div class="swal-icon--error__x-mark">
                            <span class="swal-icon--error__line swal-icon--error__line--left"></span>
                            <span class="swal-icon--error__line swal-icon--error__line--right"></span>
                        </div>
                     </div>
                    <p class="text-center">Email already exist.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-popup" data-bs-dismiss="modal">Cancel</button>
                    <a href="login.php"><button type="button" class="btn btn-primary">
                        Login instead
                    </button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email =mysqli_real_escape_string($conn, $_POST['email']);
        $phone =mysqli_real_escape_string($conn, $_POST['mob']);
        $pass =mysqli_real_escape_string($conn, $_POST['pass']);
        $repass =mysqli_real_escape_string($conn, $_POST['repass']);
        $country = $_POST['country'];
        $region = $_POST['region'];
        $city = $_POST['city'];
// secure passwords
        $s_pass = password_hash($pass,PASSWORD_BCRYPT);
        $s_repass = password_hash($repass,PASSWORD_BCRYPT);
// select email
        $sql_email = "SELECT * FROM register WHERE email='$email'";
        $res_email = mysqli_query($conn,$sql_email);

        $num_email = mysqli_num_rows($res_email);
// Condition1:*Check email exist or not* if nmbr of rows greater than 0 show error email already exist
        if($num_email>0){
            ?>
            <script>
        	$(document).ready(function(){
        		$(".modal.email-modal").css("display", "flex");
        	    $(".modal.email-modal").css("background", "rgba(0,0,0,0.55)");
        		 $(".close-popup").click(function () {
                $(".modal").css("display", "none");
                });  
        	});
            </script>
            <?php
        }
// Condition1:else(if nmbr of rows is 0 it means there is no already existing email) then exucute the following code.
        else{
    // Condition1b: Check pass and retype pass are same. If same insert the record in database
    // condition m jo pass and repass use kren ge wo without encryption wla kren ge
            if($pass == $repass){
                $sql_insert = "INSERT INTO register(name,email,phone,pass,repass,country,region,city) 
                VALUES('$name','$email','$phone','$s_pass','$s_repass','$country','$region','$city')";

                $res_insert = mysqli_query($conn,$sql_insert);
                ?>
                <script>
	$(document).ready(function(){
		$(".modal.suc-modal").css("display", "flex");
		$(".modal.suc-modal").css("background", "rgba(0,0,0,0.55)");
		 $(".close-popup").click(function () {
        $(".modal").css("display", "none");
        });  
	});
</script>
                <?php
                ?> 
                <!--<script>window.location = "https://khass-trust.000webhostapp.com/login.php";</script>-->
                <?php
            }
    // Condition1b: Else show error
            else{
                ?><script>
                swal("", "Password and retype Password are not same", "error");
            </script><?php
            }
        }
    }
?>