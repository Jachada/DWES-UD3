<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Elevado a</td>
            <td>Resultado</td>
        </tr>
        <?php
            $num = 2;
            $limit = 10;
            for ($i=0; $i <= $limit; $i++) { 
                if ($i == 4) {
                    continue;
                }

                echo "<tr>";
                echo "<td>$i</td>";
                printf("<td>%d</td>", pow($num,$i));
                echo "</tr>";
                
                if ($i == 5) {
                    break;
                }
            }
        ?>
    </table>
</body>
</html>