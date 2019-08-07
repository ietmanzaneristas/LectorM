// I LOVE GLOBALS.
var buttonEl = document.querySelector('#start');
var commentEl = document.querySelector('#comment');
var wpmEl = document.querySelector('#wpm');
var readerEl = document.querySelector('#reader');
var currentTimer = null;
var tiempoEl = document.querySelector('#currentTimer');

function processWord(word) {
    var tempoWord = word.replace(/[.,;*+-_!?^$)|[\]\\]/g, "");
    //console.log(word + " = " + tempoWord);
    var center = 0; //Math.floor((tempoWord.length - 1) / 2);
    if (tempoWord.length >= 3 && tempoWord.length <= 5) {
        center = 1;
    } else if (tempoWord.length >= 6 && tempoWord.length <= 9) {
        center = 2;
    } else if (tempoWord.length >= 10 && tempoWord.length <= 13) {
        center = 3;
    } else if (tempoWord.length >= 14) {
        center = 4;
    }
    const comienzaConVocal = cadena => [" ", "¡", "¿", "(", "{", "[", '"'].indexOf((cadena || "").toLowerCase().charAt(0)) !== -1;
    if (comienzaConVocal(word)) {
        center++;
        //console.log("word= " + word + " center= " + center);
    };

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
    // console.log("wordEl= " + wordEl);
    var highlight = wordEl.firstElementChild;
    // console.log("highlight= " + highlight);
    var centerOffsetX = (highlight.offsetWidth / 2) + highlight.offsetLeft;
    // console.log("centerOffsetX= " + centerOffsetX);
    //var centerOffsetY = (highlight.offsetHeight / 2) + highlight.offsetTop;
    //console.log("centerOffsetY= " + centerOffsetY);
    wordEl.style.left = ((readerEl.clientWidth / 3) - centerOffsetX) + 'px';
    // console.log("wordEl.style.left= " + wordEl.style.left);
    //wordEl.style.top = ((readerEl.clientHeight / 2) - centerOffsetY) + 'px';
    //console.log("wordEl.style.top= " + wordEl.style.top);
    // console.log("____________________________ ");
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