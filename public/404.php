<?
// TENTO SUBOR MOZETE LUBOVOLNE MENIT A MAZAT  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.www-hosting.sk/export/getsite.php?domena=".$_SERVER['SERVER_NAME']."&type=404");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
echo $output;

?>