<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//print_r($_POST);

if ($usuario === '' || $pass === '') {
    echo json_encode("Llena todos los campos");
}else {
    echo json_encode("Correcto usuario = $usuario Pass = $pass");
}
?>