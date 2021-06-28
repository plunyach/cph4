<?php 
    include 'head.php';
    $orderid = uniqid();
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || Package Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/css/nice-select.css">
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
                                <span><?php echo $row['useremail']; ?></span>
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
                            <div class="card sub-menu">
                            <div class="card-body">
                                <h3 class="text-white text-center">ADV<b>CASH</b></h3>
                                <h3 class="text-white text-center"><img src="../visa-128.png" width="50"></h3>
                                <p class="text-center">Please note that for some customers the post-payment KYC may be required. In such cases,
STC Tokens arrive at the wallet immediately after passing the checking procedure.
The vast majority of AdvCash transactions are confirmed in less than 1 hour, however,
some of the transactions may be proceeded up to 3 business days.</p>
                            </div> 
                        </div>
                        <?$price="select * from token_price where m_start_date>=CURDATE() OR m_end_date>CURDATE() order by m_start_date ASC limit 1";
                                $price = mysqli_query($conn,$price);
                                $price1=mysqli_fetch_assoc($price);
                                ?>
                        <div class="card sub-menu">
                            <div class="card-body">
                                <h3 class="text-white text-center">The Package Details of CPH4 Token</h3>
                                <h5 class="text-white font-weight-normal"><span>Name of Master Package: <? echo $price1['m_package_name'];?></span>    <span class="float-right">   Price of Master Package: <? echo $price1['m_package_price'];?></h5></span>
                                <h5 class="text-white font-weight-normal"><span>Start Date of Master Package: <? echo $price1['m_start_date'];?></span>     <span class="float-right">  End Date of Master Package: <? echo $price1['m_end_date'];?></h5></span>
                                <h5 class="text-white font-weight-normal text-center" id="message"></h5><span class="text-center m-auto" style="display:grid; color:#ff67cb;" id="timer"></span>
                            </div> 
                        </div>
                        <div class="row">
                            <?php 
                                        $select = "select * from pacakge";
                                        $result = mysqli_query($conn,$select);
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $cph = $row['cph_value'];
                                            $currencyvalue = bcdiv(($price1['m_package_price']*$row['cph_value']),1,2);
                                            
                                            
                                    ?>
                                    
                          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 fom" id="">
                                <div class="card text-center pt-2">
                                    
                                    <div class="card-body">
                                        <p class=" text-center"><span id="time<? echo $row['id'];?>"></span></p>
                                      <form method="GET" action="https://wallet.advcash.com/sci/">
                                        <input type="hidden" name="ac_account_email" value="julien@ottentik.com">
                                        <input type="hidden" name="ac_sci_name" value="CPH4">
                                        <input type="hidden" name="ac_amount" value="<?php echo $currencyvalue; ?>">
                                        <input type="hidden" name="ac_currency" value="USD">
                                        <input type="hidden" name="ac_order_id" value="<?php echo $orderid; ?>">
                                        <input type="hidden" name="ac_sign"
                                        value="36b4c9ad29b61d1c5996e3ef1a3af0c3194e19713613b6bf26a9b905b8019225">
                                        <input type="hidden" name="ac_comments" value="Payment for <?php echo $cph; ?> CPH">
                                        <!-- Merchant custom fields -->
                                        <input type="hidden" name="operation_id" value="234235436">
                                        <h4><?php echo $cph.' CPH4'; ?></h4><h4><?php echo $currencyvalue.' USD'; ?></h4>
                                        <button type="submit" class="btn btn-success" id="login<? echo $row['id'];?>" name="login" class="btn btn-dark">Buy Now</button>
                                        <!--<input type="hidden" name="login" class="btn btn-dark" value="denis">-->
                                        </form>
                                        
                                        
                                    </div>
                                   
                                </div>
                            </div>
                       
                             <?php } ?>
                        </div>
                    </div>
                    <script>
                                           var x = setInterval(function() { 
                                               var id='<? echo "timer";?>';
                                           
                                            var DownDate = new Date('<? echo $price1['m_start_date'];?>');
                                            var now = new Date();
                                            if(now<DownDate){
                                                document.getElementById('message').innerHTML="Start In:"
                                                timerr('timer', '', '<? echo $price1['m_start_date'];?>');
                                                $(".fom").css("pointer-events","none");
                                            }else{
                                                 var dd= timerr('timer', '', '<? echo $price1['m_end_date'];?>');
                                             if (dd < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(id).innerHTML="expired"
                                                    }else{
                                                        document.getElementById('message').innerHTML="End In: "
                                                    }
                                            }
                                           }, 1000);
                        function timerr(id, lid, etime){
                                                    var countDownDate = new Date(etime).getTime();
                                                  var now = new Date().getTime();
                                                  var distance = countDownDate - now;
                                                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                                  document.getElementById(id).innerHTML =  days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";
                                                 // document.getElementById(lid).disabled  = true;
                                                   return distance;
                                            	
                                            }
                    </script>
                    <div class="col-xl-12"> 
                        <div class="card sub-menu">
                            <div class="card-body"> 
                                <p class="text-center">For langer transactions please contact us <br> <span>via:cph4@studentcoin.education</span></p> 
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
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/jquery-ui.min.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/jquery-ui-init.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/query.validate.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/validator-init.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/scripts.js"></script>
</body>
 </html>