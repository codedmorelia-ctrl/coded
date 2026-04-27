<?php
session_start();
$conn = new mysqli("localhost", "root", "", "basedatoscoded");

$numero = $_POST['numero_acceso'] ?? '';

$stmt = $conn->prepare("SELECT * FROM clientes WHERE numero_acceso = ?");
$stmt->bind_param("s", $numero);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $cliente = $result->fetch_assoc();
    $_SESSION['cliente_id'] = $cliente['id'];
    $_SESSION['carpeta'] = $cliente['carpeta'];
    header("Location: panel.php");
} else {
    header("Location: clientes.php?error=1");
    exit();
}
?>