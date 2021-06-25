<?php 
    
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || CHP4 History </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
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
                                <!-- <img src="images/logo.png" alt=""> -->
                                <h2>CPH4</h2>
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
                        <a href="https://ramlogics.com/cph_4/dashboard-cph4.php/" data-toggle="tooltip" data-placement="right" title="Trade">
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
                        <a href="https://ramlogics.com/cph_4/exchange.php/" data-toggle="tooltip" data-placement="right" title="Buy Sale">
                            <span><i class="mdi mdi-tumblr-reblog"></i></span>
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
                            <p>Welcome Back,
                                <span><?php echo $useremail; ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <ul class="text-right breadcrumbs list-unstyle">
                            <li><a href="<?php echo get_site_url(); ?>/history-data/">Histoey Data </a></li>
                            <li class="active"><a href="#">History Data</a></li>
                        </ul>
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
                                <h4 class="card-title">CPH4 Student Coin History</h4>
                            </div>
                            <div class="card-body">
                                <div class="transaction-table">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0 table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th>Transaction ID</th>
                                                    <th>Time</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#565845522</td>
                                                    <td>June 08, 2021</td>
                                                    <td>Realized P&amp;L</td>
                                                    <td>0.254782 BTC</td>
                                                    <td>Completed</td>
                                                    <td>0.125476 BTC</td>
                                                </tr>
                                                <tr>
                                                    <td>#565845522</td>
                                                    <td>June 08, 2021</td>
                                                    <td>Realized P&amp;L</td>
                                                    <td>0.254782 BTC</td>
                                                    <td>Completed</td>
                                                    <td>0.125476 BTC</td>
                                                </tr>
                                                <tr>
                                                    <td>#565845522</td>
                                                    <td>June 08, 2021</td>
                                                    <td>Realized P&amp;L</td>
                                                    <td>0.254782 BTC</td>
                                                    <td>Completed</td>
                                                    <td>0.125476 BTC</td>
                                                </tr>
                                                <tr>
                                                    <td>#565845522</td>
                                                    <td>June 08, 2021</td>
                                                    <td>Realized P&amp;L</td>
                                                    <td>0.254782 BTC</td>
                                                    <td>Completed</td>
                                                    <td>0.125476 BTC</td>
                                                </tr>
                                                <tr>
                                                    <td>#565845522</td>
                                                    <td>June 08, 2021</td>
                                                    <td>Realized P&amp;L</td>
                                                    <td>0.254782 BTC</td>
                                                    <td>Completed</td>
                                                    <td>0.125476 BTC</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/apexcharts.min.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/dashboard.js"></script>

    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/waves.min.js"></script>

    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/scripts.js"></script>
</body>
 </html>