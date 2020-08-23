<?php
$link = mysqli_connect("localhost", "root", "","hrumap");
$link->set_charset("utf8");

$id=$_GET["id"];
$adi=$_POST["ad"];

if(empty($adi)) echo "kategori ad boş bırakılamaz!! <a href='k_guncelle.php?id=".$id."'>GERİ DÖN</a>";
else {
    $guncelle = "update kategoriler set kategori_ad='$adi' where kategori_id='$id'";
    $sorgu = mysqli_query($link, $guncelle);
    if ($sorgu) {
        echo "Güncelleme Başarılı Tablolar Sayfasına Yönlendiriliyor.";
		header("Refresh: 2; url=tabels.php");
    } else {
		 echo "Güncelleme Başarısız!!!";
		header("Refresh: 2; url=k_guncelle.php");
    }
}

?>
