<?php 
    include 'dbcon.php';
     $cp_merchant_id = '69d82daa0b64db86d9ef9364631f173e';
    $cp_ipn_secret = 'ipn_call';
    $cp_debug_email = 'testmyworkt10@gmail.com';
    
    function errorAndDie($error_msg) {
        global $cp_debug_email;
        if (!empty($cp_debug_email)) {
            $report = 'Error: '.$error_msg."\n\n";
            $report .= "POST Data\n\n";
            foreach ($_POST as $k => $v) {
                $report .= "|$k| = |$v|\n";
            }
            mail($cp_debug_email, 'CoinPayments IPN Error', $report);
        }
        die('IPN Error: '.$error_msg);
    }
    
    if (!isset($_POST['ipn_mode']) || $_POST['ipn_mode'] != 'hmac') {
        errorAndDie('IPN Mode is not HMAC');
    }
    
    if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) {
        errorAndDie('No HMAC signature sent.');
    }
    
    $request = file_get_contents('php://input');
    if ($request === FALSE || empty($request)) {
        errorAndDie('Error reading POST data');
    }
    
    if (!isset($_POST['merchant']) || $_POST['merchant'] != trim($cp_merchant_id)) {
        errorAndDie('No or incorrect Merchant ID passed');
    }
    
    $hmac = hash_hmac("sha512", $request, trim($cp_ipn_secret));
    if (!hash_equals($hmac, $_SERVER['HTTP_HMAC'])) {
    //if ($hmac != $_SERVER['HTTP_HMAC']) { <-- Use this if you are running a version of PHP below 5.6.0 without the hash_equals function
        errorAndDie('HMAC signature does not match');
    }
    
    // HMAC Signature verified at this point, load some variables.
    
    
    $txn_id = $_POST['txn_id'];
    $status = intval($_POST['status']);
    $status_text = $_POST['status_text'];
    $address = $_POST['address'];
    $amounti = $_POST['amounti']/100000000;
    $currency = $_POST['currency'];
    $headers = 'From: noreply <noreply@cph4.com>'. "\r\n".'Content-Type: text/html';
    mail('testmyworkt10@gmail.com', "testing", "before status 100", $headers);
    if ($status >= 100 || $status == 2) {
          if($status == 100)
          {    mail('testmyworkt10@gmail.com', "testing", "after status 100", $headers);
              if($currency=="LTCT" || $currency=="btc" || $currency=="BTC" || $currency=="ltct"){
                    $uid = "select user_id from user_address where btc_address = '$address'";
                    $re = mysqli_query($conn,$uid);
                    while($row =mysqli_fetch_assoc($re))
                    {
                        $u_id = $row['user_id'];
                    }
                    $bala = "select btc_balance from user_balance wheer user_id = $u_id";
                    $res = mysqli_query($conn,$bala);
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $bal = $row['btc_balance'];
                    }
                    $balance = $bal + $amounti;
                    $update = "update user_balance set btc_balance = $balance where user_id = $u_id";
                    $resu = mysqli_query($conn,$update);
                    $insert = "insert into usertomerchant(user_id,status,amounti,txid,currency) values($u_id,$status,$amounti,'$txn_id','BTC')";
                    $result = mysqli_fetch_assoc($conn,$insert); 
                    $message = '<html><style>
                                .header{background: #000;margin: auto;display: block;text-align: center;padding: 0px 0px 30px;vertical-align: middle;margin-bottom: 20px;  }
                                .footer { background: #000; padding: 20px; text-align: center;color:#fff; }
                                </style>
                                <table style="width:40%; margin:auto; border: 1px solid #e1e1e1;">
                                    <thead><tr><th class="header" style="background-color: #000; padding-bottom: 30px;"><img src="" style="width:300px; margin: 40px auto 0; display:block; "/></th></tr></thead>
                                    <tbody>
                                    <tr class="email"><td style="padding-left: 30px;padding-right: 30px;"><p style="height: auto; font-size: 16px; "><b> Hello </b>,<br><br> 
                                     User have Deposit BTC amount  as userid :'.$u_id.'<br></tr>
                                     <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Amount Deposit in (BTC):</td></tr>   
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Date/time(UTC):<b style="">'.date("Y/m/d H:i:s").'</b></td></tr>   
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;word-break:break-all;">User Transcation Hash:<b style="">'.$txn_id.'</b></td></tr>   
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Transcation Status:<b style="">'.$status_text.'</b></td></tr> 
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;word-break:break-all;">Amount to Deposit address:<b style="">'.$address.'</b></td></tr> 
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Amount To Sent:<b style="">'.$amounti.'</b></td></tr> 
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Currency Name: <b style="">'.$currency.'</b></td></tr>
                                    <tr><td style="padding-left: 30px;padding-right: 30px;"><br><br></td></tr> 
                                     <tr><td style="padding-left: 30px;padding-right: 30px; padding-bottom:40px;">CPH4 Token ICO Team <br>
                                      This is automated message please don&rsquo;t reply
                                    </td></tr>
                                    </tbody>
                                    <tfoot>
                                    <tr><td class="footer" style="text-align: center; background-color: #e1e1e1; padding: 10px 0px;"><p>&copy; Copyright  CPH4 Token ICO 2021 All Rights Reserved.</p></td></tr>
                                    </tfoot>
                                </table></html>';
                    $headers = 'From: noreply <noreply@cph4.com>'. "\r\n".'Content-Type: text/html';
                    $subject = "BTC Balance Deposite";
                    mail('plunyach@gmail.com', $subject, $message, $headers);
                   }
                   
                   if($currency=="ETH" || $currency=="eth" ){
                    $uid = "select user_id from user_address where eth_address = '$address'";
                    $re = mysqli_query($conn,$uid);
                    while($row =mysqli_fetch_assoc($re))
                    {
                        $u_id = $row['user_id'];
                    }
                    $bala = "select eth_balance from user_balance wheer user_id = $u_id";
                    $res = mysqli_query($conn,$bala);
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $bal = $row['eth_balance'];
                    }
                    $balance = $bal + $amounti;
                    $update = "update user_balance set eth_balance = $balance where user_id = $u_id";
                    $resu = mysqli_query($conn,$update);
                    $insert = "insert into usertomerchant(user_id,status,amounti,txid,currency) values($u_id,$status,$amounti,'$txn_id','ETH')";
                    $result = mysqli_fetch_assoc($conn,$insert); 
                    $message = '<html><style>
                                .header{background: #000;margin: auto;display: block;text-align: center;padding: 0px 0px 30px;vertical-align: middle;margin-bottom: 20px;  }
                                .footer { background: #000; padding: 20px; text-align: center;color:#fff; }
                                </style>
                                <table style="width:40%; margin:auto; border: 1px solid #e1e1e1;">
                                    <thead><tr><th class="header" style="background-color: #000; padding-bottom: 30px;"><img src="" style="width:300px; margin: 40px auto 0; display:block; "/></th></tr></thead>
                                    <tbody>
                                    <tr class="email"><td style="padding-left: 30px;padding-right: 30px;"><p style="height: auto; font-size: 16px; "><b> Hello </b>,<br><br> 
                                     User have Deposit BTC amount  as userid :'.$u_id.'<br></tr>
                                     <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Amount Deposit in (BTC):</td></tr>   
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Date/time(UTC):<b style="">'.date("Y/m/d H:i:s").'</b></td></tr>   
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;word-break:break-all;">User Transcation Hash:<b style="">'.$txn_id.'</b></td></tr>   
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Transcation Status:<b style="">'.$status_text.'</b></td></tr> 
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;word-break:break-all;">Amount to Deposit address:<b style="">'.$address.'</b></td></tr> 
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Amount To Sent:<b style="">'.$amounti.'</b></td></tr> 
                                    <tr><td style="padding-left: 30px;padding-right: 30px;padding-bottom:5px;">Currency Name: <b style="">'.$currency.'</b></td></tr>
                                    <tr><td style="padding-left: 30px;padding-right: 30px;"><br><br></td></tr> 
                                     <tr><td style="padding-left: 30px;padding-right: 30px; padding-bottom:40px;">CPH4 Token ICO Team <br>
                                      This is automated message please don&rsquo;t reply
                                    </td></tr>
                                    </tbody>
                                    <tfoot>
                                    <tr><td class="footer" style="text-align: center; background-color: #e1e1e1; padding: 10px 0px;"><p>&copy; Copyright  CPH4 Token ICO 2021 All Rights Reserved.</p></td></tr>
                                    </tfoot>
                                </table></html>';
                    $headers = 'From: noreply <noreply@cph4.com>'. "\r\n".'Content-Type: text/html';
                    $subject = "ETH Balance Deposite";
                    mail('plunyach@gmail.com', $subject, $message, $headers);
                   }
          }
    }

?>