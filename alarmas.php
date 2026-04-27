<?php
$pdfPath = "catalogos/2026/alarmas.pdf";

if (!file_exists($pdfPath)) {
    die("No se encontró el catálogo.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Catálogo Alarmas</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

<style>
body {
    margin: 0;
    display: flex;
    height: 100vh;
    font-family: Arial, sans-serif;
    background: #111827;
}

/* Sidebar */
#sidebar {
    width: 90px;
    background: #020617;
    overflow-y: auto;
    padding: 5px;
}

/* Thumbnails */
.thumb {
    width: 100%;
    margin-bottom: 8px;
    cursor: pointer;
    border-radius: 4px;
}

/* NUEVO: contenedor de miniatura */
.thumb-container{
    text-align:center;
    margin-bottom:10px;
}

/* NUEVO: título debajo de miniatura */
.thumb-title{
    font-size:10px;
    color:#cbd5f5;
    margin-top:2px;
    line-height:1.2;
}

/* Main */
#main {
    flex: 1;
    display: flex;
    flex-direction: column;
}

/* Toolbar */
#toolbar {
    background: #020617;
    padding: 8px;
    text-align: center;
}

button {
    padding: 6px 10px;
    margin: 2px;
    border: none;
    background: #2563eb;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
}

/* Viewer */
#viewer {
    flex: 1;
    overflow: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Canvas */
canvas {
    max-width: 100%;
}
</style>
</head>

<body>

<div id="sidebar"></div>

<div id="main">
    <div id="toolbar">
        <button onclick="prev()">⏪</button>
        <button onclick="next()">⏩</button>
        <button onclick="zoomIn()">➕</button>
        <button onclick="zoomOut()">➖</button>
    </div>

    <div id="viewer">
        <canvas id="pdf"></canvas>
    </div>
</div>

<script>
const url = "<?php echo $pdfPath; ?>?v=<?php echo time(); ?>";

let pdfDoc = null,
    pageNum = 1,
    scale = 1.2,
    canvas = document.getElementById("pdf"),
    ctx = canvas.getContext("2d");

pdfjsLib.getDocument(url).promise.then(pdf => {
    pdfDoc = pdf;
    render(pageNum);
    thumbs();
});

// Render
function render(num) {
    pdfDoc.getPage(num).then(page => {
        let viewport = page.getViewport({ scale });

        canvas.width = viewport.width;
        canvas.height = viewport.height;

        page.render({ canvasContext: ctx, viewport });
    });
}

// Navegación
function next(){ if(pageNum < pdfDoc.numPages){ pageNum++; render(pageNum);} }
function prev(){ if(pageNum > 1){ pageNum--; render(pageNum);} }

// Zoom
function zoomIn(){ scale += 0.2; render(pageNum); }
function zoomOut(){ if(scale > 0.5){ scale -= 0.2; render(pageNum);} }

// Miniaturas
function thumbs(){
    let sidebar = document.getElementById("sidebar");

    for(let i=1;i<=pdfDoc.numPages;i++){
        pdfDoc.getPage(i).then(p=>{

            // Contenedor
            let container = document.createElement("div");
            container.className = "thumb-container";

            // Canvas miniatura
            let c = document.createElement("canvas");
            let v = p.getViewport({scale:0.2});
            c.width = v.width;
            c.height = v.height;
            c.className = "thumb";

            p.render({canvasContext:c.getContext("2d"),viewport:v});

            c.onclick = ()=>{
                pageNum = i;
                render(pageNum);
            };

            // Obtener texto de la página
            p.getTextContent().then(textContent => {
                let texto = textContent.items.map(item => item.str).join(" ");

                // Usar primeros caracteres como título
                let titulo = texto.substring(0, 40) || "Página " + i;

                let label = document.createElement("div");
                label.className = "thumb-title";
                label.innerText = titulo;

                container.appendChild(c);
                container.appendChild(label);
            });

            sidebar.appendChild(container);
        });
    }
}

// Zoom con scroll
document.getElementById("viewer").addEventListener("wheel", e=>{
    e.preventDefault();
    e.deltaY < 0 ? zoomIn() : zoomOut();
});
</script>

</body>
</html>