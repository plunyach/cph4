<?php 
    include 'head.php';
    $user = $row['id']; 
    $email = $row['useremail'];
if($user==0 && empty($user)){
    echo "<script> window.location = '".get_site_url()."/login'; </script>";
}
    function coinpayments_api_call($curr, $cmd, $req = array()) {
    $public_key = 'a672d241cc4d7b1accb385bdcbcdecdc8d53b5cae5739506999c9512d8c93ef4';
    $private_key = '902c5c844B293a5E5a03aF9d222a26A0A8ca549C7ee8c2f73b8F5DdFCB746321';
    $req['version'] = 1;
    $req['cmd'] = $cmd;
    $req['key'] = $public_key;
    $req['currency']=$curr;
    $req['format'] = 'json'; 
    $post_data = http_build_query($req, '', '&');
    $hmac = hash_hmac('sha512', $post_data, $private_key);
    static $ch = NULL;
    if ($ch === NULL) {
        $ch = curl_init('https://www.coinpayments.net/api.php');
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('HMAC: '.$hmac));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    $data = curl_exec($ch);         
    if ($data !== FALSE) {
        if (PHP_INT_SIZE < 8 && version_compare(PHP_VERSION, '5.4.0') >= 0) {
            $dec = json_decode($data, TRUE, 512, JSON_BIGINT_AS_STRING);
        } else {
            $dec = json_decode($data, TRUE);
        }
        if ($dec !== NULL && count($dec)) {
            return $dec;
        } else {
            return array('error' => 'Unable to parse JSON result ('.json_last_error().')');
        }
    } else {
        return array('error' => 'cURL error: '.curl_error($ch));
    }
}

  $name = $row['useremail'];
  $userid = $row['id'];
 $balance_id= "select * from user_balance where user_id=$userid";
 $balre = mysqli_query($conn,$balance_id);
 $row = mysqli_fetch_assoc($balre);
 if(!$row){
     $insertbal = "insert into user_balance(user_id,useremail) values($userid,'$name')";
     $insertres = mysqli_query($conn,$insertbal);
  
 }
 $idexist = "select * from user_address where user_id = $userid";
 $res = mysqli_query($conn,$idexist);

 $row = mysqli_fetch_assoc($res);
 if(!$row){
 $eth=(coinpayments_api_call("ETH",'get_callback_address'));
 $btc=(coinpayments_api_call("BTC",'get_callback_address'));
 $eth_address =  $eth['result']['address'];
 $btc_address = $btc['result']['address'];
    $insert = "insert into user_address(user_id,useremail,eth_address,btc_address) values($userid, '$name','$eth_address','$btc_address')";
    $result = mysqli_query($conn,$insert);
 }
    $tokenprice = "select * from token_price where id=1";
    $result = mysqli_query($conn,$tokenprice);
    while($row = mysqli_fetch_assoc($result))
    {
        $token_price = $row['price'];
    }
    function eth_usdd()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=ETH",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $liveprice = curl_exec($curl);
        curl_close($curl);
        $sdg=json_decode($liveprice, true);
        return number_format($sdg['ETH'],8);
    }
    function btc_usdd()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BTC",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $liveprice = curl_exec($curl);
        curl_close($curl);
        $sdg=json_decode($liveprice, true);
        return number_format($sdg['BTC'],8);
    }
      $conv_btc=btc_usdd();
      $conv_eth=eth_usdd();
       if(isset($_POST['buytoken']))
        {   $currency=$_POST['currency'];
            $payment = $_POST['payment'];
            $input_amount = $_POST['amount'];
            $token=str_replace(",", "", number_format($_POST['amount']*(10**18)));
            $amount_in_euro = $input_amount*$token_price;
            $amount_in_euro = bcdiv($amount_in_euro, 1, 4);
            $scladdress = "select eth_address from user_address where user_id = $user";
            $res = mysqli_query($conn,$scladdress);
            while($row = mysqli_fetch_assoc($res))
            {
                $scl_address = $row['eth_address'];
            }
            if($amount_in_euro)
            {
                $select = "select * from user_balance where user_id = $user";
                $resu = mysqli_query($conn,$select);
                while($row = mysqli_fetch_assoc($resu))
                {   if($currency=='BTC'){
                        $amount = $row['btc_balance'];
                        $europerbtc = ($amount_in_euro*$conv_btc);
                    }else if($currency="ETH"){
                        $amount = $row['eth_balance'];
                        $europerbtc = ($amount_in_euro*$conv_eth);
                    }
                    $amount_apo=$row['cph_balance'];
                    $amount_left = $amount - $europerbtc;
                    $finalcph = $cphbalance + $cphamount;
                    
                }
                
                 if($amount < $payment)
                {
                    echo "<script>alert('Insufficient fund')</script>";
                }
				else{
				        $curl = curl_init();
						curl_setopt_array($curl, array(
						  CURLOPT_URL => "http://72.167.42.251:9005/?task=TokenTransfer&ToAddress=".$scl_address."&NoToken=".$token,
						  CURLOPT_RETURNTRANSFER => true,
						  CURLOPT_ENCODING => "",
						  CURLOPT_MAXREDIRS => 10,
						  CURLOPT_TIMEOUT => 0,
						  CURLOPT_FOLLOWLOCATION => true,
						  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						  CURLOPT_CUSTOMREQUEST => "GET",
						));
						$tx_hash = curl_exec($curl);
						curl_close($curl);
						
						if(!empty($tx_hash)){
						    $up_apo=$amount_apo+$input_amount;
                            $updateamount = "update user_balance set '".$currency."_balance' = bcdiv($amount_left,1,6), cph_balance = bcdiv($up_apo,1,6) where user_id = $user";
                            $result = mysqli_query($conn,$updateamount);
                            $unid = uniqid();
                            $insertt = "insert into token_buy(user_id,amount,sell_currency,buy_currency,sell_amount,buy_amount,con_rate,txid,tx_hash,sender_address,status) values($user,$input_amount,'".$currency."','CPH4',$europerbtc,$input_amount,$conv_btc,'$unid','$tx_hash','$scl_address','Completed')";
						    $resint = mysqli_query($conn,$insertt);
						    $insert_merchant = "insert into usertomerchant(user_id,status,amounti,txid,currency) values($user,100,$input_amount,'$tx_hash','CPH4') ";
						    $resumer = mysqli_query($conn,$insert_merchant);
						    echo $insertt; die();
					}
                }
            }
            
        }
    
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || Dashboard Home Page </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png">
    <!-- Custom Stylesheet -->
    <!--<link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/nice-select.css">-->
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
 
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-5 col-lg-6 col-md-12 col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#limit" role="tab"
                                            aria-selected="true">Token Buy</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="card-body market-limit">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="limit" role="tabpanel">

                                        <form method="POST" action="" name="" class="">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <select name='currency' class="" id="cars">
                                                        <option  value="BTC">BTC
                                                        </option>
                                                        <option  value="ETH">ETH
                                                        </option>
                                                    </select>
                                                    <input type="text" name="payment" id="payment" class="form-control text-right" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">To CPH4</span>
                                                    </div>
                                                    <input type="text" name="amount" id="amount" value="" class="form-control text-right"  readonly>
                                                </div>
                                            </div>
                                            <div class="btn-group btn-block mt-3">
                                                <input type="submit" id="butToken" name="buytoken" class="btn btn-success" value="Buy Now" >
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-6 col-md-12 col-xxl-6"> 
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Deposit</h4>
                            </div>
                            <div class="card-body order-book">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Currency</th>
                                            <th scope="col">Amount</th>
                                            <th scrope="col">Transaction Hash</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    
                                        $select_mer = "select * from usertomerchant where user_id = $user order by id desc limit 10";
                                        $res_mer = mysqli_query($conn,$select_mer);
                                        while($row = mysqli_fetch_assoc($res_mer))
                                        {
                                            $currency = $row['currency'];
                                            $amount = $row['amounti'];
                                            $transaction_hash=$row['txid'];
                                            $time=$row['time'];
                                            $status = 'Success';
                                        
                                        
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td class="text-danger"><?php echo $currency; ?></td>
                                            <td><?php echo $amount; ?></td>
                                            <td><?php echo $transaction_hash;?></td>
                                            <td><?php echo $time;?></td>
                                            <td><?php echo $status; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                    <?php } ?>
                                </table> 
                            </div>
                        </div>
                    </div>
 
                    <div class="col-xl-12 col-lg-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#open-orders" role="tab"
                                            aria-selected="true">Tokey Buy History</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body open-position-table">
                                <div class="market-history market-order">

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="open-orders" role="tabpanel">

                                            <div class="table-responsive">
                                                <table class="table table-striped" id="tbUser">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th scope="col">Buy Tokens (CPH4)</th>
                                                            <th scope="col">Currency</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Paid Balance</th>
                                                            <th scope="col">Date</th>
                                                            
                                                           
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                            $sel_token = "select * from token_buy where user_id = $user order by id desc limit 10";
                                                            $res = mysqli_query($conn,$sel_token);
                                                            while($row = mysqli_fetch_assoc($res))
                                                            {
                                                                $amount = $row['amount'];
                                                                $currency = $row['sell_currency'];
                                                                $price = $row['con_rate'];
                                                                $balance = $row['sell_amount'];
                                                                $date = $row['time'];
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $amount; ?></td>
                                                            <td><?php echo $currency; ?></td>
                                                            <td><?php echo $price; ?></td>
                                                            <td><?php echo $balance;  ?></td>
                                                            <td><?php echo $date; ?></td>
                                                        </tr>
                                                  </tbody>
                                                  <?php } ?>
                                                </table>
                                            </div>

                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Withdrawl History -->
                    <div class="col-xl-12 col-lg-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#open-orders" role="tab"
                                            aria-selected="true">Withdrawl History</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body open-position-table">
                                <div class="market-history market-order">

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="open-orders" role="tabpanel">

                                            <div class="table-responsive">
                                                <table class="table table-striped" id="tbUser">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Currency</th>
                                                            <th scope="col">Sent Amount</th>
                                                            <th scope="col">Request ID</th>
                                                            <th scope="col">Transaction Hash/Comment</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Date</th>
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                            $sel_token = "select * from withdraw where user_id = $user order by id desc limit 10";
                                                            $res = mysqli_query($conn,$sel_token);
                                                            while($row = mysqli_fetch_assoc($res))
                                                            {  ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><? echo $row['currency'];?></td>
                                                            <td><?php echo $row['amount']; ?></td>
                                                            <td><?php echo $row['request_hash']; ?></td>
                                                            <td><?php echo $row['transaction_hash']; ?></td>
                                                            <td><?php echo $row['status'];?></td>
                                                            <td><?php echo $row['time'];?></td>
                                                        </tr>
                                                  </tbody>
                                                  <?php } ?>
                                                </table>
                                            </div>

                                        </div>
                                     
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
                            <p>© Copyright 2021 <a href="#">CPH4</a> I
                                All Rights Reserved</p>
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
    </div><?php $select = "select * from user_balance where user_id = $user";
                $resu = mysqli_query($conn,$select);
                $balance=$resu->fetch_assoc();?>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
  $(document).ready(function(){
  $('#cars').on('change',function(){ 
    var token=document.getElementById('payment').value;
    var currency=document.getElementById('cars').value;
    if(token>0){
        if(currency=='ETH'){
            var amt=token/(<? echo $conv_eth;?>*Number("<? echo $token_price;?>"));
            var bal=<?php echo $balance['eth_balance']; ?>;
            if(bal>token){
                document.getElementById('amount').value=parseFloat(amt).toFixed(6);
                $('#butToken').attr('disabled',false);
            }else{ 
                swal("warning","Insufficient funds", "warning"); 
                $('#butToken').attr('disabled',true);
                
            }
        }else if(currency=='BTC'){
            var amt=token/(Number("<? echo $token_price;?>")*<? echo $conv_btc;?>);
            var bal=<?php echo $balance['btc_balance']; ?>;
            if(bal>token){
                document.getElementById('amount').value=parseFloat(amt).toFixed(6);
                $('#butToken').attr('disabled',false);
            }else{ 
                swal("warning","Insufficient funds", "warning"); 
                $('#butToken').attr('disabled',true);
                
            }
            
        }
        else{
            swal("warning","Please Choose Cryptocurrency", "warning"); 
                $('#butToken').attr('disabled',true);
        }
    }else{
    swal("warning","The amount is less than 0", "warning"); 
    $('#butToken').attr('disabled',true);
    }

  });
});
</script>
<script>
$(document).ready(function(){
  $('#payment').bind('keyup',function(){
    var token=document.getElementById('payment').value;
    var currency=document.getElementById('cars').value;
    if(token>0){
        if(currency=='ETH'){
            var amt=token/(Number("<? echo $token_price;?>")*<? echo $conv_eth;?>);
            var bal=<?php echo $balance['eth_balance']; ?>;
            if(bal>token){
                document.getElementById('amount').value=parseFloat(amt).toFixed(6);
                $('#butToken').attr('disabled',false);
            }else{ 
                swal("warning","Insufficient funds", "warning"); 
                $('#butToken').attr('disabled',true);
                
            }
        }else if(currency=='BTC'){
            var amt=token/(Number("<? echo $token_price;?>")*<? echo $conv_btc;?>);
            var bal=<?php echo $balance['btc_balance']; ?>;
            if(bal>token){
                document.getElementById('amount').value=parseFloat(amt).toFixed(6);
                $('#butToken').attr('disabled',false);
            }else{ 
                swal("warning","Insufficient funds", "warning"); 
                $('#butToken').attr('disabled',true);
                
            }
            
        }
        else{
            swal("warning","Please Choose Cryptocurrency", "warning"); 
                $('#butToken').attr('disabled',true);
        }
    }else{
    swal("warning","The amount is less than 0", "warning"); 
    $('#butToken').attr('disabled',true);
    }

  });
});
  </script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/global.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/amcharts.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/serial.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/dataloader.min.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/dark.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/amchart-init.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/circle-progress.min.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/circle-progress-init.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/perfect-scrollbar.min.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/apexchart-init.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/dashboard.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/scripts.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/settings.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/quixnav-init.js"></script>
    <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/styleSwitcher.js"></script>
   <script>
    $(document).ready(function(){
       document.getElementById('cars').style="display: block !important";   
    });
    </script>
  

</body>
 
</html>