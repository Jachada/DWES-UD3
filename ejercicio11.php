<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <table border="1">
        <?php
            $num = 1;
            for ($i=1; $i <= 10; $i++) { 
                if ($i % 2 == 0) {
                    echo "<tr style=\"background-color: green;\">";
                    for ($o=1; $o <= 10; $o++) {
                        echo "<td>", $num++;
                        echo "</td>";
                    }
                    echo "</tr>";
                } else {
                    echo "<tr>";
                    for ($o=1; $o <= 10; $o++) {
                        echo "<td>", $num++;
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                
            }
        ?>
    </table>
    
</body>
</html>