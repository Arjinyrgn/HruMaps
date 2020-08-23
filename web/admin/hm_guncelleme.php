<?php
$link = mysqli_connect("localhost","root","","hrumap");
$link->set_charset("utf8");

$id=$_GET["id"];
$adi=$_POST["adi"];
$adres=$_POST["adresi"];
$lat=$_POST["enlem"];
$lng=$_POST["boylam"];
$yid=$_POST["yid"];
$kid=$_POST["kid"];
$tel=$_POST["ilet"];
$url=$_POST["url"];

if(empty($adi)) {echo "Bilgiler boş bırakılamaz!! <a href='h_guncelle.php?id=".$id."'>GERİ DÖN</a>";}
else{
    $guncelle="update hrumaps set ad='$adi',adres='$adres',lat='$lat',lng='$lng',yerleske_id='$yid',kategori_id='$kid',tel='$tel',url='$url' where h_id ='$id'";
    $sorgu = mysqli_query($link,$guncelle);
    if($sorgu){
        echo "Güncelleme Başarılı Tablolar Sayfasına Yönlendiriliyor.";
		header("Refresh: 2; url=tabels.php");
    } else{
        echo "Güncelleme Başarısız Dönmek İçin <a href='tabels.php'>GERİ DÖN</a>";
    }
}
?>