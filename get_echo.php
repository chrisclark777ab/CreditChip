<?PHP
session_start(); 
include 'config.php';
$title = $_POST['title'];
$title = strip_tags($title);
$title = stripslashes($title);
$message = $_POST['message'];
$message = strip_tags($message);
$message = stripslashes($message);



$query = "SELECT * FROM profile";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$email = $row['email'];

$headers = 'From: Anti-coin@Anti-coin.com' . "\r\n" .
    'Reply-To: Anti-coin@Anti-coin.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$subject = $title; 
$send_contact=mail($email,$subject,$message,$headers);
}

header ("location: https://www.anti-coin.com/echo.php");


?>