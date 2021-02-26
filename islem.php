<?php
#üye kayıt ve giriş işlemleri burada gerçekleştirilecek
require_once 'baglanti/connection.php';
session_start();
ob_start();
?>
<?php

#kayıt ekleme

if(isset($_POST['kayit_ol'])){
    $kullaniciadi = isset($_POST['kadi']) ? $_POST['kadi'] : null;
    $sifre = isset($_POST['sifre']) ? $_POST['sifre'] : null;
  
    #veritabanı eklmee işlemi
    $sorgu = $vt ->prepare('INSERT INTO uyeler SET
    kullaniciadi = ?,
    sifre = ?
    ');

    $ekle = $sorgu ->execute([
        $kullaniciadi, $sifre
    ]);

    if($ekle){
        header('location:giris.php');
    }
    else{
        header('location:kayit.php');
       exit;
       // $hata = $sorgu ->errorInfo();
        //echo 'mysql hatası ' . $hata[2];
    }
}
#giriş  
if(isset($_POST['giris_yap'])){
    $kullaniciadi = $_POST['kadi'];
    $sifre = $_POST['sifre'];

    $sorgu = $vt->prepare("SELECT * FROM uyeler  WHERE kullaniciadi =:kullaniciadi and sifre =:sifre");
    $sorgu->execute([
        'kullaniciadi' => $kullaniciadi,
        'sifre' => $sifre
    ]);

     $say = $sorgu -> rowCount();
     if($say == 1)
     {
         $_SESSION['userkullaniciadi'] = $kullaniciadi;
         header("location:anasayfa.php?durum=basarili");
         exit;
     }
     else{
        
         header("location:giris.php?durum=basarisiz");
         exit;
     }





}

?>