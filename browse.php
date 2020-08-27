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
<title>Anti-Coin | Browse</title>
<link href="css/browse.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Anti-Coin - unlimited money!">
<meta name="keywords" content="cryptocurrency, money" />
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
	 
	 
$query = "SELECT * FROM store";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
	$item = $row['item'];	
	$user_id = $row['user_id'];
	

$photo = $row['photo'];	



if(!empty($photo))
{

echo'<a class="blue" href="http://www.credit-chip.com/view.php?id='; echo $user_id; echo'">';  echo $item; echo '<br>'; echo'</a>';
	

}

} 



?>


</div>
     <div id="xxx"></div>
   </div>
  </div>
<div id="itemsbox"> <div id="infodata"><strong><a class="blue" href="http://www.credit-chip.com/howitworks.php">How it works</a> | <a class="blue" href="http://www.credit-chip.com/terms.php">Terms</a> | <a class="blue" href="http://www.credit-chip.com/privacy.php">Privacy</a> | <a class="blue" href="http://www.credit-chip.com/index.php">&copy; 2020 Credit-Chip</a></strong><br />
      <br />
    </div></div>
</div>
</center>

</body><!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f4153b0db0d1c80"></script></html>

<?PHP

include "analyticstracking.php";

?>
