<?php 
    include 'head.php';
      $uid = $row['id'];
    $email = $row['useremail'];
    $select = "select * from user_address where user_id = $uid";
    $result = mysqli_query($conn,$select);
    while($row = mysqli_fetch_assoc($result))
    {
        $eth_address = $row['eth_address'];
        $btc_address = $row['btc_address'];
        
    }
    
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || Account Deposit Home Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/nice-select.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/waves.min.css">
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
                                <!--<h2>CPH4</h2>-->
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
                                                        <h6><?php echo $email; ?></h6>
                                                        <span><?php echo $email; ?></span>
                                                    </div>
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
                    <div class="col-12">
                        <div class="page-title-content">
                            <p>Welcome Back,
                                <span> <?php echo $email; ?></span>
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
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cold Wallet Deposit Address</h4>
                                <span>To Deposit ETH or BTC token to your account</span>
                            </div>
                            <div class="card-body"  id="deposits">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab2">ETH</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab3">BTC</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab2">
                                        <div class="qrcode">
                                            <img src="https://chart.googleapis.com/chart?chs=300x300&amp;cht=qr&amp;chl= <?php echo $eth_address; ?>" alt="" width="150">
                                        </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    value="<?php echo $eth_address; ?>" id="myInpu">
                                                <div class="input-group-append">
                                                    <button onclick="copytab2()"><span class="input-group-text bg-primary text-white">Copy</span></button>
                                                </div>
                                            </div>
                                            <script>
                                              function copytab2() {
                                              var copyText = document.getElementById('myInpu')
                                              copyText.select();
                                              document.execCommand('copy')
                                              console.log('Copied Text')
                                            }
                                            </script>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <div class="qrcode">
                                            <img src="https://chart.googleapis.com/chart?chs=300x300&amp;cht=qr&amp;chl= <?php echo $btc_address; ?>" alt="" width="150">
                                        </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    value="<?php echo $btc_address; ?>" id="myInput1">
                                                <div class="input-group-append">
                                                   <button onclick="copytab3()"><span class="input-group-text bg-primary text-white">Copy</span></button>
                                                </div>
                                            </div>
                                            <script>
                                              function copytab3() {
                                              var copyText = document.getElementById('myInput1')
                                              copyText.select();
                                              document.execCommand('copy')
                                              console.log('Copied Text')
                                            }
                                            </script>
                                        
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
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/global.js"></script>

    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/waves.min.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/magnific-popup.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/magnific-popup-init.js"></script>

    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/jquery.validate.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/validator-init.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/scripts.js"></script>
</body>
 </html>