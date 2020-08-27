<?PHP
include 'config.php';
session_start();



$data = $_POST['Anti-Coin'];

if(empty($data))
{
header ("location: http://www.credit-chip.com/index.php");	
}
else
{

if (is_numeric($data)) {
 if (!isset($_SESSION['id'])) {  

header ("location: http://www.credit-chip.com/account.php");
}
else
{
$_SESSION['data'] = $data;
header ("location: http://www.credit-chip.com/account.php");
}
}
else
{
$_SESSION['data'] = $data;
header ("location: http://www.credit-chip.com/account.php");
}
}
?>