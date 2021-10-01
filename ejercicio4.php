<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $num = 5;
        $aumen = 1;

        while($aumen <= 10) {
            echo $num, "x", $aumen, "=", ($num*$aumen), "<br>";
            ++$aumen;
        }
    ?>
</body>
</html>