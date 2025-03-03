<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Gestion De Equipos</h2>

    <Form action="" method="post">
        <label>placa</label><br>
        <input type="text" name="placa" required><br><br>
        <label>marca</label><br>
        <input type="text" name="Marca" required><br><br>
        <label>cuentadante</label><br>
        <input type="text" name="cuentadante" required><br><br>
        <label>a_cuentadante</label><br>
        <input type="text" name="a_cuentadante" required><br><br>
        <input type="submit" name="enviar" value="Registrar">
        
</Form>

<?php
$controlador=new ControladorPersona();
if (isset($_POST['enviar'])) {
    $res=$controlador->crear($_POST["placa"],$_POST["Marca"],$_POST["cuentadante"],$_POST["a_cuentadante"]);
}
if ($res) {
    echo "Registro exitoso";
} else {
    echo "Fallo en el registro";
}
?>
</body>
</html>