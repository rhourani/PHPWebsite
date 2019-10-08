<?php

$kullanici = 'admin';
$sifre = 'admin';
$veritabani = 'webtekTR';
$sorgu = "SELECT * FROM navbar";
$baglanti = mysqli_connect('localhost',$kullanici,$sifre,$veritabani) or die('Veritabanina baglanti kurulamadi');
mysqli_select_db($baglanti, $veritabani) or die("HATA");
$bilgi = mysqli_query($baglanti, $sorgu) or die("HATA");

?>