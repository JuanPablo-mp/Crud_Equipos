<?php

$controlador = new controladorPersona();

if (isset($_GET["id"]))
    $registro=$controlador->ver($_GET['id']);
else
{
    header('Location.index.php');
}

if (isset($_POST['editar'])) {
    $controlador->editar($_POST["placa"],$_POST["Marca"],$_POST["cuentadante"],$_POST["a_cuentadante"]);
    header ('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
    <h1> estas en la seccion de editar</h1>
    <form action="" method= "post">
        <label>placa</label><br>
        <input type="text" name="placa" value="<?php echo $registro['placa']; ?>" required><br><br>
        <label>Marca</label><br>
        <input type="text" name="Marca" value="<?php echo $registro['Marca']; ?>" required><br><br>
        <label>cuentadante</label><br>
        <input type="text" name="cuentadante" value="<?php echo $registro['cuentadante']; ?>" required><br><br>
        <label>a_cuentadante</label><br>
        <input type="text" name="a_cuentadante" value="<?php echo $registro['a_cuentadante']; ?>" required><br><br>
        <input type="submit" name="editar" value="Actualizar">
    </form>
</body>
</html>