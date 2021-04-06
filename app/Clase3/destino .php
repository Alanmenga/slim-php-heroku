<?php

// echo "Array GET: ";
// var_dump($_GET);

// echo "<br/>Array GET: ";
// var_dump($_GET);

//if( isset($_POST[]))
include "usuario.php";
$nuevoUsuario = new Usuario();
$nuevoUsuario -> _usuario = $_POST["usuario"];
$nuevoUsuario -> _clave = $_POST["clave"];

echo usuario::ValidarUsuario($nuevoUsuario);



?>