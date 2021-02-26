<?php 
include("baglanti/connection.php");
$durum = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $adi = $_POST['adi'];
  $soyadi = $_POST['soyadi'];
  $email = $_POST['email'];
  $mesaj = $_POST['mesaj'];

      $sql = "INSERT INTO iletisim (adi,soyadi, email, mesaj) VALUES (:adi,:soyadi, :email, :mesaj)";
      #iletisim tablosuna formdan gelen bilgileri ekliyoruz.

      $stmt = $vt->prepare($sql);
      
      $stmt->execute(['adi' => $adi,'soyadi' => $soyadi, 'email' => $email, 'mesaj' => $mesaj]);

      $durum = "Mesajınız gönderildi";
     
     }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/iletisimstyle.css" />
    <title>İletişim</title>
  </head>
  <body>
    <div class="form">
      <h2>İletişim Formu</h2>
      <form action="" method="POST">
        <div class="kontrol">
          <input required type="text" name="adi" />
          <label>Adınız</label>
        </div>
        <div class="kontrol">
          <input required type="text" name="soyadi" />
          <label>Soyadınız</label>
        </div>
        <div class="kontrol">
          <input required type="email" name="email" />
          <label>E-posta adresiniz</label>
        </div>
        <div class="kontrol">
          <textarea required name="mesaj"  cols="30" rows="5"></textarea>
          <label>Mesajınız</label>
        </div>
        <div class="kontrol">
          <input id="button" type="submit" value="Gönder" " />
        </div>
        <div class="durum ">
        <?php echo $durum ?>
      </div>
      </form>
    </div>
  </body>
</html>
