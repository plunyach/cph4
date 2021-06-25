<?php
$servername = "localhost";
$username = "ramlogic_cph4";
$password = "vEueL[C,SYex";
$db = "ramlogic_cph4";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>