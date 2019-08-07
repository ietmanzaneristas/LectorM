<?php
include '../conexion/conexion.php';
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

  <link href="../img/favicon.ico" rel="icon" type="image/x-icon">
  <title>IETFMH Lector</title>

  <!-- Page styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium,300,400,500,700&amp;lang=es">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="../css/material.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/spritzer.css">
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
      <div class="mdl-layout__header-row">
        <span class="android-title mdl-layout-title">
          <div class="logo-font">
            <img src="../img/logomini.png">
            LectorM
          </div>
        </span>
        <!-- Add spacer, to align navigation to the right in desktop -->
        <div class="android-header-spacer mdl-layout-spacer"></div>
        <span class="android-mobile-title mdl-layout-title">
          <div class="logo-font">
            <img src="../img/logomini.png">
            LectorM
          </div>
        </span>
      </div>
    </div>

    <div class="android-drawer mdl-layout__drawer">
      <span class="mdl-layout-title">
        <img class="android-logo-image" src="../img/android-logo-white.png">
      </span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Phones</a>
        <a class="mdl-navigation__link" href="">Tablets</a>
        <a class="mdl-navigation__link" href="">Wear</a>
        <a class="mdl-navigation__link" href="">TV</a>
        <a class="mdl-navigation__link" href="">Auto</a>
        <a class="mdl-navigation__link" href="">One</a>
        <a class="mdl-navigation__link" href="">Play</a>
        <div class="android-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">Versions</span>
        <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
        <a class="mdl-navigation__link" href="">KitKat 4.4</a>
        <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
        <a class="mdl-navigation__link" href="">Android history</a>
        <div class="android-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">Resources</span>
        <a class="mdl-navigation__link" href="">Official blog</a>
        <a class="mdl-navigation__link" href="">Android on Google+</a>
        <a class="mdl-navigation__link" href="">Android on Twitter</a>
        <div class="android-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">For developers</span>
        <a class="mdl-navigation__link" href="">App developer resources</a>
        <a class="mdl-navigation__link" href="">Android Open Source Project</a>
        <a class="mdl-navigation__link" href="">Android SDK</a>
      </nav>
    </div>
    <div class="android-content mdl-layout__content">
      <a name="top"></a>