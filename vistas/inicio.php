<?php
    $controlador = new controladorPersona();
    $resultado = $controlador->index();
    
?>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            padding: 4px 8px;
            margin: 0 5px;
            border-radius: 4px;
            background-color: #f1f1f1;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #ddd;
        }

    </style>
</head>

<body>

    <h1>Tabla</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Cuentadante</th>
            <th>A_Cuentadante</th>
            <th>Acciones</th>
        </tr>
        <tbody>

        <?php
            while($fila=mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>" .$fila["id"] . "</td>";
                echo "<td>" .$fila["placa"] . "</td>";
                echo "<td>" .$fila["Marca"] . "</td>";
                echo "<td>" .$fila["cuentadante"] . "</td>";
                echo "<td>" .$fila["a_cuentadante"] . "</td>";
                echo "<td><a href='?cargar=ver&id=".$fila["id"]."'>ver</a> <a href='?cargar=crear&id=".$fila["id"]."'>crear</a> <a href='?cargar=eliminar&id=".$fila["id"]."'>eliminar</a></td>";
                echo "</tr>";
            }
        ?>

        </tbody>
    </table>

</body>



    <?php

    ?>
</body>
</html>