<?php
    include 'head.php';
    $email=$row['useremail'];
    if(isset($_POST['submit']))
    {
        $userid = $_POST['userid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        
        $update = "update register set firstname='$firstname', lastname='$lastname',address='$address',phone='$phone' where id = '$userid'";
        $upresult = mysqli_query($conn,$update);
        
        if($upresult)
        {
            echo "<script>alert('Profile updated successfully')</script>";
        }
        else
        {
            echo "<script>alert('Try again!!')</script>";
        }
    }
    if(isset($_POST['reset'])){
        $password=($_POST['oldpass']);
        $sql = "select * from register where useremail = '".$email."'"; 
	    $rs = mysqli_query($conn,$sql);
	    $row = mysqli_fetch_assoc($rs);
        if(password_verify($password,$row['password'])){
            if($_POST['newpass'] == $_POST['confpass']){
                $options = array("cost"=>4);
	            $hash = password_hash($_POST['confpass'],PASSWORD_BCRYPT,$options);
                $update = "update register set password='$hash' where useremail = '$email'";
                $upresult = mysqli_query($conn,$update);
                if($upresult)
                {
                    echo "<script>alert('Password updated successfully')</script>";
                }
                else
                {
                    echo "<script>alert('Try again!!')</script>";
                }
            }else{
                echo "<script>alert('Repeat password didn't match with new password.');</script>";
            }
        }else{
            echo '<script>alert("Old password did not match.");</script>';
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || Profile </title>
    <link rel="icon" type="image/png" sizes="16x16" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png">
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/nice-select.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/waves/waves.min.css"> 
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/css/style.css">
</head>

<body> 
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="header dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-light px-0 justify-content-between">
                            <a class="navbar-brand" href="#">
                                 <img src="https://ramlogics.com/cph_4/dashboard_cph4/images/logo.png" alt="">  
                            </a>
                            <div class="header-right d-flex my-2 align-items-center">
                                 
                                <div class="dashboard_log">
                                    <div class="profile_log dropdown">
                                        <div class="user" data-toggle="dropdown">
                                            <span class="thumb"><i class="mdi mdi-account"></i></span>
                                            <span class="arrow"><i class="la la-angle-down"></i></span>
                                        </div>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="user-email">
                                                <div class="user">
                                                    <i class="thumb"><i class="mdi mdi-account"></i></i>
                                                    <div class="user-info">
                                                        <h6><?php echo $row['useremail']; ?></h6>
                                                        <span><?php echo $row['useremail']; ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="user-balance">
                                                <div class="available">
                                                    <p>Available</p>
                                                    <span>0.00 USD</span>
                                                </div>
                                                <div class="total">
                                                    <p>Total</p>
                                                    <span>0.00 USD</span>
                                                </div>
                                            </div>
                                            <a href="https://ramlogics.com/cph_4/account-overview.php/" class="dropdown-item">
                                                <i class="mdi mdi-wallet"></i> Account Wallet
                                            </a>
                                            <a href="https://ramlogics.com/cph_4/profile.php/" class="dropdown-item">
                                                <i class="mdi mdi-account"></i> User Profile
                                            </a> 
                                            <a href="http://ramlogics.com/cph_4/logout.php" class="dropdown-item logout">
                                                <i class="mdi mdi-logout"></i> Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="menu">
                <ul>
                     <li>
                        <a href="https://ramlogics.com/cph_4/dashboard-cph4.php/" data-toggle="tooltip" data-placement="right" title="Dashboard">
                            <span><i class="mdi mdi-view-dashboard"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ramlogics.com/cph_4/account-deposit.php/" data-toggle="tooltip" data-placement="right" title="Account Deposit">
                            <span><i class="mdi mdi-heart"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ramlogics.com/cph_4/package.php/" data-toggle="tooltip" data-placement="right" title="Package CPH4">
                            <span><i class="mdi mdi-box"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ramlogics.com/cph_4/account-overview.php/" data-toggle="tooltip" data-placement="right" title="Accounts Wallet">
                            <span><i class="mdi mdi-wallet"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ramlogics.com/cph_4/account-withdraw.php/" data-toggle="tooltip" data-placement="right" title="Accounts Withdrawal">
                            <span><i class="mdi mdi-face-profile"></i></span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>

            <div class="page-title dashboard">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="page-title-content">
                                <p>
                                    Welcome Back,
                                    <span> <?php echo $row['useremail']; ?></span>
                                </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div class="container">
                    <div class="row"> 
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12 col-md-8 col-12 m-auto">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">General Information</h4>
                                        </div>
                                        <div class="card-body">
                                             <?php 
                                             $email = $_SESSION['useremail'];
                                            $select = "select * from register where useremail = '$email'";
                                            $result = mysqli_query($conn,$select);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $userid = $row['id'];
                                                $email = $row['useremail'];
                                                $password = $row['password'];
                                                $firstname = $row['firstname'];
                                                $lastname = $row['lastname'];
                                                $address = $row['address'];
                                                $phone = $row['phone'];
                                            } 
                                            ?>
                                            <form action="" method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-xl-6">
                                                        <label class="mr-sm-2">First name</label>
                                                        <input type="hidden" name="userid" class="form-control" value="<?php echo $userid; ?>" readonly >
                                                        <input type="text" class="form-control" name="firstname" placeholder="First name" value="<?php echo $firstname; ?>" />
                                                    </div> 
                                                    <div class="form-group col-xl-6">
                                                        <label class="mr-sm-2">Last name</label>
                                                        <input type="text" class="form-control" name="lastname" placeholder="Last name" value="<?php echo $lastname; ?>" />
                                                    </div> 
                                                    <div class="form-group col-xl-12">
                                                        <label class="mr-sm-2">Address</label>
                                                        <input type="text" class="form-control" name="address" placeholder="Enter Your Address" value="<?php echo $address; ?>" />
                                                    </div> 
                                                    <div class="form-group col-xl-12">
                                                        <label class="mr-sm-2">Email</label>
                                                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo $email; ?>" readonly />
                                                    </div> 
                                                    <div class="form-group col-xl-12">
                                                        <label class="mr-sm-2">Phone</label>
                                                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="<?php echo $phone; ?>" />
                                                    </div> 
                                                    <!--<div class="form-group col-xl-12">-->
                                                    <!--    <label class="mr-sm-2">Password</label>-->
                                                    <!--    <input type="text" class="form-control" placeholder="Enter Your Password" value="<?php //echo $password; ?>" />-->
                                                    <!--</div> -->
                                                    <div class="col-6">
                                                        <input type="submit" name="submit" class="btn btn-success waves-effect px-4" value="Save">
                                                        <!--<button class="btn btn-success waves-effect px-4">Save</button>-->
                                                    </div>
                                                    <div class="col-6"> 
                                                        <button type="button" class="btn btn-success waves-effect px-4 float-right" data-toggle="modal" data-target="#exampleModal">Reset Password</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="footer dashboard">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8 col-12">
                            <div class="copyright">
                                <p>© Copyright 2021 <a href="#">CPH4</a> I All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="footer-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content card">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #ff67cb">Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="log_in_area_div p-3"> 
                            <div class="pb-3"> 
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
                                    <div class="register_log"><input type="submit" class="btn btn-success" name="reset" value="Reset Password"></div> 
                                </div> 
                            </form>
                        </div>
                  </div> 
                </div>
              </div>
            </div>




        <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/global.js"></script>

        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/waves.min.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/jquery-ui.min.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/jquery-ui-init.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/query.validate.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/validator-init.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/scripts.js"></script>

        <script></script>
    </body>
 </html>
