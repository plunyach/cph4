<?php 
    /* Template Name: register */
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
      $uemail = $_POST['email'];
      $upass = $_POST['password'];
      $cpass = $_POST['cpassword'];
      
      $options = array("cost"=>4);
	 $hash = password_hash($upass,PASSWORD_BCRYPT,$options);
        $select = "select * from register where useremail = '$uemail'";
        $resu = mysqli_query($conn,$select);
        
        
        if(mysqli_fetch_assoc($resu) > 0)
        {
            echo "<script>alert('Email id already registered')</script>";
        }
        elseif(password_verify($cpass, $hash))
        {
   
            $insert = "insert into register(useremail,password) values ('$uemail','$hash')";
            $result = mysqli_query($conn,$insert);
        
            if($result)
            {
                
                echo "<script>alert('Registered Successfully')</script>";
                echo "<script>window.location='https://ramlogics.com/cph_4/login.php/';</script>";
                
            }
            
            else
            {
                echo "<script>alert('Try again!!')</script>";
            }
                
        }
        else
        {
            echo "<script>alert('Password not matched, Try again!!')</script>";
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
    
        <title>Register || CPH4 Log-in page</title>
    </head>
    <!--<body>-->
    <!--    <h3>Register</h3>-->
    <!--    <form action="" method="POST">-->
    <!--    <table>-->
    <!--        <tr>-->
    <!--            <td>Email:</td>-->
    <!--            <td><input type="text" name="email" required></td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--            <td>Password:</td>-->
    <!--            <td><input type="password" name="password" required></td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--            <td>Confirm Password:</td>-->
    <!--            <td><input type="password" name="cpassword" required></td>-->
    <!--        </tr>-->
    <!--        <tr>-->
                
    <!--            <td><input type="submit" name="submit" value="Register" required></td>-->
    <!--        </tr>-->
    <!--    </table>-->
    <!--    </form>-->
        
        
        
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
                                <h3>Register</h3>
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
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCPassword1">Confirm Password:</label>
                                    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" required> 
                                </div>
                                <div class="py-md-4 py-4 d-flex justify-content-center m-auto text-center"> 
                                    <div class="register_log"><input type="submit" name="submit" value="Register" required></div> 
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