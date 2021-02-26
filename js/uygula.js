function doldur() {
    if (test.gonder()) {
        skor_goster();
    }
    else {
        var element = document.getElementById("soru");
        element.innerHTML = test.getSoruIndex().metin;

        var secimler = test.getSoruIndex().secimler;
        for (var i = 0; i < secimler.length; i++) {
            var element = document.getElementById("secim" + i);
            element.innerHTML = secimler[i];
            tahmin("btn" + i, secimler[i]);
        }

        sayfa_adim();
    }
};

function tahmin(id, tahmin) {
    var button = document.getElementById(id);
    button.onclick = function () {
        test.tahmin(tahmin);
        doldur();
    }
};


function sayfa_adim() {
    var sorusayisi = test.soruIndex + 1;
    var element = document.getElementById("sayfa");
    element.innerHTML = "" + sorusayisi + "/" + test.sorular.length;  

    
};

function skor_goster() {
    var metinHTML = '<h1 style="font-size:50px">Test Sonucu</h1>';
    metinHTML +=  '<hr style="margin-bottom: 50px" />';

   if (test.skor==0) {
    metinHTML += "<h2 id='score'>Belirti göstermiyorsunuz.</h2>"
    metinHTML += "<p id='score'>Değerlendirmeye göre bir sağlık kuruluşuna başvurmanıza gerek yoktur.</p>";
   }
   else if (test.skor ==1) {
    metinHTML += "<h2 id='score'> " + test.skor + " adet belirti gösteriyorsunuz. </h2>";
    metinHTML += "<p  id='score'>Koronavirüs riskine karşı kendinizi bir süre izole ederek gözlemleyiniz.</p>";
   }
   else if (test.skor == 2) {
    metinHTML += "<h2 id='score'> " + test.skor + " adet belirti gösteriyorsunuz. </h2>";
    metinHTML += "<p  id='score'>Koronavirüs riskine karşı kendinizi bir süre izole ederek gözlemleyiniz.</p>";
    metinHTML += "<p  id='score'>Başka bir belirti daha göstermeye başlarsanız sağlık kuruluşuna başvurunuz.</p>";
   }
   else if (test.skor == 3) {
    metinHTML += "<h2 id='score'> " + test.skor + " adet belirti gösteriyorsunuz. </h2>";
    metinHTML += "<p  id='score'>Koronavirüs riskine karşı bir sağlık kuruluşuna başvurmanızda fayda var.</p>";
   }
   else if (test.skor ==  4) {
    metinHTML += "<h2 id='score'> " + test.skor + " adet belirti gösteriyorsunuz. </h2>";
    metinHTML += "<p  id='score'>Koronavirüs riskine karşı bir sağlık kuruluşuna başvurmanızı tavsiye ediyoruz.</p>";
   }
   else if(test.skor==5)
   {
    metinHTML += "<h2 id='score'>Belirtilerin hepsini gösteriyorsunuz. </h2>";
    metinHTML += "<p  id='score'>Koronavirüs riskine karşı ivedilikle bir sağlık kuruluşuna başvurunuz.</p>";

   }
   var element = document.getElementById("test");
   element.innerHTML = metinHTML;
};

// soruları olusturuyoruz
var sorular = [
    new Soru("38 derece veya üzeri yüksek ateşiniz var mı?", ["Evet", "Hayır"], "Evet"),
    new Soru("Burun akıntısı, halsizlik, vücut ağrınız var mı?", ["Evet", "Hayır"], "Evet"),
    new Soru("Öksürük ve nefes darlığınız var mı?", ["Evet", "Hayır"], "Evet"),
    new Soru("Koku ve tat duyusu kaybı var mı?", ["Evet", "Hayır"], "Evet"),
    new Soru("Gözde kızarıklık, çapaklanma, sulanma yaşıyor musunuz?", ["Evet", "Hayır"], "Evet")

];

// testi olustuuruyoruz
var test = new Test(sorular);

// testi görüntülüyoruz
doldur();



