<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <?php
        include 'form-style.php';
    ?>
</head>
<body>
<?php
    include 'connection.php';
    $Sr2= $_GET['Sr'];
    $sql ="DELETE FROM blog WHERE Sr=$Sr2" or die("Query failed");
    $res=mysqli_query($conn,$sql);
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
                    <p class="text-center position-relative">Data deleted successfully</p>
                </div>
                <div class="modal-footer">
                     <a href="blog-admin.php"><button type="button" class="btn btn-primary">
                        OK
                    </button></a>
                </div>
            </div>
        </div>
    </div>
   
        
</body>
</html>