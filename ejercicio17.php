<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        $errorUsuario = "*";
        $errorClave = "*";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = strip_tags($_POST["usuario"]);
            $usuario = stripslashes($_POST["usuario"]);
            $usuario = htmlspecialchars($_POST["usuario"]);
            $contrasenya = $_POST["contrasenya"];
            if (empty($usuario)) {
                $errorUsuario = "El usuario debe estar rellenado<br>";
            }
            if (empty($contrasenya)) {
                $errorClave = "La contraseña debe estar rellena<br>";
            }
            if (!preg_match("/[A-Z]\w{8,}/", $usuario)) {
                $errorUsuario =  "El usuario debe tener más de 8 caracteres y uno de ellos en mayusculas<br>";
            }
            if (!preg_match("/[A-Z][a-z]{15}[0-9]/", $contrasenya)) {
                $errorClave = "La contraseña debe empezar por mayúscula termine por número y tenga 15 letras minúsculas en medio.<br>";
            }

            /* CON GET
            $usuario = $_GET["usuario"];
            $contrasenya = $_GET["contrasenya"];
            */

            echo "El usuario $usuario tiene la contraseña $contrasenya";
        }
    ?>
    <h1>Formulario Actividad Aula</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST"> <!-- AÑADIR SIEMPRE EL METODO -->
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"/>
            <span style="color:red"><?php echo $errorUsuario; ?></span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya"/>
            <span style="color:red"><?php echo $errorClave; ?></span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>
</body>
</html>
