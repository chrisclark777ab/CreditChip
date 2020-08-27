<?PHP
include 'config.php';
session_start();

$phone = $_POST['phone'];
$phone = stripslashes($phone);
$phone = strip_tags($phone);
$time = date("Y-m-d H:i:s");
$address = $_SESSION['address'];
$contact = $_SESSION['contact'];


$item = 'item'.'_'.$_SESSION['uid'];
$query = "SELECT * FROM $item";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$item = $row['item'];	
$user_id = $row['user_id'];
$photo = $row['photo'];
$item_number = $row['item_number'];
$price = $row['price'];
}

$orders = 'orders'.'_'.$user_id;


$sql20 = "CREATE TABLE IF NOT EXISTS $orders(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql20 = mysql_query($sql20)
or die("Query failed:Pow, It failed!-------------8".mysql_error());



if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


$sql21 = "INSERT INTO $orders(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, store, item, price, description, shipping, item_number, time) VALUES (NULL, '$user_id', '', '', '', '', '$contact', '', '', '', '', '', '$phone', '$photo', '', '', '', '', '', '', '', '', '', '', '', '', '$ip', '$store2', '$item2', '$price', '$address', 'free shipping', '$item_number', '$time')";  


$sql21 = mysql_query($sql21)
or die("Query failed:Pow, It failed!-------------9".mysql_error());



$account = 'account'.'_'.$_SESSION['uid'];
$query = "SELECT * FROM $account";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$pricer = $row['rec_balance'];
$email = $row['email'];
}

$result = ($pricer + $price);
$result2 = ($pricer + $price);




$id2 = $_SESSION['uid'];
$sql123 = "UPDATE $account SET balance_available = '$result' WHERE user_id = '$id2'";  


$sql123 = mysql_query($sql123)
or die("Query failed:Pow, It failed!-------------19".mysql_error());

$sql122 = "UPDATE $account SET rec_balance = '$result2' WHERE user_id = '$id2'";  

$sql122 = mysql_query($sql122)
or die("Query failed:Pow, It failed!-------------19".mysql_error());





$id = $_SESSION['id'];
$account = 'account'.'_'.$id;
$query = "SELECT * FROM $account";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$pricerr = $row['rec_balance'];
}

$result3 = ($pricerr - $price);
$result4 = ($pricerr - $price);


$sql124 = "UPDATE $account SET balance_available = '$result3' WHERE user_id = '$id'";  


$sql124 = mysql_query($sql124)
or die("Query failed:Pow, It failed!-------------19".mysql_error());



$sql125 = "UPDATE $account SET rec_balance = '$result4' WHERE user_id = '$id'";  

$sql125 = mysql_query($sql125)
or die("Query failed:Pow, It failed!-------------19".mysql_error());

$sql122 = "DELETE FROM item WHERE user_id = '$id2'";  


$sql122 = mysql_query($sql122)
or die("Query failed:Pow, It failed!-------------19".mysql_error());


$headers = 'From: Anti-Coin@www.anti-coin.com' . "\r\n" .
'Reply-To: Anti-Coin@www.anti-coin.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
$subject = "".$email.", You just got an order! Check your wallet and go to my orders."; 
$message="".$email.", You just got an order! Check your wallet and go to my orders. http://www.anti-coin.com/signin.php :)";
$to = $email;
$send_contact=mail($to,$subject,$message,$headers);

$subject = "".$email.", | User just receieved an order."; 
$to = "tylopez888@gmail.com";
$message= "You are making progress!";
$send_contact=mail($to,$subject,$message,$headers);


$extra = "thankyou.php";
header("Location: https://www.anti-coin.com/$extra");
	
?>