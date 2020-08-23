<?php
error_reporting(0);
define('guvenlik',true);
include 'head.php';


$sayfa=$_GET['sayfa'];
switch ($sayfa){
    case 'anasayfa':
        include 'main.php';
        break;
    case 'Kategori':
        include 'kategori.php';
        break;
    case 'Osmanbey':
        include 'osmanbey.php';
        break;
	case 'Eyubiye':
        include 'eyubiye.php';
        break;
	case 'Yenisehir':
        include 'yenisehir.php';
        break;
	case 'İlceler':
        include 'ilceler.php';
        break;
    default:
        include 'main.php';
        break;
}
include 'foot.php';
?>
