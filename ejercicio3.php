<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $num = 5;

        switch ($num) {
            case 1:
                echo ("Lunes");
                break;
            case 2:
                echo ("Martes");
                break;
            case 3:
                echo ("Miércoles");
                break;
            case 4:
                echo ("Jueves");
                break;
            case 5:
                echo ("Viernes");
                break;
            case 6:
                echo ("Sábado");
                break;
            case 7:
                echo ("Domindo");
                break;
            default:
                echo ("ESO NO ES UN DÏA DE LA SEMANA");
                break;
        }
    ?>
</body>
</html>