<?php
session_start();

if (!isset($_SESSION['cliente_id'])) {
    header("Location: clientes.php");
    exit();
}

$carpeta = "" . $_SESSION['carpeta'];
$archivo = $_GET['file'];
$ruta = $carpeta . "/" . $archivo;
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ver PDF</title>
</head>
<style>
html, body {
    height: 95%;
    margin: 0;
}
</style>
<!-- <body style="margin:0;"> -->

<div style="padding:10px; background:#111; color:white; text-align:center;">
    <a href="javascript:history.back()" style="color:#ff7a00; text-decoration:none; margin-right:80px;">
        Regresar
    </a>

    <a href="<?php echo $ruta; ?>" download style="color:#ff7a00; text-decoration:none;">
        Descargar PDF
    </a>
</div>

<iframe src="<?php echo $ruta; ?>" width="100%" height="100%"></iframe>

</body>
</html>