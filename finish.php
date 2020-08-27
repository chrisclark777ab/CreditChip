<?PHP
include 'config.php';
session_start();


$store2 = $_SESSION['store']; 
$item2 = $_SESSION['item'];
$description = $_SESSION['description'];
$price = $_SESSION['price'];
$type = $_SESSION['type'];
$id = $_SESSION['id'];
$category = $_SESSION['category'];


$query = "SELECT * FROM profile WHERE user_id = '$id'";
$result = mysql_query($query)
or die("Query failed: " . mysql_error());
while ($row = mysql_fetch_assoc($result))
{
$password = $row['password'];
$email = $row['email'];
}





if($_FILES["fileToUpload"]["tmp_name"])
{

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      //  echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
  //  echo "Sorry, your file is too large.";
   // $uploadOk = 0;
//}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 //   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	
	$file = basename($_FILES["fileToUpload"]["name"]);
	$hash = md5(uniqid(rand(), true));
	list($filename, $ext) = explode(".", $file);
	$f = $hash.'.'.$ext;
	$target_file = 'uploads/'.$f;
	

	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
    //    echo "Sorry, there was an error uploading your file.";
    }
}

}
else
{
	header ("location: http://www.credit-chip.com/setup-6.php");
}





$id2 = abs(rand(111111111111, 999999999999999));
$time = date("Y-m-d H:i:s");
$store = 'store'.'_'.$id;
$item = 'item'.'_'.$id;
$order = 'order'.'_'.$id;
$items = 'items'.'_'.$id;
$orders = 'orders'.'_'.$id;

$_SESSION['id'] = $id;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}








 



$sql5 = "CREATE TABLE IF NOT EXISTS settings(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500),  email VARCHAR(350), deactivate VARCHAR(50), send_emails VARCHAR(50), sound VARCHAR(500), stealthmode VARCHAR(509), delete_account VARCHAR(500), views VARCHAR(500), interactions VARCHAR(500), time TIMESTAMP)";


$sql5 = mysql_query($sql5)
or die("Query failed:Pow, It failed!-------------5".mysql_error());



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql6 = "CREATE TABLE IF NOT EXISTS store(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql6 = mysql_query($sql6)
or die("Query failed:Pow, It failed!-------------6".mysql_error());



$sql7 = "INSERT INTO store(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, store, item, price, description, shipping, item_number, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '$f', '$category', '', '', '', '', '', '', '', '', '0', '', '', '$ip', '$store2', '$item2', '$price', '$description', '', '$id2', '$time')";  


$sql7 = mysql_query($sql7)
or die("Query failed:Pow, It failed!-------------7".mysql_error());



$sql8 = "CREATE TABLE IF NOT EXISTS item(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql8 = mysql_query($sql8)
or die("Query failed:Pow, It failed!-------------8".mysql_error());




$sql9 = "INSERT INTO item(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, store, item, price, description, shipping, item_number, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '$f', '$category', '', '', '', '', '', '', '', '', '0', '', '', '$ip', '$store2', '$item2', '$price', '$description', '', '$id2', '$time')";  


$sql9 = mysql_query($sql9)
or die("Query failed:Pow, It failed!-------------9".mysql_error());



$sql10 = "CREATE TABLE IF NOT EXISTS $store(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql10 = mysql_query($sql10)
or die("Query failed:Pow, It failed!-------------10".mysql_error());




$sql11 = "INSERT INTO $store(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, store, item, price, description, shipping, item_number, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '$f', '$category', '', '', '', '', '', '', '', '', '0', '', '', '$ip', '$store2', '$item2', '$price', '$description', '', '$id2', '$time')"; 



$sql11 = mysql_query($sql11)
or die("Query failed:Pow, It failed!-------------11".mysql_error());


$sql12 = "CREATE TABLE IF NOT EXISTS $item(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";



$sql12 = mysql_query($sql12)
or die("Query failed:Pow, It failed!-------------12".mysql_error());




