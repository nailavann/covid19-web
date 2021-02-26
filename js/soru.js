function Soru(metin, secimler, cevap) {
    this.metin = metin;
    this.secimler = secimler;
    this.cevap = cevap;
}

Soru.prototype.isCorrectAnswer = function(secim) {
    return this.cevap === secim;
}
