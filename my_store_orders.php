<?PHP
include 'config.php';
session_start();
$id = $_SESSION['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Credit Chip | My store orders</title>
<link href="css/my_store_orders.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Credit Chip is an innovative kind of credit system!">
<meta name="keywords" content="cryptocredit, credit" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="http://www.credit-chip.com/img/test.ico">



</head>
<html><body><center>

<div id="wrapper">
  <div id="header">
    <div id="Anti-Coin_status"><a class="white" href="http://www.credit-chip.com/store.php">Store</a></div>
    
    <div id="rightcol1"><strong><?PHP session_start(); if (isset($_SESSION['id'])) { echo'<a class="white" href="http://www.credit-chip.com/wallet.php">'; echo'Wallet'; echo'</a>'; echo ' | ';  } else { echo'<a class="white" href="http://www.credit-chip.com/signup.php">'; echo 'Sign up'; echo'</a>'; echo' | '; echo'<a class="white" href="http://www.credit-chip.com/signin.php">'; echo'Sign in';echo'</a>'; echo'</strong>'; } ?> <a class="white" href="http://www.credit-chip.com/log_out.php"><?PHP session_start(); if (isset($_SESSION['id'])) {  echo'Log out'; } ?></a></div>
  </div>
  <div id="Anti-Coin_logo"><a class="white" href="http://www.credit-chip.com/home.php"><img src="http://www.credit-chip.com/img/logo.png"  /></a></div>
  <div id="cube">
   <div id="box">
     <div id="snoop">My orders from customers.</div>
   <div id="snoop">Please use FREE SHIPPING!</div>
   <div id="snoop"></div>
     <div id="marketprice"><?PHP
	 
	 $orders = 'orders'.'_'.$id;
	 
$query = "SELECT * FROM $orders";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result))
{
	$store = $row['store'];	
	$user_id = $row['user_id'];
	$email = $row['email'];
	$photo = $row['photo'];
    $phone = $row['phone'];
    $shipping = $row['shipping'];
	$description = $row['description'];
	
	echo'<img src="http://www.credit-chip.com/uploads/'; echo $photo; echo'" alt="" width="200" height="200" />';
	
	echo'<center>'; echo $email; echo'</center>';
	echo'<center>'; echo $phone;  echo'</center>';
	echo'<center>'; echo $description;  echo'</center>';
	
} 



?>
      
     <div id="xxx"></div>
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
