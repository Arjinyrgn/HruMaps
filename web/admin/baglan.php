<?php
$vt_sunucu="localhost";
$vt_isim="hrumap";
$vt_kullanici_adi="root";
$vt_kullanici_sifre="";

try{
 $vt_baglan=new PDO("mysql:host={$vt_sunucu};dbname={$vt_isim};charset=utf8",$vt_kullanici_adi,$vt_kullanici_sifre);
 $vt_baglan->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo $e->getMessage();
}
