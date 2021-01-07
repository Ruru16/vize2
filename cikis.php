<?php
session_start();
session_destroy();
 
echo "Çıkış işlemi tamamlandı.";
header('Location: anasayfa.php');
?>