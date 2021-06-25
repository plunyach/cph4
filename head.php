<?php
include 'dbcon.php';
    session_start();
    $uid = $_SESSION['useremail'];
    $select = "select * from register where useremail= '$uid'";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($result);
    if (!isset($_SESSION['useremail'])) {
     header('Location: http://ramlogics.com/cph_4/login.php/');
    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>