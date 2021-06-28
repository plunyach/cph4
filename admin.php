<?php 

 include 'dbcon.php';
if(isset($_POST['login'])){
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	
	$sql = "select * from register where useremail = '".$email."' AND status = 1";
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);
	session_start();
	
	$_SESSION['useremail'] = $email;
 	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
			header('location:./admin_dashboard.php');
		}
		else{
			echo "<script>alert('Wrong password')</script>";
		}
	}
	else{
		echo "<script>alert('You are not authorized to login this page.')</script>";
	}
}
?>

<!DOCTYPE html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="icon" type="image/png" sizes="16x16" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph4/wp-content/themes/twentytwenty/assets/css/log-in-stylesheet.css">
    
    <!---- Google Font Family ---->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    
   <title>Admin Login || CPH 4 Admin Login Page</title>
   
   </head>
    <body class="cph4_bg_img"> 
        <div class="main_log_in_div">
            <div class="container p-md-4 p-3">
                <div class="row"> 
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0 log_in_area_divf offset-md-1">
                        <div class="log_in_area_hh">
                            <img src="https://ramlogics.com/cph4/wp-content/themes/twentytwenty/cph4_assets/images/dfasda.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-0 log_in_area_div_d">
                        <div class="log_in_area_div p-3">
                            <div class="pb-3">
                                <h2>Admin Login</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <form action="" method="POST"> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email:</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password:</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                                    <div class="float-right"><a href="http://ramlogics.com/cph_4/forgot_password.php/" class="text-dark" style="font-size: 14px;">Forgot password</a></div>
                                </div>
                                <!--<div class="form-group form-check">-->
                                <!--    <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
                                <!--    <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
                                <!-- </div>-->
                                <div class="py-md-4 py-4 d-flex text-center m-auto"> 
                                    <div class="register_log"><input type="submit" name="login" value="Login"></div>
                                    
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        
    </body>
</html>