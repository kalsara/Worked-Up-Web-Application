<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Login Confirmation";
session_start(); 
include ("db.php");

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

@$uEmail=$_POST['EmailLog'];
@$uPassword=$_POST['loginpassword'];

//echo"$uEmail";
if(empty($uEmail)||empty($uPassword) )
{
		echo "All fields are compulsory";
	echo"<p>go back to</p><a href='login.php'>Login</a>";
}else{
		$sql="select userId,UsersFName,UsersLName,UsersEmail,UsersPassword from users where UsersEmail='".$uEmail."'";

    @$result =mysqli_query($conn,$sql) ;
	

     $row=mysqli_fetch_array($result);
	   //	echo "".$row["UsersEmail"];

	   if($row['UsersEmail']==$uEmail){
		   if($row['UsersPassword']==$uPassword){
			   
                $_SESSION['login']['c_userid']=$row['userId'];
	            $_SESSION['login']['c_userFname']=$row['UsersFName'];			  
                $_SESSION['login']['c_userLname']=$row['UsersLName'];
				
				echo"<b>hello, ".$_SESSION['login']['c_userFname']." ".$_SESSION['login']['c_userLname']."</b></br>";
                echo"you have sucessfully loged into the system</br>";
	            echo"the email you enter is ".$uEmail."</br>";
	            echo"The password you enter is secret</br></br>";
                echo "<p>To continue shopping</p>";
	            echo "<a href='index.php'>Product Index</a></p></br>";
                echo "<p>To view your basket</p>";
	            echo "||<a href='basket.php'>My basket</a></p>";
	   
	  			  

	   
		   }else{
			   echo"invalid password";
		   }
		   
	   }else{
		   
		echo"invalid username";

	   }
   
	
   
	
	
}
//include head layout
include("footfile.html");
?>