$sql13 = "INSERT INTO $item(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, store, item, price, description, shipping, item_number, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '$f', '$category', '', '', '', '', '', '', '', '', '0', '', '', '$ip', '$store2', '$item2', '$price', '$description', '', '$id2', '$time')";  


$sql13 = mysql_query($sql13)
or die("Query failed:Pow, It failed!-------------13".mysql_error());


$sql14 = "CREATE TABLE IF NOT EXISTS $order(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), ip VARCHAR(500), time TIMESTAMP)";



$sql14 = mysql_query($sql14)
or die("Query failed:Pow, It failed!-------------14".mysql_error());


$sql15 = "INSERT INTO $order(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, ip, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$ip', '$time')";  


$sql15 = mysql_query($sql15)
or die("Query failed:Pow, It failed!-------------15".mysql_error());






$sql20 = "CREATE TABLE IF NOT EXISTS $items(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql20 = mysql_query($sql20)
or die("Query failed:Pow, It failed!-------------8".mysql_error());




$sql21 = "INSERT INTO $items(id, user_id, gov_num, firstname, middle, lastname, email, password, month, day, year, sex, phone, photo, views, martial_status, number, country, state, city, zipcode, street_add, current_balance, balance_available, rec_balance, sent_balance, ip, store, item, price, description, shipping, item_number, time) VALUES (NULL, '$id', '', '', '', '', '$email', '$password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '$ip', '$store2', '$item2', '$price', '$description', '', '$id2', '$time')";  


$sql21 = mysql_query($sql21)
or die("Query failed:Pow, It failed!-------------9".mysql_error());




$sql20 = "CREATE TABLE IF NOT EXISTS $orders(id INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(500), gov_num VARCHAR(500), firstname VARCHAR(500), middle VARCHAR(500), lastname VARCHAR(500), email VARCHAR(500), password VARCHAR(500), month VARCHAR(10), day VARCHAR(10), year VARCHAR(500), sex VARCHAR(50), phone VARCHAR(500), photo VARCHAR(1000), views VARCHAR(500), martial_status VARCHAR(500), number VARCHAR(500), country VARCHAR(500), state VARCHAR(500), city VARCHAR(500), zipcode VARCHAR(500), street_add VARCHAR(500), current_balance VARCHAR(500), balance_available VARCHAR(500), rec_balance VARCHAR(500), sent_balance VARCHAR(500), ip VARCHAR(500), store VARCHAR(1000), item VARCHAR(1000), price VARCHAR(1000), description VARCHAR(1000), shipping VARCHAR(500), item_number VARCHAR(500), time TIMESTAMP)";


$sql20 = mysql_query($sql20)
or die("Query failed:Pow, It failed!-------------8".mysql_error());






?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anti-Coin | Store</title>
<link href="css/finish.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Anti-Coin - unlimited money!">
<meta name="keywords" content="cryptocurrency, money" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="http://www.credit-chip.com/favicon.ico">



</head>
<html><body><center>

<div id="wrapper">
  <div id="header">
    <div id="bitchip_status"></div>
    
    <div id="rightcol1"></div>
  </div>
  <div id="bitchip_logo"><a class="white" href="http://www.credit-chip.com/home.php"><img src="http://www.credit-chip.com/img/logo.png"  /></a></div>
  <div id="cube">
   <div id="box">
     <div id="titlebox">Thank you!</div>
     <div id="browse"><a class="blue" href="http://www.credit-chip.com/browse.php">
       <input type="image" src="http://www.credit-chip.com/img/browse.png" name="image" width="138" height="58" />
     </a></div>
   </div>
  </div>
<div id="itemsbox"> <div id="infodata"><strong><a class="blue" href="http://www.credit-chip.com/howitworks.php">How it works</a> | <a class="blue" href="http://www.credit-chip.com/terms.php">Terms</a> | <a class="blue" href="http://www.credit-chip.com/privacy.php">Privacy</a> | <a class="blue" href="http://www.credit-chip.com/index.php">&copy; 2020 Credit-Chip</a></strong><br />
      <br />
    </div></div>
</div>
</center>

</body><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e3ab3a8b256fcc6"></script></html>

<?PHP

include "analyticstracking.php";

?>
