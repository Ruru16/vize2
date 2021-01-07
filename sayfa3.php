<?php
session_start();
error_reporting(0);
$a=$_SESSION['ad'] = 'RUMEYSA';
?>
<html>
    <head>
    <title>Sayfa 3</title>
	<style>
	body {
			background-color: gray;
	}
	</style>
    </head>
    <body>
	<h1><center>SAYFA 3 </center></h1>
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