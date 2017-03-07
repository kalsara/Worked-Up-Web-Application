<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");
include ("detectlogin.php");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
//@$prodNameAdd=$_POST['h_prodName'];
//@$prodpriceAdd=$_POST['h_prodPrice'];



echo"<table border=1;>";
echo"<tr>";
        echo"<th> product name</th>";
        echo"<th> product price</th>";
	echo"<th> Quantity</th>";
	echo"<th>Sub Total</th>";
echo"</tr>";
$total = 0;
if (isset($_SESSION['basket'])) {
    foreach ($_SESSION['basket'] as $key => $value) {
        if (!$key == 0) {
            $sql = "select * from product where prodId='".$key."';";
            $exeSQL = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $thearrayprod = mysqli_fetch_array($exeSQL);

            echo "<tr>
			<td>" . $thearrayprod['prodName'] . "</td>
			<td>" . $thearrayprod['prodPrice'] . "</td>
			<td>" . $value . "</td>
			<td>" . $value * $thearrayprod['prodPrice'] . ".00</td>
		        </tr>";

            $total +=$value*$thearrayprod['prodPrice'];
        }
    }
}
	echo "<tr>
          <td colspan='3'>Total</td>
          <td>$total.00</td>
      </tr>
      </table>"; 

	
	
      



//include head layout
include("footfile.html");
?>
