<?php
$link=mysqli_connect("localhost","root","","hrumap");
$link->set_charset("utf8");

$adi=$_POST["ad"];
if(empty($adi)) {echo "yerleşke ad boş bırakılamaz!! <a href='y_ekle.php'>GERİ DÖN</a>";}
else{

    $kayit="insert into yerleskeler(yerleske_ad,aktiflik) values ('$adi',1)";
    $sorgu=mysqli_query($link,$kayit);
    if($sorgu){
        echo "Başarılı Tablolar Sayfasına Yönlendiriliyor.";
		header("Refresh: 2; url=tabels.php");
    }else{
        echo "Kayıt Başarısız!";
		header("Refresh: 2; url=tabels.php");
    }
}
?>
