<?PHP
include 'config.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anti-Coin | View</title>
<link href="css/view.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Credit Chip is an innovative kind of credit system!">
<meta name="keywords" content="cryptocredit, credit" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="http://www.credit-chip.com/img/test.ico">



</head>
<html><body><center>

<div id="wrapper">
  <div id="header">
    <div id="Anti-Coin_status"></div>
    
    <div id="rightcol1"></div>
  </div>
  <div id="Anti-Coin_logo"><a class="white" href="http://www.credit-chip.com/home.php"><img src="http://www.credit-chip.com/img/logo.png"  /></a></div>
  <div id="cube">
   <div id="box">
     <div id="marketprice"><?PHP 	
		$id = $_GET['id'];
					
$query = "SELECT * FROM item WHERE user_id = '$id' LIMIT 1";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$item = $row['item'];	
$user_id = $row['user_id'];
$photo = $row['photo'];
$item = $row['item'];	
$price = $row['price'];	
	
$_SESSION['uid'] = $user_id;


  echo'<img src="'; echo'http://www.credit-chip.com/uploads/'; echo $photo;  echo'" alt="" height="200" width="200" />';  
echo'<div id="xxx">'; echo '<a class="blue" href="http://www.credit-chip.com/checkout.php'; echo'?id='; echo $user_id;  echo'">';  echo $item;  echo'</a>'; 

echo'<center>'; echo 'Price:$'.$price; echo'</center>';



}      ?>
       
     </div>
     
     <div id="pad"></div>
   </div>
  </div>
<div id="itemsbox"> <div id="infodata"><strong><a class="blue" href="http://www.credit-chip.com/howitworks.php">How it works</a> | <a class="blue" href="http://www.credit-chip.com/terms.php">Terms</a> | <a class="blue" href="http://www.credit-chip.com/privacy.php">Privacy</a> | <a class="blue" href="http://www.credit-chip.com/index.php">&copy; 2020 Credit-Chip</a></strong><br />
      <br />
    </div></div>
</div>
</center>

</body><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e3ab3a8b256fcc6"></script></html>

<?PHP

include "analyticstracking.php";

?>
