<?php 
    include 'head.php';
    
    $pid = $_GET['id'];
    
    $del = "delete from pacakge where id=$pid";
    $result = mysqli_query($conn,$del);
    
    if($result)
    {
        echo "<script>alert('Package deleted successfully.'); window.location='https://ramlogics.com/cph_4/admin_dashboard.php/'</script>";
        
    }
    else
    {
        echo "<script>alert('Something is wrong, Try again!!'); window.location='https://ramlogics.com/cph_4/admin_dashboard.php/'</script>";
    }

?>