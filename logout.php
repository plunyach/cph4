<?php
/* Template Name: logout */
session_start();
session_destroy();

header("location:http://ramlogics.com/cph_4/login.php/");

?>