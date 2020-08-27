<?PHP
include 'config.php';
session_start();

///////////////////////////////////////////////////////////////////////
date_default_timezone_set('America/Kentucky/Monticello');
$email = $_POST['email'];
$email = stripslashes($email);
$email = strip_tags($email);



$query = "SELECT * FROM profile WHERE email = '$email'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$email2 = $row['email']; 		
}

if($email == $email2)
{
header("Location: http://www.credit-chip.com/signup.php");	
}
else
{
	

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
header("Location: http://www.credit-chip.com/signup.php");
}
else
{
if(empty($email))
{

header("Location: http://www.credit-chip.com/signup.php");

}
else
{

$query = "SELECT * FROM profile WHERE email = '$email'";
$result = mysql_query($query)
or die("Query failed: Error: 0" . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$email2 = $row['email']; 	
	
}

if($email == $email2)
{
header ("location: http://www.credit-chip.com/signup.php");	
}
else
{


if(!empty($email))
{



$id = abs(rand(111111111111, 999999999999999));
$id2 = abs(rand(111111111111, 999999999999999));
$password = abs(rand(111111111111, 999999999999999));

$time = date("Y-m-d H:i:s");


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}



$sql = "CREATE TABLE IF NOT EXISTS profile(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), ip VARCHAR(500), time TIMESTAMP)";


$sql = mysql_query($sql)
or die("Query failed:Pow, It failed!-------------1".mysql_error());



$sql2 = "INSERT INTO profile(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, ip, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$ip', '$time')";  


$sql2 = mysql_query($sql2)
or die("Query failed:Pow, It failed!-------------1".mysql_error());

$account = 'account'.'_'.$id;
$_SESSION['id'] = $id;

$sql18 = "CREATE TABLE IF NOT EXISTS $account(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), time TIMESTAMP)";


$sql18 = mysql_query($sql18)
or die("Query failed:Pow, It failed!-------------18".mysql_error());


$sql19 = "INSERT INTO $account(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1000', '', '$ip', '$time')";  


$sql19 = mysql_query($sql19)
or die("Query failed:Pow, It failed!-------------19".mysql_error());

$sql18 = "CREATE TABLE IF NOT EXISTS account(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), time TIMESTAMP)";


$sql18 = mysql_query($sql18)
or die("Query failed:Pow, It failed!-------------18".mysql_error());


$sql19 = "INSERT INTO account(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1000', '', '$ip', '$time')";  


$sql19 = mysql_query($sql19)
or die("Query failed:Pow, It failed!-------------19".mysql_error());




$headers = 'From: Credit-chip@credit-chip.com' . "\r\n" .
    'Reply-To: Credit-chip@credit-chip.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$subject = "".$email.", Congratulations! You have a new life a head of you!"; 
$message="".$email." your password is: ".$password.". Try the site out right here: http://www.credit-chip.com/index.php If you have any questions, contact us on twitter. https://www.twitter.com/CreditChip43/";
$send_contact=mail($email,$subject,$message,$headers);



$extra = "create.php";
header("Location: http://www.credit-chip.com/$extra");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
}
}
}
}
?>