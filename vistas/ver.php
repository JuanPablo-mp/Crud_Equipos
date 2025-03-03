<?php
$controlador=new controladorPersona();

if (isset($_GET["id"]))
{
    $registro=$controlador->ver($_GET["id"]);
}
else
{
    header("Location.index.php");
}
?>

<p>Placa : <?php echo $registro["placa"] ?></p>
<p>Marca : <?php echo $registro["Marca"] ?></p>
<p>Cuentadante : <?php echo $registro["cuentadante"] ?></p>
<p>A_cuentadante : <?php echo $registro["a_cuentadante"] ?></p>
