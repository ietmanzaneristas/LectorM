<?php
include '../extend/headerLogin.php';
?>
<!-- ..::Spritz::.. -->
<div class="mdl-grid ">
  <div class="mdl-layout-spacer"></div>
  <div id="login" class="mdl-shadow--8dp mdl-typography--text-center mdl-cell mdl-cell--6-col">
    <div class="mdl-typography--display-1-color-contrast">
      Seleccionar una lectura
    </div>
    <p id="comment">Esto; es; muy... ¿interesante? (y ¡como! se ha señalado en otros comentarios, no es exactamente una
      idea nueva). Sin embargo, creo que su aplicación adecuada está en una herramienta para practicar la lectura, no para
      leer realmente las pruebas.
      Una cosa importante que este enfoque pierde es la no linealidad inherente del texto. Si me olvido de un hecho y
      quiero retroceder un poco, o quiero hacer una pausa por un momento y pensar en algo, puedo (al leer) sin
      siquiera pensar en ello. Incluso si este enfoque es más rápido en general, hace que leer sea más como escuchar
      audio o mirar un video; Es un gran dolor rebobinar o hacer una pausa.
      En segundo lugar, esto es en realidad más lento que la lectura a velocidad real o el skimming porque te obliga a
      leer cada palabra. Los lectores verdaderamente hábiles a menudo leerán material a un nivel muy superficial, solo
      se sumergirán y leerán consistentemente cuando se encuentren con un concepto novedoso. Esencialmente, pueden
      usar la compresión semántica para aumentar su velocidad de lectura con solo molestarse en leer lo que consideran
      relevante. Esto funciona en todos los niveles, desde la página hasta el capítulo, el párrafo y la oración. Por
      supuesto, no es perfecto, pero siempre es posible realizar una copia de seguridad si se descubre que se ha
      perdido información crucial.
      Finalmente, aunque esta herramienta es realmente excelente para romper el hábito de subvocalización que
      dificulta la mayoría de los lectores lentos, una vez que aprendes a leer sin subvocalizarlo, se vuelve un poco
      redundante. Por ejemplo, mirando a Spritz, aumenté la velocidad a 500. Se sentía bastante bien, como si
      estuviera leyendo rápido. Luego fui y tomé una prueba de velocidad de lectura tradicional y registré a 700
      palabras por minuto, con un 95% de comprensión. Así que no estoy seguro de que mi velocidad general sea mejor
      con Spritz.
      Dicho esto, probablemente seguiré volviendo a esto o tecnologías como esta, ahora que estoy al tanto de ellas.
      Parecen ser una muy buena manera de forzarse en la mentalidad de lectura veloz. Tengo la sensación de que hacer
      esto durante 60 segundos antes de una sesión de lectura normal mejoraría sustancialmente la velocidad de
      lectura.
    </p>

    <div id="reader">
      <div id="word"></div>
    </div>
    <div id="">
      <div>
        <input type="number" value="250" id="wpm">
        <button id="start">Empezar</button>
      </div>
      <div id="currentTimer">
        tiempo
      </div>
    </div>
  </div>
  <div class="mdl-layout-spacer">
  </div>
</div>
<!-- ..::FIN Spritz::.. -->

<!-- MIS LECTURAS -->
<div class="android-more-section mdl-shadow--6dp">
  <div class="android-section-title mdl-typography--display-1-color-contrast">
    Mis lecturas
  </div>
  <div class="android-card-container mdl-grid">
    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
      <div class="mdl-card__media">
        <img class="redondo" src="../img/more-from-1.png">
      </div>
      <div class="mdl-card__title">
        <h4 class="mdl-card__title-text">Get going on Android</h4>
      </div>
      <div class="mdl-card__supporting-text">
        <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android
          quick and easy</span>
      </div>
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
      <div class="mdl-card__media">
        <img class="redondo" src="../img/more-from-4.png">
      </div>
      <div class="mdl-card__title">
        <h4 class="mdl-card__title-text">Create your own Android character</h4>
      </div>
      <div class="mdl-card__supporting-text">
        <span class="mdl-typography--font-light mdl-typography--subhead">Turn the little green Android mascot into
          you, your friends, anyone!</span>
      </div>
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
      <div class="mdl-card__media">
        <img class="redondo" src="../img/more-from-2.png">
      </div>
      <div class="mdl-card__title">
        <h4 class="mdl-card__title-text">Get a clean customisable home screen</h4>
      </div>
      <div class="mdl-card__supporting-text">
        <span class="mdl-typography--font-light mdl-typography--subhead">A clean, simple, customisable home screen
          that comes with the power of Google Now: Traffic alerts.</span>
      </div>
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
      <div class="mdl-card__media">
        <img class="redondo" src="../img/more-from-3.png">
      </div>
      <div class="mdl-card__title">
        <h4 class="mdl-card__title-text">Millions to choose from</h4>
      </div>
      <div class="mdl-card__supporting-text">
        <span class="mdl-typography--font-light mdl-typography--subhead">Hail a taxi, find a recipe, run through a
          temple – Google Play has all the apps and games that let you make your Android device uniquely
          yours.</span>
      </div>
    </div>

  </div>
</div>
<!-- FIN MIS LECTURAS -->
<?php
include '../extend/footer.php';
include '../extend/scripts.php';
?>
<script src="../js/spritzer.js"></script>
</body>

</html>