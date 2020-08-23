<?php
$link=mysqli_connect("localhost","root","","hrumap");
$link->set_charset("utf8");

$adi=$_POST["adi"];
$adres=$_POST["adresi"];
$lat=$_POST["enlem"];
$lng=$_POST["boylam"];
$yid=$_POST["yid"];
$kid=$_POST["kid"];
$tel=$_POST["ilet"];
$url=$_POST["url"];

if(empty($adi)) {echo "Bilgiler  boş bırakılamaz!! <a href='h_ekle.php'>GERİ DÖN</a>";}
else{
    $kayit="insert into hrumaps(ad,adres,lat,lng,yerleske_id,kategori_id,tel,url,aktiflik) values ('$adi','$adres','$lat','$lng','$yid','$kid','$tel','$url',1)";
    $sorgu=mysqli_query($link,$kayit);
    if($sorgu){
       echo "Kayıt Başarılı Tablolar Sayfasına Yönlendiriliyor.";
	   header("Refresh: 2; url=tabels.php");
    }else{
      echo "Kayıt Başarısız!";
	  header("Refresh: 2; url=tabels.php");
    }
}
?>