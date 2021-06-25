<?php 
/* Template Name: forgot_password */

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    
   $to = $email;
$subject = "Reset Link";

$message = "
<html>
<head>
<title>Reset Link</title>
</head>
<body>

<table>
<tr>
<th><a href='http://ramlogics.com/cph_4/forgot.php/'>Reset link</a></th>
</tr>

</table>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@cph4.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

if(mail($to,$subject,$message,$headers))
{
    echo "<script>alert('Successfully')</script>";
    
}
else
{
    echo "<script>alert('Try again!!')</script>";
}
    
}
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
    
        <title>Forgot Password || CPH4 Log-in page</title>
        
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
                                <h3>Forgot Password</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <form action="" method="POST"> 
                                <div class="form-group">
                                    <label for="exampleInputemail">Enter your email:</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputemail" required>
                                </div> 
                                <div class="py-md-4 py-4 d-flex justify-content-center m-auto text-center"> 
                                    <div class="register_log"><input type="submit" name="submit" value="Send Link"></div> 
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