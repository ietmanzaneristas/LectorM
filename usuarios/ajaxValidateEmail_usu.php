<?php
include '../conexion/conexion.php';
$email_usu = $con->real_escape_string($_POST['email_usu']);
if (!filter_var($email_usu, FILTER_VALIDATE_EMAIL)) {
  //El e-mail no cumple con el formato
  //echo 'El e-mail no cumple con el formato';
  exit();
}
$sel = $con->query("SELECT email_usu FROM users WHERE email_usu = '$email_usu' ");
$row = mysqli_num_rows($sel);
if ($row !== 0) {
  echo "<span>El e-mail ya existe</span>";
} else {
  // echo  'el usuario esta disponible';
}
$con->close();
