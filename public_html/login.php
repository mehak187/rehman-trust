<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Login</title>
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
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <h1>Login</h1>

            <div class="form-field">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-field">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required>
            </div>

            <div class="submit-btn">
                <input type="submit" value="Login" name="submit">
            </div>
            <div class="alt-link">
                <p>Don't have an account, <a href="register.php">Sign up</a></p>
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
                    <p class="text-center position-relative">You are signed in successfully</p>
                </div>
                <div class="modal-footer">
                     <a href="index.php"><button type="button" class="btn btn-primary">
                        OK
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
    // CONDITION 1:
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
// Select where db email id is equal to user entered email id
        $sql_email = "SELECT * FROM register WHERE email='$email'";
        $email_res = mysqli_query($conn,$sql_email) or die("query unsuccesful");

        $email_num = mysqli_num_rows($email_res);    
        // CONDITION 1a IF: check if such email exist which is equal to user typed email
        if($email_num>0) {
           // store specific email in $emailrow_fetch
            $emailrow_fetch = mysqli_fetch_assoc($email_res);
           // store the password of specific fetched email row in email_pass
            $emailrow_pass = $emailrow_fetch['pass'];
            $_SESSION['uname'] = $emailrow_fetch['name'];
           // check if password of fetched email row = entered password
            $pass_decode = password_verify($pass,$emailrow_pass);
            // CONDITION 1ai IF::
            if($pass_decode){
                // header("Location: http://localhost/khass-project/admin-home.php");
                // header("Location: https://khass-trust.000webhostapp.com/admin-home.php");
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
	<!--<script>window.location = "https://khass-trust.000webhostapp.com/index.php";</script>-->
              <?php
             }
            // CONDITION 1ai else::
            else{
               
?><script>
swal("", "Invalid Password", "error");
</script><?php

            }
        }
        // CONDITION 1a else:
        else{
            
?><script>
swal("", "Invalid email", "error");
</script><?php

        }
    }
?>