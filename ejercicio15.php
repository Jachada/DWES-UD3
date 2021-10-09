<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Id</th>
        </tr>
    <?php
        $productos = [];
        $productos[] = array("Nombre" => "Patatas", "Precio" => 5.99, "Stock" => 300, "Identificador" => 1 );
        $productos[] = array("Nombre" => "Salchichas", "Precio" => 2.99, "Stock" => 150, "Identificador" => 2 );
        $productos[] = array("Nombre" => "Chocolate", "Precio" => 1.99, "Stock" => 3000, "Identificador" => 3 );

        print_r($productos);

        foreach ($productos as $valor) {
            echo "<tr>";
                echo "<td>";
                echo $valor["Nombre"];
                echo "</td>";
                echo "<td>";
                echo $valor["Precio"];
                echo "</td>";
                echo "<td>";
                echo $valor["Stock"];
                echo "</td>";
                echo "<td>";
                echo $valor["Identificador"];
                echo "</td>";
            echo "</tr>"; 
        }
    ?>
    </table>
</body>
</html>