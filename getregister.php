<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$fName=$_POST['firstName'];
$lName=$_POST['lastName'];
$address=$_POST['address'];
$pcode=$_POST['postCode'];
$tp=$_POST['telNo'];
$email=$_POST['eAddress'];
$pass=$_POST['password'];
$confirmPass=$_POST['conPassword'];
if(empty($fName)||empty($lName)||empty($address)||empty($pcode)||empty($tp)||empty($email)||empty($pass)||empty($confirmPass) )
{
		echo "All fields are compulsory";
	echo"<p>go back to</p><a href='register.php'>Register</a>";
}else{
	$reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/" ;
	if(!(preg_match($reg,$email))){

				echo "<p>Email not valid</p>";
			echo "<p>go back top<a href='register.php'>Register</a></p>";
	}else{

		if($pass==$confirmPass)
	{

$sqlInfo="INSERT INTO users(UsersFName,UsersLName,UsersAddress,UsersPostCode,UsersTelNo,UsersEmail,UsersPassword) 
VALUES ('".$fName."','".$lName."','".$address."','".$pcode."','".$tp."','".$email."','".$pass."')";

//run SQL query
@$run-mysqli_query($conn,$sqlInfo);
	if (mysqli_errno($conn)==0){
             
           echo "New record created successfully";
		   echo "<p>go to<a href='login.php'>Login</a></p>";

        } else {
         // echo "Error: " . $sqlInfo . "<br>" . mysqli_error($conn);
		  if (mysqli_errno($conn)==1062)
		{
			echo "<br>There is an error with your registry the email you enter is already taken.";	
			echo "<p>go back<a href='register.php'>Register</a></p>";
			
		}
      }
	  

	
	}else{
		echo "<p>the two password you enterde do no match";
			echo "<p>please make sure you entered the correcly";
			echo "<p>go back<a href='register.php'>Register</a></p>";


	}
	
}	
}	
	echo "<p> ";

//include head layout
include("footfile.html");
?>
