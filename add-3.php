<?PHP
include 'config.php';
session_start();

$description = $_POST['description'];
$description = stripslashes($description);
$description = strip_tags($description);


if(empty($description))
{
header("Location: https://www.anti-coin.com/add-2.php");
}
else
{
$_SESSION['description'] = $description;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anti-Coin | Add 3</title>
<link href="css/add-3.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Anti-Coin - unlimited money!">
<meta name="keywords" content="cryptocurrency, money" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="https://www.anti-coin.com/favicon.ico">



</head>
<html><body><center>

<div id="wrapper">
  <div id="header">
    <div id="Anti-Coin_status"></div>
    
    <div id="rightcol1"></div>
  </div>
  <div id="Anti-Coin_logo"><a class="white" href="https://www.anti-coin.com/home.php"><img src="https://www.anti-coin.com/img/logo.png"  /></a></div>
  <div id="cube">
   <div id="box">
     <div id="titlebox">Add item price.</div>
  <form action="https://www.anti-coin.com/add-4.php" id="signupForm" method="post">
     <div id="marketprice">
       <label>
         <input type="text" width="550" name="price" width="1000" placeholder="E.g. 320000" id="price" />
       </label>
     </div>
     <div id="browse">
       <label>
         <input type="submit" name="button" id="button" value="Next" />
       </label>
     </div>
   </div></form>
  </div>
<div id="itemsbox"> <div id="infodata"><strong><a class="blue" href="https://www.anti-coin.com/terms.php">Terms</a> | <a class="blue" href="https://www.anti-coin.com/privacy.php">Privacy</a> | <a class="blue" href="https://www.anti-coin.com/index.php">&copy; 2020 Anti-Coin</a></strong><br />
      <br />
    </div></div>
</div>
</center>

</body><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e3ab3a8b256fcc6"></script></html>

<?PHP
}
include "analyticstracking.php";

?>
