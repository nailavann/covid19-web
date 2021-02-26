function Test(sorular) {
    this.skor = 0;
    this.sorular = sorular;
    this.soruIndex = 0;
}

Test.prototype.getSoruIndex = function() {
    return this.sorular[this.soruIndex];
}

Test.prototype.tahmin = function(cevap) {
    if(this.getSoruIndex().isCorrectAnswer(cevap)) {
        this.skor++;
    }

    this.soruIndex++;
}

Test.prototype.gonder = function() {
    return this.soruIndex === this.sorular.length;
}
