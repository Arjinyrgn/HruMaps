<?php
$link = mysqli_connect("localhost", "root", "","hrumap");
$link->set_charset("utf8");

$id=$_GET["id"];
$adi=$_POST["ad"];

if(empty($adi)) echo "yerleşke ad boş bırakılamaz!! <a href='y_guncelle.php?id=".$id."'>GERİ DÖN</a>";
else {
    $guncelle = "update yerleskeler set yerleske_ad='$adi' where yerleske_id='$id'";
    $sorgu = mysqli_query($link, $guncelle);
    if ($sorgu) {
        echo "Güncelleme Başarılı Tablolar Sayfasına Yönlendiriliyor.";
		header("Refresh: 2; url=tabels.php");
    } else {
        echo "Güncelleme Başarısız!!!";
		header("Refresh: 2; url=y_guncelleme.php");
    }
}

?>

