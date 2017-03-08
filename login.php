<?php

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo"<table >";
echo"<form action=getlogin.php method=get>";
echo"<tr>
    <td>Email</td>
    <td><input type=Email name=EmailLog></td>
   </tr>";
echo"<tr>
    <td>password</td>
    <td><input type=password name=loginpassword></td>
 </tr>";
echo"<tr>
    <td><input type=submit name=register value=login></td>
    <td><input type=reset name=clear value='Clear Form'></td>
     </tr>";
echo"</form>";
echo"</table>";
session_start(); 
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Login";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";


//include head layout
include("footfile.html");


?>
