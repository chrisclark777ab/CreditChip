<?PHP 
include 'config.php';
session_start();
$user_id = $_SESSION['id'];
$account = 'account'.'_'.$user_id;

if(!isset($_SESSION['id'])) {
   header ("location: http://www.credit-chip.com/signup.php");
}
else
{
$query = "SELECT * FROM $account";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$balance = $row['rec_balance']; 	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Credit Chip | Wallet</title>
<link href="css/wallet.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Credit Chip is an innovative kind of credit system!">
<meta name="keywords" content="cryptocredit, credit" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="http://www.credit-chip.com/img/test.ico">




</head>
<html><body><center>

<div id="wrapper">
  <div id="header">
    <div id="Anti-Coin_status"><a class="white" href="http://www.credit-chip.com/store.php">Store</a></div>
    
    <div id="rightcol1"><strong><a class="white" href="http://www.credit-chip.com/log_out.php">Log out</a><a class="white" href="http://www.credit-chip.com/signup.php"></a></strong></div>
  </div>
  <div id="Anti-Coin_logo"><a class="white" href="http://www.credit-chip.com/home.php"><img src="http://www.credit-chip.com/img/logo.png"  /></a></div>
  <div id="cube">
   <div id="box">
     <div id="topic"> 
       <div id="b">My Credits</div>
       </div>
     <div id="emailtite">
       <div id="b">My amount in &quot;Credit Chip&quot; credits.</div></div>
     <div id="emailbox">
       <div id="txtbox"><input type="text" name="amount" maxlength="500" placeholder="<?PHP  echo $balance;   ?>" id="amount" />


</div>
     </div>
     <div id="passwordtitle">
       <div id="b"><a class="blue" href="http://www.credit-chip.com/my_store_orders.php">My store orders</a></div></div>
     <div id="passwordbox">
       <div id="txtbox"></div></div>
     <div id="joinbutton"><form action="http://www.credit-chip.com/send_credit.php" id="signupForm" method="post">
       <div id="forgotbox">
     </form></div><form action="http://www.credit-chip.com/received_credits.php" id="signupForm" method="post">
       <div id="but"></div>
     </div></form>
   </div>
  </div>
<div id="itemsbox"> <div id="infodata"><strong><a class="blue" href="http://www.credit-chip.com/howitworks.php">How it works</a> | <a class="blue" href="http://www.credit-chip.com/terms.php">Terms</a> | <a class="blue" href="http://www.credit-chip.com/privacy.php">Privacy</a> | <a class="blue" href="http://www.credit-chip.com/index.php">&copy; 2020 Credit-Chip</a></strong><br />
      <br />
    </div></div>
</div>
</center>

</body></html>

<?PHP
}
include "analyticstracking.php";

?>
