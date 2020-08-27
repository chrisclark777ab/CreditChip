<?PHP
$h = file_get_contents('https://www.metaweather.com/api/', FALSE, NULL, 20, 14);

echo $h;

?>

