<?PHP
include 'config.php';
session_start();

$contact = $_POST['contact'];
$contact = stripslashes($contact);
$contact = strip_tags($contact);

if (!filter_var($contact, FILTER_VALIDATE_EMAIL)) {
header("Location: http://www.credit-chip.com/checkout-2.php");
}
else
{

if(empty($contact))
{
$extra = "checkout-2.php?id=".$_GET['id'];
header("Location: http://www.credit-chip.com/$extra");
}
else
{
$_SESSION['contact'] = $contact;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anti-Coin | Checkout 3</title>
<link href="css/checkout-3.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Anti-Coin - unlimited money!">
<meta name="keywords" content="cryptocurrency, money" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="http://www.credit-chip.com/favicon.ico">



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
     <div id="titlebox">Last step! | Please add your phone number.</div>
  <?PHP  
 echo'<form action="http://www.credit-chip.com/get_thankyou.php?id='.$_GET['id'];  
echo'" id="signupForm" method="post">'; ?>
     <div id="marketprice">
       <label>
         <textarea name="phone" id="phone" placeholder="E.g. 123-456-7890" cols="80" width="1000" rows="5"></textarea>
       </label>
     </div>
     <?PHP  	 $item = 'item'.'_'.$_GET['id'];
$query = "SELECT * FROM $item";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{ $price = $row['price'];	 }  echo 'Price: $'.$price;   ?><div id="browse">
       <label>
         <input type="submit" name="button" id="button" value="Pay!" />
       </label>
     </div>
   </div></form>
  </div>
<div id="itemsbox"> <div id="infodata"><strong><a class="blue" href="http://www.credit-chip.com/howitworks.php">How it works</a> | <a class="blue" href="http://www.credit-chip.com/terms.php">Terms</a> | <a class="blue" href="http://www.credit-chip.com/privacy.php">Privacy</a> | <a class="blue" href="http://www.credit-chip.com/index.php">&copy; 2020 Credit-Chip</a></strong><br />
      <br />
    </div></div>
</div>
</center>

</body><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e3ab3a8b256fcc6"></script></html>

<?PHP
}
}

include "analyticstracking.php";

?>
