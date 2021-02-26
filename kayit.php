<!--Kayıt Sayfası-->
<?php
include 'islem.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/782dfba520.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="css/girisskayittstyle.css" />
    <title>Kayıt</title>
  </head>
  <body>
    <img src="img/bilgisayarbayan.jpg" alt="" />
    <div class="girisdiv">
      <form action="islem.php" method="post">
        <h1>Kayıt Ol</h1>
        <div class="textbox">
          <i class="fas fa-user"></i>
          <input
            id="kadii"
            required
            type="text"
            placeholder="Kullanıcı Adı"
            name="kadi"
          />
        </div>
        <div class="textbox">
          <i class="fas fa-lock"></i>
          <input
            required
            id="sifree"
            type="password"
            placeholder="Şifre"
            name="sifre"
          />
        </div>
        <input class="button" type="submit" value="Kayıt Ol" name="kayit_ol" />
        <p id="paragraf">CAPS LOCK AÇIK!</p>
      </form>
    </div>
    <script>
      var input = document.getElementById("kadii");
      var input1 = document.getElementById("sifree");
      var text1 = document.getElementById("paragraf");
      input.addEventListener("keyup", function (event) {
        if (event.getModifierState("CapsLock")) {
          text1.style.display = "block";
        } else {
          text1.style.display = "none";
        }
      });
      input1.addEventListener("keyup", function (event) {
        if (event.getModifierState("CapsLock")) {
          text1.style.display = "block";
        } else {
          text1.style.display = "none";
        }
      });
    </script>
  </body>
</html>
