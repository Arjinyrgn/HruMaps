<?php
$link = mysqli_connect("localhost", "root", "","hrumap");
$link->set_charset("utf8");

$id=$_GET["id"];
$email=$_POST["email"];
$sifre=$_POST["sifre"];

if(empty($email)) echo "E-mail boş bırakılamaz!! <a href='kul_guncelle.php?id=".$id."'>GERİ DÖN</a>";
else {
    $guncelle = "update kullanicilar set email='$email',sifre='$sifre' where k_id='$id'";
    $sorgu = mysqli_query($link, $guncelle);
    if ($sorgu) {
        echo "Güncelleme Başarılı Tablolar Sayfasına Yönlendiriliyor.";
		header("Refresh: 2; url=tabels.php");
    } else {
		 echo "Güncelleme Başarısız!!!";
		header("Refresh: 2; url=kul_guncelleme.php");
    }
}

?>
