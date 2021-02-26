<?php

include("baglanti/connection.php");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.css">
    <script
      src="https://kit.fontawesome.com/782dfba520.js"
      crossorigin="anonymous"
    ></script>
    <title>Anasayfa</title>
</head>
<body>
    
    <div class="menu">
    <div class="mobil">
    <i class="fas fa-bars ac_kapa"></i>
    </div>
    <div class="linkler">
    <ul>
    <li><a href="anasayfa.php">Anasayfa</a></li>
    <li><a href="covid19.html">Covıd-19</a></li>
    <li><a href="test.html" >Koronavirüs Testi</a></li>
    <li><a href="galeri.html">Galeri</a></li>
    <li><a href="index.html">Çıkış Yap</a></li>
    </ul>  
    </div> 
    </div>
    <div class="foto">
        <img src="img/deneme6.jpg">
    </div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".ac_kapa").click(function () {
          $(".linkler").toggleClass("aktif");
        });
      });
    </script>
</body>
</html>