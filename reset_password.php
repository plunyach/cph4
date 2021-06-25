<?php 

include 'dbcon.php';

session_start();

$email = $_SESSION['useremail'];

$select = "select * from register where useremail = '$email'";
$result = mysqli_query($conn,$select);

$row = mysqli_fetch_assoc($result);


if(isset($_POST['reset']))
{
    $newpass = $_POST['newpass'];
    $conpass = $_POST['confpass'];
    
    $hashnewpass = password_hash($newpass,PASSWORD_DEFAULT);
    
    if(password_verify($conpass,$hashnewpass))
    {
        $update = "update register set password = '$hashnewpass' where useremail = '$email'";
        $result = mysqli_query($conn,$update);
        
        if($result)
        {
            echo "<script>alert('Password updated successfully')</script>";
            header('location:http://ramlogics.com/cph_4/login.php/');
        }
        else
        {
            echo "<script>alert('Something is wrong, Try again!!')</script>";
        }
        
        
    }
    else
    {
        echo "<script>alert('Password not matched, Try again!!')</script>";
    }
    
    
}



// $to = "sami.goswami26@gmail.com ";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: webmaster@example.com";

// mail($to,$subject,$txt,$headers);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph4/wp-content/themes/twentytwenty/assets/css/log-in-stylesheet.css">
    
    <!---- Google Font Family ---->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    
     <title>Reset Password || CPH4 Log-in page</title>
     
     </head>
 
    <body class="cph4_bg_img"> 
        <div class="main_log_in_div">
            <div class="container p-md-4 p-3">
                <div class="row"> 
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0 log_in_area_divf offset-md-1">
                        <div class="log_in_area_hh">
                            <img src="https://ramlogics.com/cph_4/cph4_assets/images/dfasda.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-0 log_in_area_div_d">
                        <div class="log_in_area_div p-3"> 
                            <div class="pb-3">
                                <h3>Reset Password</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <form action="" method="POST"> 
                                <div class="form-group">
                                    <label for="exampleInputoldpass">Old Password :</label>
                                    <input type="password" name="oldpass" class="form-control" id="exampleInputoldpass" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputnewpass">New Password:</label>
                                    <input type="password" name="newpass" class="form-control" id="exampleInputnewpass" required> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCPassword1">Confirm Password:</label>
                                    <input type="password" name="confpass" class="form-control" id="exampleInputconfpass" required> 
                                </div>
                                
                                <div class="py-md-4 py-4 d-flex justify-content-center m-auto text-center"> 
                                    <div class="register_log"><input type="submit" name="reset" value="Reset Password" required></div> 
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