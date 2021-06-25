<?php 
    include 'head.php';
    
    $email = $row['useremail'];
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || Buy Sale </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/nice-select.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/waves.min.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/magnific-popup.css">
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
                    <!--<li>-->
                    <!--    <a href="https://ramlogics.com/cph_4/exchange.php/" data-toggle="tooltip" data-placement="right" title="Buy Sale">-->
                    <!--        <span><i class="mdi mdi-tumblr-reblog"></i></span>-->
                    <!--    </a>-->
                    <!--</li>-->
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
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buy</h4>
                            </div>
                            <div class="card-body">
                                <div class="buy-sell-widget">
                                    <form method="post" name="myform" class="currency_validate">
                                        <div class="form-group">
                                            <label class="mr-sm-2">Currency</label>
                                            <div class="input-group mb-3">
                                                <select name='currency' class="form-control mw-150">
                                                    <option data-display="Bitcoin" value="bitcoin">Bitcoin
                                                    </option>
                                                    <option value="litecoin">Litecoin</option>
                                                </select>
                                                <input type="text" name="usd_amount" class="form-control text-right"
                                                    value="125.00 USD">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="mr-sm-2">Payment Method</label>
                                            <div class="input-group mb-3">
                                                <select name='currency' class="form-control">
                                                    <option data-display="Bitcoin" value="bitcoin">Bitcoin
                                                    </option>
                                                    <option value="litecoin">Litecoin</option>
                                                </select>
                                                <!-- <input type="text" name="usd_amount" class="form-control"
                                                    value="125.00 USD"> -->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="mr-sm-2">Enter your amount</label>
                                            <div class="input-group">
                                                <input type="text" name="currency_amount" class="form-control"
                                                    placeholder="0.0214 BTC">
                                                <!-- <input type="text" name="usd_amount" class="form-control"
                                                    placeholder="125.00 USD"> -->
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="mb-0">Monthly Limit</p>
                                                <h6 class="mb-0">$49750 remaining</h6>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success btn-block">Buy
                                            Now</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="buyer-seller"> 
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><span class="text-primary">You are selling</span></td>
                                                    <td><span class="text-primary">0.00254 BTC</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Payment Method</td>
                                                    <td>Bank of America Bank ***********5245</td>
                                                </tr>
                                                <tr>
                                                    <td>Exchange Rate</td>
                                                    <td>0.00212455 BTC</td>
                                                </tr>
                                                <tr>
                                                    <td>Fee</td>
                                                    <td>$28.00 USD</td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>$854.00 USD</td>
                                                </tr>
                                                <tr>
                                                    <td>Vat</td>
                                                    <td>
                                                        <div class="text-danger">$25.00 USD</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Sub Total</td>
                                                    <td> $1232.00 USD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Activities</h4>
                            </div>
                            <div class="card-body">
                                <div class="transaction-table">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0 table-responsive-sm">
                                            <tbody>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="mdi mdi-arrow-down"></i></span>
                                                    </td>

                                                    <td>
                                                        <span class="badge badge-danger p-2">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc BTC"></i> BTC
                                                    </td>
                                                    <td>
                                                        Using - Bank *******5264
                                                    </td>
                                                    <td class="text-danger">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="buy-thumb"><i class="mdi mdi-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success p-2">Buy</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc LTC"></i> LTC
                                                    </td>
                                                    <td>
                                                        Using - Card *******8475
                                                    </td>
                                                    <td class="text-success">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="mdi mdi-arrow-down"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger p-2">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc XRP"></i> XRP
                                                    </td>
                                                    <td>
                                                        Using - Card *******8475
                                                    </td>
                                                    <td class="text-danger">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="buy-thumb"><i class="mdi mdi-arrow-up"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success p-2">Buy</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc DASH"></i> DASH
                                                    </td>
                                                    <td>
                                                        Using - Card *******2321
                                                    </td>
                                                    <td class="text-success">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="sold-thumb"><i class="mdi mdi-arrow-down"></i></span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger p-2">Sold</span>
                                                    </td>
                                                    <td>
                                                        <i class="cc BTC"></i> BTC
                                                    </td>
                                                    <td>
                                                        Using - Card *******2321
                                                    </td>
                                                    <td class="text-danger">-0.000242 BTC</td>
                                                    <td>-0.125 USD</td>
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
                            <p>© Copyright 2020 <a href="#">CPH4</a> I All Rights Reserved</p>
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