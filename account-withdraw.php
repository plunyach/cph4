<?php 
    include 'head.php';
    $email = $row['useremail'];
    $uid = $row['id'];
    if(isset($_POST['btc_withdraw']))
    {
        function getRequestHash($n) { 
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
				$randomString = ''; 
					for ($i = 0; $i < $n; $i++) { 
					$index = rand(0, strlen($characters) - 1); 
					$randomString .= $characters[$index]; 
				} 
            return $randomString; 
		}
		$currency = 'btc';
		$address = $_POST['btc_address'];
		$amount = $_POST['btc_amount'];
		$amount = bcdiv($amount, 1, 6);
		
		$btcadd = "select * from user_address where user_id = $uid";
		$res = mysqli_query($conn,$btcadd);
		while($row = mysqli_fetch_assoc($res))
		{
		    $btc_address = $row['btc_address'];
		}
		
		$btcbal = "select * from user_balance where user_id = $uid";
		$re = mysqli_query($conn,$btcbal);
		while($row = mysqli_fetch_assoc($re))
		{
		    $btc_balance = $row['btc_balance'];
		}
        
        $left_amount = number_format($btc_balance, 2, '.', '');
        $amount_left = $left_amount-$amount;
        $user_address = $btc_address;
        
        if($btc_address == $address)
        {
            echo "<script>alert('Self withdrawl is not allowed')</script>";
        }
        else if($amount<=0 || $amount_left<0 || $amount=="" )
        {
            echo "<script>alert('Insufficient fund')</script>";
        }
        else if(empty($address) || $address==null || $address=="")
        {
            echo "<script>alert('Invalid address')</script>";
        }
        else
        {
             $request_hash = getRequestHash(32);
                $insert = "insert into withdraw(user_id,to_address,o_amount,amount,c_amount,currency,request_hash) values($uid,'$address',$left_amount,$amount,$amount_left,'BTC','$request_hash') ";
                $result = mysqli_query($conn, $insert);
                $update = "update user_balance set btc_balance = $amount_left where user_id = $uid";
                $res = mysqli_query($conn,$update);
                echo "<script>alert('BTC Withdrawal request sucessffully submitted.')</script>";
        }
    }
   /* CPH4 Withdrawl */
    if(isset($_POST['cph_withdraw']))
    {
        function getRequestHash($n) { 
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
				$randomString = ''; 
					for ($i = 0; $i < $n; $i++) { 
					$index = rand(0, strlen($characters) - 1); 
					$randomString .= $characters[$index]; 
				} 
            return $randomString; 
		}
		$currency = 'cph4';
		$address = $_POST['cph_address'];
		$amount = $_POST['cph_amount'];
		
		$amount = bcdiv($amount, 1, 4);
		
		$btcadd = "select * from user_address where user_id = $uid";
		$res = mysqli_query($conn,$btcadd);
		while($row = mysqli_fetch_assoc($res))
		{
		    $cph_address = $row['cph_address'];
		}
		
		$btcbal = "select * from user_balance where user_id = $uid";
		$re = mysqli_query($conn,$btcbal);
		while($row = mysqli_fetch_assoc($re))
		{
		    $cph_balance = $row['cph_balance'];
		}
        
        $left_amount = number_format($cph_balance, 2, '.', '');
        $amount_left = $left_amount-$amount;
        $user_address = $cph_address;
        
        if($cph_address == $address)
        {
            echo "<script>alert('Self withdrawl is not allowed')</script>";
        }
        else if($amount<=0 || $amount_left<0 || $amount=="" )
        {
            echo "<script>alert('Insufficient fund')</script>";
        }
        else if(empty($address) || $address==null || $address=="")
        {
            echo "<script>alert('Invalid address')</script>";
        }
        else
        {
             $request_hash = getRequestHash(32);
                $insert = "insert into withdraw(user_id,to_address,o_amount,amount,c_amount,currency,request_hash) values($uid,'$address',$left_amount,$amount,$amount_left,'CPH4','$request_hash') ";
                $result = mysqli_query($conn, $insert);
                $update = "update user_balance set cph_balance = $amount_left where user_id = $uid";
                $res = mysqli_query($conn,$update);
                echo "<script>alert('CPH4 Withdrawal request sucessffully submitted.')</script>";
                       
        }
    }
    if(isset($_POST['eth_withdraw']))
    {
        function getRequestHash($n) { 
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
				$randomString = ''; 
					for ($i = 0; $i < $n; $i++) { 
					$index = rand(0, strlen($characters) - 1); 
					$randomString .= $characters[$index]; 
				} 
            return $randomString; 
		}
		$currency = 'eth';
		$address = $_POST['eth_address'];
		$amount = $_POST['eth_amount'];
		
		$amount = bcdiv($amount, 1, 4);
		
		$btcadd = "select * from user_address where user_id = $uid";
		$res = mysqli_query($conn,$btcadd);
		while($row = mysqli_fetch_assoc($res))
		{
		    $btc_address = $row['eth_address'];
		}
		
		$btcbal = "select * from user_balance where user_id = $uid";
		$re = mysqli_query($conn,$btcbal);
		while($row = mysqli_fetch_assoc($re))
		{
		    $btc_balance = $row['eth_balance'];
		}
        
        $left_amount = number_format($btc_balance, 2, '.', '');
        $amount_left = $left_amount-$amount;
        $user_address = $btc_address;
        if($btc_address == $address)
        {
            echo "<script>alert('Self withdrawl is not allowed')</script>";
        }
        else if($amount<=0 || $amount_left<0 || $amount=="" )
        {
            echo "<script>alert('Insufficient fund')</script>";
        }
        else if(empty($address) || $address==null || $address=="")
        {
            echo "<script>alert('Invalid address')</script>";
        }
        else
        {
             $request_hash = getRequestHash(32);
                $insert = "insert into withdraw(user_id,to_address,o_amount,amount,c_amount,currency,request_hash) values($uid,'$address',$left_amount,$amount,$amount_left,'ETH','$request_hash') ";
                $result = mysqli_query($conn, $insert);
                $update = "update user_balance set eth_balance = $amount_left where user_id = $uid";
                $res = mysqli_query($conn,$update);
                echo "<script>alert('ETH Withdrawal request sucessffully submitted.')</script>";
        }
    }
    
    
    
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || Account withdrawal </title>
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
                                <span><?php echo $row['useremail']; ?></span>
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="container">
                <!-- Withdrawal BTC -->
                <div class="row"> 
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Withdrawal BTC</h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <form action="" class="py-5" method="post">

                                            <div class="form-group row align-items-center">
                                                <div class="col-sm-4">
                                                    <label for="inputEmail3" class="col-form-label">To Address
                                                        <br />
                                                        <small>Please double check this address</small>
                                                    </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text  bg-primary"><i
                                                                    class="mdi mdi-home fs-18 text-white"></i></label>
                                                        </div>
                                                        <input type="text" name="btc_address" class="form-control text-right" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row align-items-center">
                                                <div class="col-sm-4">
                                                    <label for="inputEmail3" class="col-form-label">Amount BTC
                                                        <br />
                                                        <small>Please double check balance</small>
                                                    </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text bg-primary"><i
                                                                    class="cc BTC-alt text-white"></i></label>
                                                        </div>
                                                        <input type="text" name="btc_amount" class="form-control text-right" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <input type="submit" name="btc_withdraw" class="btn btn-primary" value="Withdraw Now">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Withdrawl CPH4 -->
                <div class="row"> 
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Withdrawal CPH4</h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <form action="" class="py-5" method="post">

                                            <div class="form-group row align-items-center">
                                                <div class="col-sm-4">
                                                    <label for="inputEmail3" class="col-form-label">To Address
                                                        <br />
                                                        <small>Please double check this address</small>
                                                    </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text  bg-primary"><i
                                                                    class="mdi mdi-home fs-18 text-white"></i></label>
                                                        </div>
                                                        <input type="text" name="cph_address" class="form-control text-right" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row align-items-center">
                                                <div class="col-sm-4">
                                                    <label for="inputEmail3" class="col-form-label">Amount CPH4
                                                        <br />
                                                        <small>Please double check balance</small>
                                                    </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text bg-primary"><i
                                                                    class="cc BTC-alt text-white"></i></label>
                                                        </div>
                                                        <input type="text" name="cph_amount" class="form-control text-right" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <input type="submit" name="cph_withdraw" class="btn btn-primary" value="Withdraw Now">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Withdrawl ETH -->
                   <div class="row"> 
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Withdrawal ETH</h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <form action="" class="py-5" method="post">

                                            <div class="form-group row align-items-center">
                                                <div class="col-sm-4">
                                                    <label for="inputEmail3" class="col-form-label">To Address
                                                        <br />
                                                        <small>Please double check this address</small>
                                                    </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text  bg-primary"><i
                                                                    class="mdi mdi-home fs-18 text-white"></i></label>
                                                        </div>
                                                        <input type="text" name="eth_address" class="form-control text-right" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row align-items-center">
                                                <div class="col-sm-4">
                                                    <label for="inputEmail3" class="col-form-label">Amount ETH
                                                        <br />
                                                        <small>Please double check balance</small>
                                                    </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text bg-primary"><i
                                                                    class="cc BTC-alt text-white"></i></label>
                                                        </div>
                                                        <input type="text" name="eth_amount" class="form-control text-right" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <input type="submit" name="eth_withdraw" class="btn btn-primary" value="Withdraw Now">
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

    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/scripts.js"></script>
</body>
  </html>