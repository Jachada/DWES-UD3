<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $diaNacimiento = 22;
        $mesNacimiento = 9;
        $anioNacimiento = 1999;

        if (((date("Y") - $anioNacimiento) >= 18) || ( ((date("Y") - $anioNacimiento) == 17) && (date("m") > $mesNacimiento)) || (((date("Y") - $anioNacimiento) == 17) && (date("m") == $mesNacimiento) && (date("d") >= $diaNacimiento))) {
            if (((date("Y") - $anioNacimiento) >= 65) || ( ((date("Y") - $anioNacimiento) == 64) && (date("m") > $mesNacimiento)) || (((date("Y") - $anioNacimiento) == 64) && (date("m") == $mesNacimiento) && (date("d") >= $diaNacimiento))) {
                echo "Eres muy viejo para entrar :D";
            } else {
                echo "Puedas pasar";
            }
            
        } elseif ((date("Y") - $anioNacimiento) < 18) {
            echo "NO PUEDES PASAR";
        } else {
            echo "Esto no funciona";
        }
        
    ?>
</body>
</html>