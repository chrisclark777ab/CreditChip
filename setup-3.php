<?PHP
include 'config.php';
session_start();

$store = $_POST['store'];
$store = stripslashes($store);
$store = strip_tags($store);


if(empty($store))
{
header("Location: http://www.credit-chip.com/setup-2.php");
}
else
{
$_SESSION['store'] = $store;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Credit Chip | Setup 3</title>
<link href="css/setup-3.css" rel="stylesheet" type="text/css" media="screen" />
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
     <div id="titlebox">Add item.</div>
  <form action="http://www.credit-chip.com/setup-4.php" id="signupForm" method="post">
     <div id="marketprice">
       <label>
         <input type="text" width="1000" name="item" placeholder="E.g. 2020 Lamborghini Huracan EVO" id="item" />
       </label>
     </div>
     <div id="browse">
       <label>
         <input type="submit" name="button" id="button" value="Next" />
       </label>
     </div>
   </div></form>
  </div>
<div id="itemsbox"> <div id="infodata"><strong><a class="blue" href="http://www.credit-chip.com/terms.php">Terms</a> | <a class="blue" href="http://www.credit-chip.com/privacy.php">Privacy</a> | <a class="blue" href="http://www.credit-chip.com/index.php">&copy; 2020 Credit-Chip</a></strong><br />
      <br />
    </div></div>
</div>
</center>

</body><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e3ab3a8b256fcc6"></script></html>

<?PHP
}
include "analyticstracking.php";

?>
