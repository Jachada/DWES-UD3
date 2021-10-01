<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $num1 = 5;
        $num2 = 10;
        $num3 = 15;
        
        if (($num1 > $num2) && ($num1 > $num3)) {
            echo("El número mayor es $num1");
        } elseif (($num2 > $num1) && ($num2 > $num3)) {
            echo("El número mayor es $num2");
        } else {
            echo("El número mayor es $num3");
        }
    ?>
</body>
</html>