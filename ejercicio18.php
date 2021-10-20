<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php
        $poblacion = "";
        $postal = "";
        $provincia = "";

        $errorPoblacion = "";
        $errorPostal = "";
        $errorProvincia = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $poblacion = $_POST["poblacion"];
            $poblacion = strip_tags($poblacion);
            $poblacion = stripslashes($poblacion);
            $poblacion = htmlspecialchars($poblacion);
            if (empty($poblacion)) {
                $errorPoblacion = "<b>ERROR EN POBLACIÓN: El campo poblacion debe estar relleno</b><br>";
            } else if (!preg_match("/^[a-z]+$/i", $poblacion)) {
                $errorPoblacion = "<b>ERROR EN POBLACIÓN: El campo población solo puede contener letras</b><br>";
            }

            $postal = $_POST["postal"];
            $postal = strip_tags($postal);
            $postal = stripslashes($postal);
            $postal = htmlspecialchars($postal);
            if (empty($postal)) {
                $errorPostal = "<b>ERROR EN CÓDIGO POSTAL: El campo código postal debe estar relleno</b><br>";
            } else if (!preg_match("/^[0-9]+$/", $postal)) {
                $errorPostal = "<b>ERROR EN CÓDIGO POSTAL: El campo código postal solo puede contener números</b><br>";
            }

            if(isset($_POST["provincia"])){
                $provincia = $_POST["provincia"];

            } else{
                $errorProvincia = "<b>ERROR EN PROVINCIA: Debe seleccionar una provincia</b><br>";
            }

            $municipio = $_POST["municipio"];
            $municipio = strip_tags($municipio);
            $municipio = stripslashes($municipio);
            $municipio = htmlspecialchars($municipio);

            if ($errorPoblacion == "" && $errorPostal == "" && $errorProvincia == "") {
                header("location: correcto.php");
            }
            

        }
    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST"> <!-- AÑADIR SIEMPRE EL METODO -->
        <fieldset>
            <legend>Formulario de opciones</legend>
            <p>
                <label for="poblacion">Población</label>
                <input type="text" name="poblacion" value="<?php echo $poblacion;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorPoblacion;?></span>
            </p>
            <p>
                <label for="postal">Código Postal</label>
                <input type="text" name="postal" value="<?php echo $postal;?>"/>
                <span style="color:red"><?php echo "*"; echo $errorPostal;?></span>
            </p>
            <p>
                <input type="radio" id="sevilla" name="provincia" value="sevilla" <?php if ($provincia == "sevilla") echo "checked";?>/>
                <label for="sevilla">Sevilla</label>
                <input type="radio" id="cordoba" name="provincia" value="cordoba" <?php if ($provincia == "cordoba") echo "checked";?>/>
                <label for="cordoba">Cordoba</label>
                <input type="radio" id="huelva" name="provincia" value="huelva" <?php if ($provincia == "huelva") echo "checked";?>/>
                <label for="huelva">Huelva</label>
                <input type="radio" id="cadiz" name="provincia" value="cadiz" <?php if ($provincia == "cadiz") echo "checked";?>/>
                <label for="cadiz">Cadiz</label>
                <input type="radio" id="almeria" name="provincia" value="almeria" <?php if ($provincia == "almeria") echo "checked";?>/>
                <label for="almeria">Almeria</label>
                <input type="radio" id="malaga" name="provincia" value="malaga" <?php if ($provincia == "malaga") echo "checked";?>/>
                <label for="malaga">Malaga</label>
                <input type="radio" id="granada" name="provincia" value="granada" <?php if ($provincia == "granada") echo "checked";?>/>
                <label for="granada">Granada</label>
                <input type="radio" id="jaen" name="provincia" value="jaen" <?php if ($provincia == "jaen") echo "checked";?>/>
                <label for="jaen">Jaen</label>
                <span style="color:red"><?php echo "*"; echo $errorProvincia;?></span>
            </p>
            <p>
                <textarea name="municipio" placeholder="Inserte aqui la descripcion del municipio" value="<?php echo $municipio;?>"></textarea>
            </p>
        </fieldset>
        <input type="submit" name="enviar" value="Aceptar"/>
        <input type="reset" name="cancelar" value="Cancelar"/>
    </form>
</body>
</html>