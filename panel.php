<?php
session_start();

if (!isset($_SESSION['cliente_id'])) {
    header("Location: clientes.php");
    exit();
}

$carpeta = "" . $_SESSION['carpeta'];
$archivos = scandir($carpeta);

echo "
<style>
body{
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background:#f5f7fa;
}

.contenedor{
    display:flex;
    flex-wrap:wrap;
    gap:25px;
    padding:40px;
    justify-content:flex-start;
}

.card{
    width:140px;
    text-align:center;
    transition: all 0.25s ease;
}

.card a{
    text-decoration:none;
    color:#333;
}

.icono{
    width:120px;
    height:150px;
    background:white;
    border-radius:12px;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
    border:1px solid #e0e0e0;
    overflow:hidden; /* CLAVE */
}

.icono img{
    width:60px;
}

.card p{
    margin-top:10px;
    font-size:13px;
    color:#555;
    word-break:break-word;
}

/* Hover elegante */
.card:hover{
    transform: translateY(-5px);
}

.card:hover .icono{
    box-shadow:0 8px 20px rgba(0,0,0,0.15);
    border-color:#d0d0d0;
}
</style>

<div class='contenedor'>
";

foreach ($archivos as $archivo) {
    if ($archivo != "." && $archivo != ".." && pathinfo($archivo, PATHINFO_EXTENSION) == "pdf") {
        
echo "
<div class='card'>
    <a href='ver.php?file=$archivo'>
        <div class='icono' style='overflow:hidden; padding:0;'>
            <iframe 
                src='$carpeta/$archivo#toolbar=0&navpanes=0&scrollbar=0' 
                style='width:100%; height:100%; border:none; pointer-events:none;'>
            </iframe>
        </div>
        <p>$archivo</p>
    </a>
</div>
";
    }
}

echo "</div>";
?>