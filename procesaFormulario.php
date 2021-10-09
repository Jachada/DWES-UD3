<?php
    $usuario = strip_tags($_POST["usuario"]);
    $usuario = stripslashes($_POST["usuario"]);
    $usuario = htmlspecialchars($_POST["usuario"]);
    $contrasenya = $_POST["contrasenya"];
    if (empty($usuario)) {
        echo "El usuario debe estar rellenado<br>";
    }
    if (empty($contrasenya)) {
        echo "La contraseña debe estar rellena<br>";
    }
    if (!preg_match("/[A-Z]\w{8,}/", $usuario)) {
        echo "El usuario debe tener más de 8 caracteres y uno de ellos en mayusculas<br>";
    }
    if (!preg_match("/[A-Z][a-z]{15}[0-9]/", $contrasenya)) {
        echo "La contraseña debe empezar por mayúscula termine por número y tenga 15 letras minúsculas en medio.<br>";
    }

    /* CON GET
    $usuario = $_GET["usuario"];
    $contrasenya = $_GET["contrasenya"];
    */

    echo "El usuario $usuario tiene la contraseña $contrasenya";
?>