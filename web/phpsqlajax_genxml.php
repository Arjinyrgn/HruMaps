<?php
require("connect.php");
function parseToXML($htmlStr){
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}
// MySQL sunucusuyla bağlantı açar
$connection=mysqli_connect ('localhost', $username, $password);
$connection->set_charset("utf8");
if (!$connection) {
  die('Not connected : ' . mysqli_error());
}
// Aktif MySQL veritabanını ayarla
$db_selected = mysqli_select_db($connection,$database);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
}
// İşaretçiler tablosundaki tüm satırları seç
$query = "SELECT * FROM hrumaps WHERE 1";
$result = mysqli_query($connection,$query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}
header("Content-type: text/xml");
// XML dosyasını başlat
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Her biri için XML düğümleri yazdırarak satırları yinele
 
while ($row = @mysqli_fetch_assoc($result)){
  echo '<marker ';
  echo 'id="' . $row['h_id'] . '" ';
  echo 'name="' . parseToXML($row['ad']) . '" ';
  echo 'address="' . parseToXML($row['adres']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'type="' . $row['kategori_id'] . '" ';
  echo 'tel="' . parseToXML($row['tel']) . '" ';
  echo 'url="' . parseToXML($row['url']) . '" ';
  
  echo '/>';
  $ind = $ind + 1;
}
//XML dosyasını sonlandır
echo '</markers>';

?>