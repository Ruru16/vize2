<?php
session_start();
error_reporting(0);
$a=$_SESSION['ad'] = 'RUMEYSA';
?>
<html>
    <head>
    <title>Sayfa 2</title>
	<style>
	body {
			background-color:yellow;
	}
	</style>
    </head>
    <body>
	<h1><center>SAYFA 2 </center></h1>
		<a href="sayfa1.php">1.Sayfaya Git </a><br>
        <a href="sayfa2.php">2.Sayfaya Git </a><br>
        <a href="sayfa3.php">3.Sayfaya Git </a><br>
		<a href="cikis.php">Çıkış </a><hr>

	<hr>
	MERHABA: 
	<?php
		
		echo $a;
	?>
	<br>
	Gezindiğin sayfa sayısı:
	<?php
		//$_SESSION['gezinti'] = $_SESSION['gezinti'] + 1;
			//	echo( $_SESSION['gezinti'] );
			$ss = $_SESSION['gezinti'] + 1;
				echo( $ss);
				$_SESSION['gezinti']=$ss;
				
	?>
	</body>
	</html>