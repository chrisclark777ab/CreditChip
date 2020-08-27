<?PHP
include 'config.php';
session_start();
date_default_timezone_set('America/Kentucky/Monticello');



	

$time = date("Y-m-d H:i:s");


$email = $_POST['email'];
$password = $_POST['password'];
$email = strip_tags($email);
$email = stripslashes($email);
$password = strip_tags($password);
$password = stripslashes($password);
	
if(empty($email) || empty($password))
{
header ("location: http://www.credit-chip.com/index.php");	
}
else
{
	
	
$query = "SELECT * FROM profile WHERE email = '$email'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$email2 = $row['email']; 	
$password2 = $row['password'];	
}

if($email == $email2)
{

		  
$query = "SELECT * FROM profile WHERE email = '$email2'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$password3 = $row['password'];		
$id = $row['user_id'];	
}











if($password3 != $password)
{
header ("location: http://www.credit-chip.com/index.php");	
}
else
{
$_SESSION['id'] = $id;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$query = "SELECT * FROM profile WHERE user_id = '$id'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$sex = $row['sex'];
$month = $row['month'];
$day = $row['day'];
$year = $row['year'];
$email = $row['email'];
$country = $row['country'];
$city = $row['city'];
$state = $row['state'];
$race = $row['race'];
$haircolor = $row['hair'];
$eyecolor = $row['eye'];
$f = $row['photo'];
$martialstatus = $row['martialstatus'];
}

$signquery4 = "CREATE TABLE IF NOT EXISTS ip_login_user(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(100), firstname VARCHAR(100), lastname VARCHAR(100), views VARCHAR(100), interactions VARCHAR(100), sex VARCHAR(50), month VARCHAR(2), day VARCHAR(2), year VARCHAR(4), email VARCHAR(300), password VARCHAR(200), city VARCHAR(200), state VARCHAR(250), country VARCHAR(250), race VARCHAR(150), hair VARCHAR(150), eye VARCHAR(150), photo VARCHAR(200), martialstatus VARCHAR(200), college VARCHAR(300), highschool VARCHAR(300), ip VARCHAR(100), time TIMESTAMP)";

$signquery = mysql_query($signquery4)
or die("Query failed:Pow, It failed!-------------1 ".mysql_error());


$signup = "INSERT INTO ip_login_user(id, user_id, firstname, lastname, views, interactions, sex, month, day, year, email, password, city, state, country, race, hair, eye, photo, martialstatus, college, highschool, ip, time) VALUES (NULL, '$id', '$firstname', '$lastname', '', '', '$sex', '$month', '$day', '$year', '$email', '$password', '$city', '$state', '$country', '$race', '$haircolor', '$eyecolor', '$f', '$martialstatus', '$college', '$highschool', '$ip', '$time')";  mysql_query($signup) or die('Error, insert query failed, oh shoot, it failed.---------------2');



$headers = 'From: Anti-Coin@anti-coin.com' . "\r\n" .
    'Reply-To: Anti-Coin@anti-coin.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$subject = "".$email.", Just logged on."; 
$to = "nicolaslee@mail.com";
$message= "Just logged on. Looks like people are using your social network.";
$send_contact=mail($to,$subject,$message,$headers);



mysql_query("UPDATE profile SET views = 'ON' WHERE user_id = '$id'") or die('Error, insert query failed, oh shoot, it failed.---------------5');  
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$_SESSION['id'] = $id;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$extra = 'home.php?id='.$id;
header ("location: http://www.credit-chip.com/$extra");	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}


}

else
{

header ("location: http://www.credit-chip.com/index.php");		
}


}



?>