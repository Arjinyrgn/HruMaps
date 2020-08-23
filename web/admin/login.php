<?php
$link=mysqli_connect("localhost","root","","hrumap");

    $username=$_POST['user'];
    $password=$_POST['pass'];

    $username= stripcslashes($username);
    $password= stripcslashes($password);
    $username=mysqli_real_escape_string($link,$username);
    $password= mysqli_real_escape_string($link,$password);

$result = mysqli_query($link,"select * from kullanicilar where email='$username' and sifre='$password' ") or die(mysqli_error());
$row=mysqli_fetch_array($result);
if($row['email']==$username && $row['sifre']==$password){
    $_SESSION["login"]=true;
    echo "Giriş başarılı Hoşgeldin "; 
	header("Refresh: 2; url=main.php");

}
else {
     echo "Giriş yapılamadı!!! Bilgileri kontrol edip tekrar deneyiniz.";
	header("Refresh: 2; url=signin.php");
}

?>


