<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php
        $nombre = "";
        $apellidos = "";
        $direccion = "";
        $internet = "";
        $instituto = "";
        $estudios = "";
        $dia = "";
        $preferencia = "";
        $asignatura = [];

        $errorNombre = "";
        $errorApellidos = "";
        $errorDireccion = "";
        $errorInternet = "";
        $errorInstituto = "";
        $errorEstudios = "";
        $errorDia = "";
        $errorAsignatura = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = $_POST["nombre"];
            $nombre = strip_tags($nombre);
            $nombre = stripslashes($nombre);
            $nombre = htmlspecialchars($nombre);
            if (empty($nombre)) {
                $errorNombre = "<b>ERROR EN NOMBRE: El campo nombre debe estar relleno</b><br>";
            }

            $apellidos = $_POST["apellidos"];
            $apellidos = strip_tags($apellidos);
            $apellidos = stripslashes($apellidos);
            $apellidos = htmlspecialchars($apellidos);
            if (empty($apellidos)) {
                $errorApellidos = "<b>ERROR EN APELLIDOS: El campo apellidos debe estar relleno</b><br>";
            }

            $direccion = $_POST["direccion"];
            $direccion = strip_tags($direccion);
            $direccion = stripslashes($direccion);
            $direccion = htmlspecialchars($direccion);
            if (empty($direccion)) {
                $errorDireccion = "<b>ERROR EN DIRECCIÓN: El campo dirección debe estar relleno</b><br>";
            }

            if(isset($_POST["internet"])){
                $internet = $_POST["internet"];
            } else{
                $errorInternet = "<b>ERROR EN PROVINCIA: Debe seleccionar una provincia</b><br>";
            }

            $instituto = $_POST["instituto"];
            if (empty($instituto)) {
                $errorInstituto = "<b>ERROR EN INSTITUTO: El campo instituto debe estar relleno</b><br>";
            } else if (!preg_match("/IES/", $instituto)) {
                $errorInstituto = "<b>ERROR EN INSTITUTO: El campo instituto debe empezar por IES</b><br>";
            }

            $estudios = $_POST["estudios"];
            if (empty($estudios)) {
                $errorEstudios = "<b>ERROR EN ESTUDIOS A ELEGIR: El campo estudios debe estar relleno</b><br>";
            }

            
            if (isset($_POST["dia"])) {
                $dia = $_POST["dia"];
                $dia = strip_tags($dia);
                $dia = stripslashes($dia);
                $dia = htmlspecialchars($dia);
            } else {
                $errorDia = "<b>ERROR EN DÍA: Debe seleccionar un día</b><br>";
            }
            


            if(isset($_POST["asignatura"])){
                $asignatura = $_POST["asignatura"];
            } else {
                $errorAsignatura = "Debes seleccionar mínimo una";
            }

        }
    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST"> <!-- AÑADIR SIEMPRE EL METODO -->
        <fieldset>
            <legend>Formulario de opciones</legend>
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombre;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorNombre;?></span>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" value="<?php echo $apellidos;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorApellidos;?></span>
            </p>
            <p>
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" value="<?php echo $direccion;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorDireccion;?></span>
            </p>
            <p>
                <input type="radio" id="wifi" name="internet" value="wifi" <?php if ($internet == "wifi") echo "checked";?>/>
                <label for="wifi">Wifi</label>
                <input type="radio" id="cable" name="internet" value="cable" <?php if ($internet == "cable") echo "checked";?>/>
                <label for="cable">Cable</label>
                <input type="radio" id="fibra" name="internet" value="fibra" <?php if ($internet == "fibra") echo "checked";?>/>
                <label for="fibra">Fibra</label>
                <span style="color:red"><?php echo "*"; echo $errorInternet;?></span>
            </p>
            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto" value="<?php echo $instituto;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorInstituto;?></span>
            </p>
            <p>
                <label for="estudios">Estudios</label>
                <input type="text" name="estudios" value="<?php echo $estudios;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorEstudios;?></span>
            </p>
            <strong></strong>
            <select name="dia" multiple>
                <option value="<?php echo $dia;?>">Lunes</option>
                <option value="<?php echo $dia;?>">Martes</option>
                <option value="<?php echo $dia;?>">Miercoles</option>
                <option value="<?php echo $dia;?>">Jueves</option>
                <option value="<?php echo $dia;?>">Viernes</option>
            </select>
            <span style="color:red"><?php echo "*"; echo $errorDia;?></span>

        </fieldset>
        <fieldset>
            <legend>Preferencias</legend>
            <p>
                <input type="checkbox" id="historia" name="asignatura[]" value="historia"<?php if (in_array("historia",$asignatura)) echo "checked"?>/>
                <label for="historia">Historia</label>
                <input type="checkbox" id="geografia" name="asignatura[]" value="geografia"<?php if (in_array("geografia",$asignatura)) echo "checked"?>/>
                <label for="geografia">Geografía</label>
                <input type="checkbox" id="lengua" name="asignatura[]" value="lengua"<?php if (in_array("lengua",$asignatura)) echo "checked"?>/>
                <label for="lengua">Lengua</label>
                <input type="checkbox" id="mates" name="asignatura[]" value="mates"<?php if (in_array("mates",$asignatura)) echo "checked"?>/>
                <label for="mates">Matemáticas</label>
                <span style="color:red"><?php echo "*"; echo $errorAsignatura;?></span>
            </p>
            <p>
                <textarea name="preferencia" placeholder="Inserte aqui el texto" value="<?php echo $preferencia;?>"></textarea>
            </p>
            

        </fieldset>
        <input type="submit" name="enviar" value="Aceptar"/>
        <input type="reset" name="cancelar" value="Cancelar"/>
    </form>
</body>
</html>