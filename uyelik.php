<?php 
session_start();
error_reporting(0);
if (isset($_POST['uyeol'])){
  if(!empty($_POST['kullaniciadi']) && !empty($_POST['sifre']) && !empty($_POST['cinsiyet']) && !empty($_POST['il'])){ 
$ac = fopen("uyeler.txt","a+");

if(!$ac)
{
    echo "Hata !";
}

$ad = $_POST["kullaniciadi"];
$sifre = $_POST["sifre"];
$cinsiyet = $_POST["cinsiyet"];
$sehir = $_POST["il"];
$turkucu=$_POST['turkucu'];
$eklenecek_metin = $ad . ";" . $sifre . ";" . $cinsiyet . ";" . $sehir .";". $turkucu."\n" ;

//echo "başarılı bir şekilde üye oldunuz";
header('Location: anasayfa.php');

fwrite($ac,$eklenecek_metin);

exit();
}
else {
  echo "olmadı be";

}
}
?>