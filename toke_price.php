<?php 
include 'dbcon.php';

session_start();

$email = $_SESSION['useremail'];

$select = "select * from token_price where id=1";
    $result = mysqli_query($conn,$select);
    while($row = mysqli_fetch_assoc($result))
    {
        $tokenpric = $row['price'];
    }


if(isset($_POST['submit']))
{
    $token_price = $_POST['token_price'];
    
    $select = "select * from token_price where id=1";
    $result = mysqli_query($conn,$select);
    while($row = mysqli_fetch_assoc($result))
    {
        $tokenprice = $row['price'];
    }
    
    if($tokenprice == $token_price)
    {
        
    }
    else
    {

//    $insert = "insert into token_price(price) values('$token_price')";
    $update = "update token_price set price = '$token_price' where id=1";
    $result = mysqli_query($conn,$update);
    
    if($result)
    {
        echo "<script>alert('Token price updated successfully')</script>";
    }
    else
    {
        echo "<script>alert('Try again!!')</script>";
    }
    
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/css/style.css">

    <title>CPH4 Admin Dashboard</title>
    
    <style>
        .form-group.textinput_box input {
            background: transparent !important;
            outline: none;
            border-color: #d3d1fa;
            line-height: 34px;
            color: #fff;
        }
        input.btn.sub_mit_btn_ {
            background-image: linear-gradient(
            45deg
            , #ffcc67, #ff67cb);
                border: none;
                outline: none;
                padding: 12px 31px;
                border-radius: 50px;
                color: #fff;
            }
           .nav_container {
                background: #142130;
            }
    </style>
    
  </head>
  <body style="background-color: #0c0e27">
    <div class="nav_container sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg">
                      <a class="navbar-brand" href="#">
                          <h2>CPH4</h2>
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                        <div class="ml-auto my-2 d-flex align-items-center my-lg-0">
                            <h6 class="mb-0 mr-4"><span>Welcome - </span><span><?php echo $email; ?></span></h6>
                            
                          <a href="https://ramlogics.com/cph_4/admin_logout.php/"><button class="btn btn-outline-success my-2 my-sm-0">Logout</button></a>
                          <a href="https://ramlogics.com/cph_4/admin_dashboard.php/"><button class="btn btn-outline-success my-2 my-sm-0">Add Package</button></a>
                        </div>
                      </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>     
     <div class="main_section_div py-md-5 py-3">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-12 col-12 m-auto">
                     <div class="addpackage card p-3">
                         <div class="packageheadline text-center text-white">
                             <h2>Update Token Price</h2>
                         </div>
                         <form action="" method="POST">
                          <div class="form-group textinput_box">
                            <label class="text-white" for="exampleInputValue">Token Price</label>
                            <input type="number" name="token_price" step='0.0001' min='0.00' class="form-control" id="exampleInputValue" placeholder="Add Token Price" value="<?php echo $tokenpric; ?>"> 
                          </div>
                          <div class="sub_mit_btn text-center">
                              <input type="submit" name="submit" class="btn sub_mit_btn_" value="Update">
                          </div>
                        </form>
                     </div>
                     <div class="addpackage p-3 card">
                         <div class="packageheadline text-center text-white">
                             <h2>Token Price</h2>
                         </div>
                         <div class="table_list_area table-responsive">
                             <table class="table table-hover">
                              <thead>
                                <tr> 
                                  <th scope="col"><span>Sr.No.</span></th>
                                  <th scope="col"><span>Token Price</span></th>
                                </tr>
                              </thead>
                              <?php 
                    //           $sel = "select * from pacakge";
                    //            $res = mysqli_query($conn,$sel);
                    //            while($row = mysqli_fetch_assoc($res))
                            // {
                               
                                
                                 ?>
                            <tbody>
                                <tr>
                                  <th scope="row"><span>1</span></th>
                                  <td><span><?php echo $tokenpric; ?></span></td>
                                </tr>  
                              </tbody>
                              <?php //} ?>
                            </table>
                         </div>
                     </div>
                 </div> 
             </div>
         </div>
     </div>
     
     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

