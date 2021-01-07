<?php 
if(isset($_POST['girisyap'])){ 
  if(!empty($_POST['kullaniciadi']) && !empty($_POST['sifre'])){ 

 
    $kullanici_adi = $_POST['kullaniciadi']; 
    $sifre = $_POST['sifre']; 
    
    
    $uyeler='uyeler.txt';
	$dosya=fopen($uyeler,'a+');
	fputs($dosya,$kullanici_adi);
    fclose($dosya);
    
   
    /* Formdaki verilerle eşleşen bir üyenin olup olmadığını kontrol ediyoruz */
        $giris_yap = fopen('uyeler.txt','a+')
          /* Eğer eşleşen bir üye varsa burayı çalıştırıyoruz. */
            if($giris_yap)
            {
                $_SESSION['giris']  = true; // Tarayıcıda giriş bilgilerimizi tutuyoruz
                $_SESSION['uye_id'] = $giris_yap['uye_id']; // Tarayıcıda üye numarası bilgisini tutuyoruz
               header("Location: anasayfa.php"); // Giriş yapıldığı için kullanıcıyı ana sayfaya gönderebiliriz
            } 
            else {
                /* Girilen bilgilerle üye yoksa kullanıcıya hata metnimizi veriyoruz. */
                $hata_metini = "Kullanıcı adı veya şifre yanlış!";
            }                
    }
    else{
        echo "kullanıcı adı ve şifre giriniz";
    }
}
?>