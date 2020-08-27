<?PHP

session_start(); 
include 'config.php';

$email = $_POST['email'];
$email = strip_tags($email);
$email = stripslashes($email);

if(!empty($email))
{
	



$query = "SELECT * FROM profile WHERE email = '$email'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$password = $row['password'];

}



	




$headers = 'From: Anti-Coin@anti-coin.com' . "\r\n" .
    'Reply-To: Anti-Coin@anti-coin.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$subject = "".$email.", Here is your recovered password on anti-coin."; 
$message="".$email." your password is: ".$password.". Try again, click right here: http://www.credit-chip.com/index.php";
$send_contact=mail($email,$subject,$message,$headers);




header ("location: http://www.credit-chip.com/email_sent.php");	

}
else
{
header ("location: http://www.credit-chip.com/forgot_password.php");	
}






?>