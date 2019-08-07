<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include '../conexion/conexion.php';

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
echo '<pre>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre_usu = $con->real_escape_string(htmlentities($_POST['nombre_usu']));
  $apellido_usu = $con->real_escape_string(htmlentities($_POST['apellido_usu']));
  $fechaNac_usu = $con->real_escape_string(htmlentities($_POST['fechaNac_usu']));
  $email_usu = $con->real_escape_string(htmlentities($_POST['email_usu']));
  $celular_usu = $con->real_escape_string(htmlentities($_POST['celular_usu']));
  $pass_usu = $con->real_escape_string(htmlentities($_POST['pass_usu']));
  $pass_usu = sha1($pass_usu);
  $sede_usu = $con->real_escape_string(htmlentities($_POST['sede_usu']));
  $curso_usu = $con->real_escape_string(htmlentities($_POST['curso_usu']));
  // $foto_usu = $con->real_escape_string(htmlentities($_POST['foto_usu']));
  $extension = '';
  $ruta = 'fotoPerfil';
  $archivo = $_FILES['foto_usu']['tmp_name'];
  $nombreArchivo = $_FILES['foto_usu']['name'];
  $info = pathinfo($nombreArchivo);
  if ($archivo != '') {
    $extension = $info['extension'];
    $find = array("@", ".", " ");
    $onlyName = str_replace($find, "", $email_usu);
    move_uploaded_file($archivo, 'fotoPerfil/' . $onlyName . '.' . $extension);
    $ruta = $ruta . "/" . $onlyName . '.' . $extension;
    // echo $ruta;
  } else {
    $ruta = "fotoPerfil/perfil.png";
  }

  $date = date("Y-m-d H:i:s");

  //                                          (`id_usu`, `nombre_usu`, `apellido_usu`, `celular_usu`, `fechaNac_usu`, `email_usu`, `pass_usu`, `sede_usu`, `curso_usu`, `nivel_usu`, `ultimasesion_usu`, `bloqueo_usu`, `foto_usu`) VALUES (NULL, 'a', 'a', '1', '2019-07-01', 'a@a.com', '12345678', 'a', 'a', '2', '2019-07-21 00:00:00', '0', 'fotoPerfil/charlesrctgmailcom.jpg');");
  $ins = $con->query("INSERT INTO `users` VALUES('', '$nombre_usu', '$apellido_usu', '$celular_usu', '$fechaNac_usu', '$email_usu', '$pass_usu', '$sede_usu', '$curso_usu', '2', '$date', '1', '$ruta')");

  // print_r($ins);

  if ($ins) {
    // echo "New record created successfully";
    header('location:../extend/alertas.php?msj=El usuario ha sido registrado.&c=inicio&p=in&t=success');
  } else {
    echo "Error: " . $ins . "<br>" . mysqli_error($con);
    header('location:../extend/alertas.php?msj=El usuario no pudo ser registrado.&c=us&p=in&t=error');
  }

  $con->close();
} else {
  header('location:../extend/alertas.php?msj=Utiliza el formulario.&c=us&p=in&t=error');
}
