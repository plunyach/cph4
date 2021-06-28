<?php 
    include 'head.php';
    $pid = $_GET['id'];
    $del = "delete from token_price where id=$pid";
    $result = mysqli_query($conn,$del);
    if($result)
    {
        echo "<script>alert('Package deleted successfully.'); window.location='../master_package.php'</script>";
    }
    else
    {
        echo "<script>alert('Something is wrong, Try again!!'); window.location='../master_package.php'</script>";
    }

?>