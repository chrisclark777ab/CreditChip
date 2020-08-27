<?PHP
include 'config.php';
session_start();

$email = $_SESSION['email']; 
$password = $_SESSION['password'];








$id = abs(rand(111111111111, 999999999999999));
$id2 = abs(rand(111111111111, 999999999999999));
$time = date("Y-m-d H:i:s");
$store = 'store'.'_'.$id;
$item = 'item'.'_'.$id;
$order = 'order'.'_'.$id;
$items = 'items'.'_'.$id;
$orders = 'orders'.'_'.$id;
$account = 'account'.'_'.$id;
$_SESSION['id'] = $id;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



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
or die("Query failed:Pow, It failed!-------------2".mysql_error());







 



$sql5 = "CREATE TABLE IF NOT EXISTS settings(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500),  email VARCHAR(350), deactivate VARCHAR(50), send_emails VARCHAR(50), sound VARCHAR(500), stealthmode VARCHAR(509), delete_account VARCHAR(500), views VARCHAR(500), interactions VARCHAR(500), time TIMESTAMP)";


$sql5 = mysql_query($sql5)
or die("Query failed:Pow, It failed!-------------5".mysql_error());



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql6 = "CREATE TABLE IF NOT EXISTS store(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql6 = mysql_query($sql6)
or die("Query failed:Pow, It failed!-------------6".mysql_error());




$sql8 = "CREATE TABLE IF NOT EXISTS item(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql8 = mysql_query($sql8)
or die("Query failed:Pow, It failed!-------------8".mysql_error());





$sql10 = "CREATE TABLE IF NOT EXISTS $store(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql10 = mysql_query($sql10)
or die("Query failed:Pow, It failed!-------------10".mysql_error());





$sql12 = "CREATE TABLE IF NOT EXISTS $item(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";



$sql12 = mysql_query($sql12)
or die("Query failed:Pow, It failed!-------------12".mysql_error());



$sql14 = "CREATE TABLE IF NOT EXISTS $order(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), ip VARCHAR(500), time TIMESTAMP)";



$sql14 = mysql_query($sql14)
or die("Query failed:Pow, It failed!-------------14".mysql_error());


$sql15 = "INSERT INTO $order(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, ip, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$ip', '$time')";  


$sql15 = mysql_query($sql15)
or die("Query failed:Pow, It failed!-------------15".mysql_error());





$sql18 = "CREATE TABLE IF NOT EXISTS $account(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), time TIMESTAMP)";


$sql18 = mysql_query($sql18)
or die("Query failed:Pow, It failed!-------------18".mysql_error());


$sql19 = "INSERT INTO $account(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1000', '', '$ip', '$time')";  


$sql19 = mysql_query($sql19)
or die("Query failed:Pow, It failed!-------------19".mysql_error());



$sql20 = "CREATE TABLE IF NOT EXISTS $items(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql20 = mysql_query($sql20)
or die("Query failed:Pow, It failed!-------------8".mysql_error());





$sql20 = "CREATE TABLE IF NOT EXISTS $orders(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql20 = mysql_query($sql20)
or die("Query failed:Pow, It failed!-------------8".mysql_error());





//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$headers = 'From: Bitchip@bitchip.website' . "\r\n" .
'Reply-To: Bitchip@bitchip.website' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
$subject = "".$email.", Thanks for joining Bitchip. You mean a lot to us. We are new and you are to, so we are working hard to bring the lastest and greatest of this technology that we have stumbled upon. So, stay tuned, more is to come!"; 
$message="".$email.", You are number one to us! We are working on Bitchip everyday to improve the user experience for you so that is it for now. Hope to see you soon! :)";
$to = $email;
$send_contact=mail($to,$subject,$message,$headers);

/*
$subject = "".$email.", (New user) Thanks for joining Bitchip!"; 
$to = "nicolasdempsey@mail.com";
$message= "New user, you are gaining users!!!";
$send_contact=mail($to,$subject,$message,$headers);
*/


$_SESSION['id'] = $id;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$extra = 'wallet.php?id='.$id;
header ("location: https://www.bitchip.website/$extra");	
?>
