<?php
session_start();
error_reporting(0);
$a=$_SESSION['kullaniciadi'] = $kullaniciadi;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
			background-color:MediumSeaGreen;
	}

    </style>
    <h1><center>HOŞGELDİNİZ BURASI ANASAYFA </center></h1><br>
    <a href="sayfa1.php">1.Sayfaya Git </a><br>
        <a href="sayfa2.php">2.Sayfaya Git </a><br>
        <a href="sayfa3.php">3.Sayfaya Git </a><br>
		<a href="cikis.php">Çıkış </a><hr>
	MERHABA: 
	<?php
		
		echo $a;
	?>
	<br>
	Gezindiğin sayfa sayısı:
	<?php
	$ss = $_SESSION['gezinti'] + 1;
				echo( $ss);
				$_SESSION['gezinti']=$ss;
	?>
</body>
</html>