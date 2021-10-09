<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <table border="1">
        <?php
            $diaNacimiento = 22;
            $mesNacimiento = 9;
            $anioNacimiento = 1999;
            $fecha = $diaNacimiento + $mesNacimiento + $anioNacimiento;
            $numMagico = 0;

            do {
                if ($fecha == 0) { // SI UNA VEZ REALIZADO SIGUE TENIENDO MÁS DE DOS DÍGITOS
                    $fecha = $numMagico;
                    $numMagico = 0;
                }
                $numMagico += $fecha % 10; // DA EL MÓDULO DE 10 (ÚLTIMO DÍGITO)
                $fecha = $fecha / 10; // ELIMINAR EL ÚLTIMO NÚMERO
            
            } while ($fecha >= 1 || $numMagico > 9);
            echo $numMagico;
    
            
        ?>
    </table>
    
</body>
</html>