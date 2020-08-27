<?PHP

if(!isset($_SESSION['id'])) {
   


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Credit Chip </title>
<link href="css/anticoin.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Credit Chip is an innovative kind of credit system!">
<meta name="keywords" content="cryptocredit, credit" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="http://www.credit-chip.com/img/test.ico">
<meta name="yandex-verification" content="9d337e74b5b9fdfa" />

</head>

<body>
<div id="wrapper">
  <div id="header">
    <div id="leftcol1"><strong><a class="white" href="http://www.credit-chip.com/store.php"><?PHP session_start();  echo'Store |'; ?></a></strong>    1 Credit: $1.00</div>
    <div id="rightcol1"><a class="white" href="http://www.credit-chip.com/faq.php"><b>FAQ</b></a> &nbsp;<b>|</b>&nbsp;<strong><?PHP session_start(); if (isset($_SESSION['id'])) { echo'<a class="white" href="http://www.credit-chip.com/account.php">'; echo'Account'; echo'</a>'; echo ' | ';  } else { echo'<a class="white" href="http://www.credit-chip.com/signup.php">'; echo 'Sign up'; echo'</a>'; echo' | '; echo'<a class="white" href="http://www.credit-chip.com/signin.php">'; echo'Sign in';echo'</a>'; echo'</strong>'; } ?> <a class="white" href="http://www.credit-chip.com/log_out.php"><?PHP session_start(); if (isset($_SESSION['id'])) {  echo'Log out'; } ?></a></div>
  </div>
  <div id="cube">
    <div id="aboutmessage"><b>Credit Chip  is an Electronic Star Based Network Credit System!</b><br />
    </div>
   
    <div id="logo"><a class="white" href="http://www.credit-chip.com/index.php"><img src="http://www.credit-chip.com/img/logo.png"  /></a></div>
    <div id="txtbox">
      <label><br />

<form action="http://www.credit-chip.com/process.php" id="signupForm" method="post">
<div class = "temp123">
        <input name="Anti-Coin" type="text" id="Anti-Coin" placeholder="How many credits you want?" maxlength="1000" size="50" />
      </div>
      </label>
    </div>
<div id="buttons">
  <div id="bbb">
    <div id="lbox"><input type="image" src="http://www.credit-chip.com/img/get_button.png" alt="" /></form></div>
    <div id="rbox">
     <form action="http://www.credit-chip.com/lucky.php" id="signupForm" method="post"> <input type="image"  src="http://www.credit-chip.com/img/imlucky_button.png" alt="" /></form>
    </div>
  </div>
</div>
  
  
    <div id="infodata"><strong><a class="blue" href="http://www.credit-chip.com/howitworks.php">How Credit-Chip Works </a> | <strong><a class="blue" href="http://www.credit-chip.com/blog/">Blog </a> | <a class="blue" href="http://www.credit-chip.com/terms.php"> Terms</a> | <a class="blue" href="http://www.credit-chip.com/privacy.php">Privacy</a> | <a class="blue" href="http://www.credit-chip.com/index.php">&copy; 2020 Credit Chip</a></strong><br />
      <br />
    </div>
    <div id="gaypride">
      <center>
      <p><br />
        <img src="http://www.credit-chip.com/gay.png" width="50" height="50" alt="gay pride"/></p>
      <p>Twitter: <a class="blue" href="https://twitter.com/CreditChip43">@CreditChip43 </a></p>
      <div>
        <p>© Credit-Chip Project 2020 Released under the <a class="blue" href="http://opensource.org/licenses/mit-license.php" target="_blank">MIT license</a></p>
        <p><a href="https://sourceforge.net/projects/creditchip/files/latest/download"><img alt="Download CreditChip" src="https://a.fsdn.com/con/app/sf-download-button" width=276 height=48 srcset="https://a.fsdn.com/con/app/sf-download-button?button_size=2x 2x"></a></p>
      </div>
      Credit Chip Version: 0.0.1<br />
      <p><br />
      </p>
      </center>
    </div>

  </div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f4153b0db0d1c80"></script>
</body>
</html>

<?PHP 
}
else
{
	 header ("location: http://www.credit-chip.com/index.php");
}
include 'analyticstracking.php'; ?>


