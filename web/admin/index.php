<?php
error_reporting(0);

session_start();
ob_start();

$link=mysqli_connect("localhost","root","","hrumap");

if(!isset($_SESSION["login"]))
{
    include 'signin.php';
}else{
    define('guvenlik',true);
    include 'head.php';

    $sayfa1=$_GET['sayfa'];
    switch ($sayfa1){
        case 'anasayfa':
            include 'main.php';
            break;
        case 'faq':
            include 'k_ekle.php';
            break;

        case 'input':
            include 'input.php';
            break;
        case 'signup':
            include 'signup.php';
            break;
        case 'tabels':
            include 'tabels.php';
            break;
        case 'cikis':
            session_destroy();
           include 'cikis.php';
        default:
            include 'main.php';
            break;
    }
    include 'foot.php';
}
?>