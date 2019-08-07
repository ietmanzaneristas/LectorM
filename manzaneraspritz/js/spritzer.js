// I LOVE GLOBALS.
var buttonEl = document.querySelector('#start');
var commentEl = document.querySelector('#comment');
var wpmEl = document.querySelector('#wpm');
var readerEl = document.querySelector('#reader');
var currentTimer = null;
var tiempoEl = document.querySelector('#currentTimer');

function processWord(word) {
    var tempoWord = word.replace(/[.,;*+!?^${}|[\]\\]/g, "");
    //console.log(word + " = " + tempoWord);
    var center = Math.floor((tempoWord.length - 1) / 2);
    //console.log(tempoWord + " largo= " + tempoWord.length + " centro= " + center);
    var letters = word.split('');
    var result = [];
    return letters.map(function (letter, idx) {
        if (idx === center) {
            return '<span class="highlight">' + letter + '</span>';
        }
        return letter;
    }).join('');
}

function positionWord() {
    var wordEl = readerEl.firstElementChild;
    var highlight = wordEl.firstElementChild;
    var centerOffsetX = (highlight.offsetWidth / 2) + highlight.offsetLeft;
    var centerOffsetY = (highlight.offsetHeight / 2) + highlight.offsetTop;
    wordEl.style.left = ((readerEl.clientWidth / 2) - centerOffsetX) + 'px';
    wordEl.style.top = ((readerEl.clientHeight / 2) - centerOffsetY) + 'px';
}

buttonEl.addEventListener('click', function () {
    var inicioTime = Date.now();
    var words = commentEl.textContent.split(/\s+/).map(processWord);
    //console.log("words = " + words);
    var currentWord = 0;
    var delay = 60000 / parseInt(wpmEl.value, 10);

    clearTimeout(currentTimer);

    var displayNextWord = function () {
        var word = words[currentWord++];
        var finTime = Date.now();
        var transcurso = finTime - inicioTime; // tiempo en milisegundos
        // WTB> nlp.js...
        var hasPause = /^\(|[;,\.\)]$/.test(word);

        // XSS?! :(.
        readerEl.firstElementChild.innerHTML = word;
        if (currentWord !== words.length) {
            currentTimer = setTimeout(displayNextWord, delay * (hasPause ? 2 : 1));
            positionWord();
        } else {
            tiempoEl.innerHTML = "tiempo = " + transcurso / 1000 + " palabra = " + currentWord + " - " + words.length + " ... " + inicioTime + " ... " + finTime;
            //console.log("termina");
        }
    };

    displayNextWord();
});