﻿<?php
session_start();

//include a db.php file to connect to database
include ("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Index";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");
include ("detectlogin.php");
echo "<p></p>";
//display name of the page and some text
echo"<div >";

echo "<h2>".$pagename."</h2>";
echo "<h3 ><center>Amazing products for your home, for your work, for you!</center> </h3><br><br><hr>";
echo"</div>";

//create a new variable containing a SQL statement retrieving names of products from the product table 
$sql="select prodId, prodName, prodPicName, prodPrice from product";

//Create a new variable containing the execution of the SQL query i.e. select the records or get out
$result =mysqli_query($conn ,$sql) ;

//create an array of records (2 dimensional variable) called $prodArray.
//populate it with the records retrieved by the SQL query previously executed. 
//loop through the array i.e while the end of the array has not been reached go through it


   


mysqli_close($conn);
//include head layout
include ("footfile.html");
?>
