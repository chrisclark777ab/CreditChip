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
<title>Credit Chip | View Store </title>
<link href="css/view_store.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Credit Chip is an innovative kind of credit system!">
<meta name="keywords" content="cryptocredit, credit" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="http://www.credit-chip.com/img/test.ico">
<meta name="yandex-verification" content="9d337e74b5b9fdfa" />

</head>

<body>
<div id="wrapper">
  <div id="header">
    <div id="rightcol1"></div>
  </div>
  <div id="padme"></div>
  
  <?PHP 	
	 $item = 'item'.'_'.$_GET['id'];
$query = "SELECT * FROM $item";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$item[] = $row['item'];	
$user_id[] = $row['user_id'];
$photo[] = $row['photo'];

	}
	
	
		
		?>
  <div id="cube"><center>
    <table width="1000" height="235" border="1">
      <tr>
        <td width="158" height="110"><center>&nbsp;</center></td>
        <td width="175"><center>&nbsp;</center></td>
        <td width="167"><center>&nbsp;</center></td>
        <td width="155"><center>&nbsp;</center></td>
        <td width="153"><center>&nbsp;</center></td>
        <td width="152"><center>&nbsp;</center></td>
        
        
      </tr>
      <tr>
        <td height="117"><center>&nbsp;</center></td>
        <td><center>&nbsp;</center></td>
        <td><center>&nbsp;</center></td>
        <td><center>&nbsp;</center></td>
        <td><center>&nbsp;</center></td>
        <td><center>&nbsp;</center></td>
      
     
      </tr>
    </table>
    </center>
  </div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e55f31f7a16c2f5"></script>
</body>
</html>

<?PHP 
}
else
{
	 header ("location: http://www.credit-chip.com/index.php");
}
include 'analyticstracking.php'; ?>


