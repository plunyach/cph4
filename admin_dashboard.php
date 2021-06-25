<?php 
include 'dbcon.php';
session_start();
$email = $_SESSION['useremail'];
if(isset($_POST['submit']))
{
    $pacakgevalue = $_POST['value'];
    $pacakgecurrency = $_POST['curreny'];
    $cphvalue = $_POST['cphvalue'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];

    $insert = "insert into pacakge(currency_value,currency_name,cph_value, s_time, e_time) values('$pacakgevalue','$pacakgecurrency', $cphvalue, '$sdate', '$edate')";
  
    $result = mysqli_query($conn,$insert);
    
    if($result)
    {
        echo "<script>alert('Pacakage Added Successfully')</script>";
    }
    else
    {
        echo "<script>alert('Try again!!')</script>";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            a.navbar-brand img {
                width: 111px;
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
                          <img src="https://ramlogics.com/cph_4/dashboard_cph4/images/logo.png" alt="">
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                        <div class="ml-auto my-2 d-flex align-items-center my-lg-0">
                            <h6 class="mb-0 mr-4"><span>Welcome - </span><span><?php echo $email; ?></span></h6>
                            
                          <a href="https://ramlogics.com/cph_4/admin_logout.php/"><button class="btn btn-outline-success my-2 my-sm-0">Logout</button></a>
                          <a href="https://ramlogics.com/cph_4/toke_price.php/"><button class="btn btn-outline-success my-2 my-sm-0 ml-2">Update Token Price</button></a>
                          <a href="https://ramlogics.com/cph_4/admin_withdrawal.php/"><button class="btn btn-outline-success my-2 my-sm-0 ml-2">Withdrawal Request</button></a>
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
                             <h2>Add Package</h2>
                         </div>
                         <form action="" method="POST">
                        <div class="form-group textinput_box">
                            <label class="text-white" for="exampleInputValue">Add CPH4 Value</label>
                            <input type="text" name="cphvalue" class="form-control" id="exampleInputValue" placeholder="Add CPH4 Value"> 
                          </div>
                          <div class="form-group textinput_box">
                            <label class="text-white" for="exampleInputValue">Add Currency Value</label>
                            <input type="text" name="value" class="form-control" id="exampleInputValue" placeholder="Add Value"> 
                          </div>
                          <div class="form-group textinput_box">
                            <label class="text-white" for="exampleInputCurreny">Add Curreny</label>
                            <input type="text" name="curreny" class="form-control" id="exampleInputCurreny" placeholder="Add Curreny">
                          </div> 
                          <div class="form-group textinput_box">
                            <label class="text-white" for="exampleInputCurreny">Start Date</label>
                            <input type="date" name="sdate" class="form-control" id="exampleInputCurreny" placeholder="Start Curreny">
                          </div> 
                          <div class="form-group textinput_box">
                            <label class="text-white" for="exampleInputCurreny">End Date</label>
                            <input type="date" name="edate" class="form-control" id="exampleInputCurreny" placeholder="End Curreny">
                          </div> 
                          <div class="sub_mit_btn text-center">
                              <input type="submit" name="submit" class="btn sub_mit_btn_" value="Add Pacakge">
                          </div>
                        </form>
                     </div>
                     <div class="addpackage p-3 card">
                         <div class="packageheadline text-center text-white">
                             <h2>Package List</h2>
                         </div>
                         <div class="table_list_area table-responsive">
                             <table class="table table-hover">
                              <thead>
                                <tr> 
                                  <th scope="col"><span>Sr.No.</span></th>
                                  <th scope="col"><span>CPH4 Value</span></th>
                                  <th scope="col"><span>Price</span></th>
                                  <th scope="col"><span>Currency</span></th>
                                  <th scope="col"><span>Start Date</span></th>
                                  <th scope="col"><span>End Date</span></th>
                                  <th scope="col"><span>Action</span></th>
                                </tr>
                              </thead>
                              <?php 
                                $sel = "select * from pacakge";
                                $res = mysqli_query($conn,$sel);
                                $sr = 1;
                                while($row = mysqli_fetch_assoc($res))
                                {
                               
                                
                              ?>
                            <tbody>
                                <tr>
                                  <th scope="row"><span><?php echo $sr++; ?></span></th>
                                  <td><span><?php echo $row['cph_value']; ?></span></td>
                                  <td><span><?php echo $row['currency_value']; ?></span></td>
                                  <td><span><?php echo $row['currency_name']; ?></span></td> 
                                  <td><span><?php echo $row['s_time']; ?></span></td> 
                                  <td><span><?php echo $row['e_time']; ?></span></td> 
                                  <td><span>
                                        <a href="https://ramlogics.com/cph_4/delete_package.php?id=<?php echo $row['id']; ?>" class="mx-2"><i class="fa fa-trash" style="font-size:18px;"></i></a>
                                  </span></td> 
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
     
     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

