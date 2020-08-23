<?php
$link=mysqli_connect("localhost","root","","hrumap");
$link->set_charset("utf8");

$mail=$_POST["email"];
$sifre=$_POST["sifre"];
if(empty($mail)) {echo "Boş bırakılamaz!! <a href='kul_ekle.php'>GERİ DÖN</a>";}
else {
    $kayit = "insert into kullanicilar(email,sifre,aktiflik) values ('$mail','$sifre',1)";
    $sorgu = mysqli_query($link, $kayit);
    if ($sorgu) {
        echo "Kayıt Başarılı Tablolar Sayfasına Yönlendiriliyor.";
		header("Refresh: 2; url=tabels.php");
    } else {
        echo "Kayıt Başarısız!";
		header("Refresh: 2; url=tabels.php");
    }
}
?>
