<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) ;
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }else{
	  
	  echo "connection success";
  }
mysqli_select_db($conn,"youraccount_0");
?>	
