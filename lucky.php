<?PHP
include 'config.php';
session_start();

$data = "777";

$_SESSION['data'] = $data;

if (isset($_SESSION['id'])) { 
header ("location: http://www.credit-chip.com/account.php");
 }
else
{
header ("location: http://www.credit-chip.com/signup.php");	
}
?>