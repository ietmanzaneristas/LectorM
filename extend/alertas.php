<?php
include '../conexion/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Alertas</title>
</head>

<body>

  <?php

  $mensaje = htmlentities($_GET['msj']);
  $carpeta = htmlentities($_GET['c']);
  $pagina = htmlentities($_GET['p']);
  $tipo = htmlentities($_GET['t']);

  switch ($carpeta) {
    case 'us':
      $carpeta = '../usuarios/';
      break;
    case 'inicio':
      $carpeta = '../inicio/';
      break;
    default:
      $carpeta = '../inicio/';
      break;
  }

  switch ($pagina) {
    case 'in':
      $pagina = ''; //index.php
      break;
    default:
      $pagina = ''; //index.php
      break;
  }

  $dir = $carpeta . $pagina;
  if ($tipo == "error") {
    $titulo = "Oppss...";
  } else {
    $titulo = "Buen trabajo:";
  }

  ?>

  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/sweetalert2.all.min.js"></script>

  <script>
    Swal.fire({
      title: '<?= $titulo ?>',
      text: '<?= $mensaje ?>',
      type: '<?= $tipo ?>',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Ok'
    }).then((result) => {
      location.href = '<?= $dir ?>';
    });

    $(document).click(function() {
      location.href = '<?= $dir ?>';
    });

    $(document).keyup(function(e) {
      if (e.which == 27) {
        location.href = '<?= $dir ?>';
      }
    });
  </script>
</body>

</html>