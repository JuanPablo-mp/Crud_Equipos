<?php

$controlador = new controladorPersona();

if (isset($_GET['id'])) {
    $registro=$controlador-> ver ($_GET['id']);
} else {
    header ('Location: index.php');
}

if (isset($_POST['eliminar'])) {
    //echo $_GET['id'];
    $controlador->eliminar($_GET['id']);
    header ('Location: index.php');
}
?>

<form action ="" method="post">
<table border="1">
    <thead>
    <tr>
        <td>Placa</td>
        <td>Marca</td>
        <td>Cuentadante</td>
        <td>Area del cuentadante</td>
        <td>Eliminar</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $registro['placa']; ?></td>
        <td><?php echo $registro['Marca']; ?></td>
        <td><?php echo $registro['cuentadante']; ?></td>
        <td><?php echo $registro['a_cuentadante']; ?></td>
        <td><input type="submit" name="eliminar" value="Eliminar"></td>
    </tr>
    </tbody>
</table>
</form>