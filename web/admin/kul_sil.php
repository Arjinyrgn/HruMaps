<?php
$link = mysqli_connect("localhost", "root", "","hrumap");
$id=$_GET["id"];
$sil="update kullanicilar set aktiflik=0 where k_id='$id'";
$sorgu=mysqli_query($link,$sil);
if ($sorgu) {
    echo " Başarı ile silindi.";
	header("Refresh: 2; url=tabels.php");
} else {
    echo "Silme Başarısız!!! ";
	header("Refresh: 2; url=tabels.php");
}
?>
