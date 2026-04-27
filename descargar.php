<?php
session_start();

if (!isset($_SESSION['cliente_id'])) {
    die("No autorizado");
}

$carpeta = "../privado/" . $_SESSION['carpeta'];
$file = basename($_GET['file']); // evita hackeo

$ruta = $carpeta . "/" . $file;

if (file_exists($ruta)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . $file . '"');
    readfile($ruta);
} else {
    echo "Archivo no encontrado";
}
?>