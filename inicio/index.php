<?php
include '../extend/header.php';
?>

<div class="android-be-together-section mdl-typography--text-center">
  <div class="logo-font android-slogan">
    Leemos para saber que no estamos solos.
  </div>
  <div class="logo-font android-sub-slogan">
    -William Nicholson.
  </div>
</div>
<!-- ..::LOGIN::.. -->
<div class="mdl-grid ">
  <div class="mdl-layout-spacer"></div>
  <div id="login" class="mdl-shadow--8dp mdl-typography--text-center mdl-cell mdl-cell--6-col">
    <div class="mdl-typography--display-1-color-contrast">
      Iniciar sesión
    </div>
    <!-- Simple Textfield -->
    <form action="../login/login.php" class="mdl-shadow--8dp">

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="user" autofocus>
        <label class="mdl-textfield__label" for="sample3">Usuario</label>
        <span class="mdl-textfield__error">Usuario invalido</span>
      </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="password" id="pass">
        <label class="mdl-textfield__label" for="sample2">Contraseña</label>
        <span class="mdl-textfield__error">Contraseña invalida</span>
      </div>
      <!-- FAB button with ripple -->
      <div id="next">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
          Entrar
          <i class="material-icons">arrow_forward</i>
        </button>
      </div>
      <br>
    </form>
  </div>
  <div class="mdl-layout-spacer">
  </div>
</div>
<!-- ..::FIN LOGIN::.. -->

<!-- LECTORES DEL MES -->
<div class="android-more-section mdl-shadow--6dp">
  <div class="android-section-title mdl-typography--display-1-color-contrast">
    Lectores destacados
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
<!-- FIN LECTORES DEL MES -->

<?php
include '../extend/footer.php';
include '../extend/scripts.php';
?>

</body>

</html>