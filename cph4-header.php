<?php 
    include 'dbcon.php';
    
    session_start();
    
    $uid = $_SESSION['user_email'];
    
    $select = "select * from register where useremail= '$uid'";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($result);
    
    echo $row['useremail'];
    
    die;
    
    // if (!isset($_SESSION['user_email'])) {

    // header('Location: http://ramlogics.com/cph4/login/');



?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || Dashboard Home Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dashboard_cph4/vendor/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dashboard_cph4/vendor/waves.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dashboard_cph4/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dashboard_cph4/vendor/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dashboard_cph4/vendor/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dashboard_cph4/css/style.css"> 
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
                                <!-- <img src="images/logo.png" alt=""> -->
                                <h2>CPH4</h2>
                            </a>
                            <div class="header-right d-flex my-2 align-items-center">
                                <div class="language">
                                    <div class="dropdown">
                                        <div class="icon" data-toggle="dropdown">
                                            <i class="flag-icon flag-icon-us"></i>
                                            <span>English</span>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">
                                                <i class="flag-icon flag-icon-bd"></i> Bengali
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="flag-icon flag-icon-fr"></i> French
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="flag-icon flag-icon-cn"></i> China
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                                            <a href="<?php echo get_site_url(); ?>/account-overview/" class="dropdown-item">
                                                <i class="mdi mdi-account"></i> Account
                                            </a>
                                            <a href="<?php echo get_site_url(); ?>/history-data" class="dropdown-item"> <i class="mdi mdi-history"></i> History </a>
                                            <a href="<?php echo get_site_url(); ?>/settings" class="dropdown-item">
                                                <i class="mdi mdi-settings"></i> Setting
                                            </a> 
                                            <a href="<?php echo get_site_url(); ?>/logout" class="dropdown-item logout">
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
                        <a href="<?php echo get_site_url(); ?>/dashboard-cph4/" data-toggle="tooltip" data-placement="right" title="Dashboard">
                            <span><i class="mdi mdi-view-dashboard"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/account-deposit/" data-toggle="tooltip" data-placement="right" title="Account Deposit">
                            <span><i class="mdi mdi-heart"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/package/" data-toggle="tooltip" data-placement="right" title="Package CPH4">
                            <span><i class="mdi mdi-box"></i></span>
                        </a>
                    </li>
                    <!--<li>-->
                    <!--    <a href="<?php echo get_site_url(); ?>/exchange/" data-toggle="tooltip" data-placement="right" title="Buy Sale">-->
                    <!--        <span><i class="mdi mdi-tumblr-reblog"></i></span>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li>
                        <a href="<?php echo get_site_url(); ?>/account-overview/" data-toggle="tooltip" data-placement="right" title="Accounts Wallet">
                            <span><i class="mdi mdi-wallet"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/account-withdraw/" data-toggle="tooltip" data-placement="right" title="Accounts Withdrawal">
                            <span><i class="mdi mdi-face-profile"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/history-data" data-toggle="tooltip" data-placement="right" title="History Data">
                            <span><i class="mdi mdi-database"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/setting" data-toggle="tooltip" data-placement="right" title="Setting">
                            <span><i class="mdi mdi-settings"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>