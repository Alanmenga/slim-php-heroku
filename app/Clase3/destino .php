<?php

// echo "Array GET: ";
// var_dump($_GET);

// echo "<br/>Array GET: ";
// var_dump($_GET);

//if( isset($_POST[]))
include "usuario.php";
$nuevoUsuario = new Usuario();
$nuevoUsuario -> _user = $_POST["usuario"];
$nuevoUsuario -> _pass = $_POST["clave"];

echo usuario::ValidarUsuario($nuevoUsuario);



?>