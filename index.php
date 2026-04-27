<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Coded Morelia</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/estilos.css">

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<body>

<header>
    <a href="#" style="text-decoration: none; color: inherit;">
        <div class="logo">CODED MORELIA</div>
    </a>
    <nav>
        <a href="#">INICIO</a>
        <a href="#servicios">SERVICIOS</a>
        <a href="#promociones">PROMOCIONES</a>
        <a href="#contacto">CONTACTO</a>
        <a href="#instalaciones">INSTALACIONES</a>
        <a href="clientes.php" target="_blank">LOGIN</a>
    </nav>
</header>

<!-- BANNER -->
<section class="banner">
    <div class="slide"><img src="images/banner1.png"><a href="cctv.php" target="_blank" class="btn-info-b1">Más información</a></div>
    <div class="slide"><img src="images/banner2.png"><a href="alarmas.php" target="_blank" class="btn-info-b2">Más información</a></div>
    <div class="slide"><img src="images/banner3.png"><a href="soporte.php" target="_blank" class="btn-info-b3">Más información</a></div>
<!--    <div class="slide"><img src="images/banner4.png"><a href="#" target="_blank" class="btn-info-b4">Más información</a></div> -->
    <div class="slide">
        <img src="images/banner4.png">
        <a href="#" class="btn-info-b4" onclick="abrirModalB4(event)">Más información</a>
    </div>
    <div id="modalB4" class="modal-b4">
        <div class="modal-contenido-b4">
            <span class="cerrar-b4" onclick="cerrarModalB4()">&times;</span>
        
            <h2>Información de Servicio</h2>

            <p>
            Para brindarle una solución adecuada a sus objetivos digitales, le informamos que la cotización para la creación, implementación o soporte de páginas web, así como de plataformas educativas y/o empresariales, requiere un análisis previo de sus necesidades específicas.
            <br><br>
            Le invitamos cordialmente a ponerse en contacto con nosotros para agendar una cita, en la cual podremos conocer a detalle los requerimientos de su proyecto, alcances, funcionalidades deseadas y características técnicas. Con base en esta información, elaboraremos una propuesta personalizada, alineada a sus objetivos y expectativas.
            <br><br>
            Quedamos a su disposición para acompañarle con profesionalismo en el desarrollo y fortalecimiento de su presencia digital.
            </p>

        </div>
        <div style="margin-top:20px; padding-left:560px;">
        <a href="#contacto" style="text-decoration:none;">
            <button style="
                background-color:#ff7a00;
                color:white;
                border:none;
                padding:12px 25px;
                font-size:16px;
                border-radius:8px;
                cursor:pointer;
                transition: all 0.3s ease;
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            "
            onclick="cerrarModalB4()"
            onmouseover="this.style.backgroundColor='#e66800'"
            onmouseout="this.style.backgroundColor='#ff7a00'">
                Contáctanos
            </button>
        </a>
        </div>
    </div>

<!-- inicio banner 5 -->
    <div class="slide">
        <img src="images/banner5.png">
        <a href="#" class="btn-info-b5" onclick="abrirModalB5(event)">Más información</a>
    </div>
    <div id="modalB5" class="modal-b5">
        <div class="modal-contenido-b5">
            <span class="cerrar-b5" onclick="cerrarModalB5()">&times;</span>
        
            <h2>Información de Servicio</h2>

            <p>
            Para brindarle una atención precisa y acorde a sus necesidades, le informamos que la cotización y/o realización de este servicio requiere una visita previa al sitio donde se llevará a cabo.
            <br><br>
            Le invitamos cordialmente a ponerse en contacto con nosotros para agendar una cita en la fecha y horario que le resulten más convenientes. Durante esta visita, podremos evaluar de manera detallada las condiciones del espacio y ofrecerle una propuesta personalizada.
            <br><br>
            Quedamos a su disposición para atenderle con el profesionalismo y la calidad que nos distinguen.
            </p>

        </div>
        <div style="margin-top:20px; padding-left:560px;">
        <a href="#contacto" style="text-decoration:none;">
            <button style="
                background-color:#ff7a00;
                color:white;
                border:none;
                padding:12px 25px;
                font-size:16px;
                border-radius:8px;
                cursor:pointer;
                transition: all 0.3s ease;
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            "
            onclick="cerrarModalB5()"
            onmouseover="this.style.backgroundColor='#e66800'"
            onmouseout="this.style.backgroundColor='#ff7a00'">
                Contáctanos
            </button>
        </a>
        </div>
    </div>

    <button class="prev" onclick="cambiarSlide(-1)">❮</button>
    <button class="next" onclick="cambiarSlide(1)">❯</button>
</section>

<!-- LOGOS -->
<section class="logos">
    <img src="images/hp.png">
    <img src="images/epson.png">
    <img src="images/dell.png">
    <img src="images/ghia.png">
    <img src="images/canon.png">
    <img src="images/dahua.png">
    <img src="images/tplink.png">
    <img src="images/lenovo.png">
    <img src="images/acer.png">
    <img src="images/amd.png">
    <img src="images/asus.png">
    <img src="images/intel.png">
    <img src="images/msi.png">
    <img src="images/nvidia.png">
    <img src="images/tplink.png">
    <img src="images/biostar.png">
    <img src="images/kingston.png">
</section>

<section id="servicios">
<h2 class="titulo-logos">Servicios</h2>
<p style="text-align: center; font-size: 15px; font-weight: bold; color: #53bde7; margin: 0;">
    Click en las imagenes
</p>

<section class="logoss">
    <img src="images/cctv.png" onclick="abrirModal('modal1')">
    <img src="images/seguridad.png" onclick="abrirModal('modal2')">
    <img src="images/redes.png" onclick= "abrirModal('modal3')">
    <img src="images/soporte.png" onclick= "abrirModal('modal4')">
    <img src="images/webservices.png"  onclick= "abrirModal('modal5')">
</section>

<!-- MODAL 1 -->
<div id="modal1" class="modal">
        <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarModal('modal1')">&times;</span>

        <h2 style="text-align: center; margin-bottom: 15px;">CCTV monitoreo</h2>
        <p>El sistema de CCTV y monitoreo es una solución integral de videovigilancia diseñada para supervisar, registrar y resguardar lo que ocurre en tiempo real dentro de un espacio determinado. A través de cámaras estratégicamente ubicadas, permite la observación continua de áreas críticas, facilitando la detección oportuna de actividades inusuales o situaciones de riesgo.</p>
        <p>Este sistema puede ser monitoreado local o remotamente, brindando acceso seguro desde dispositivos autorizados como computadoras, teléfonos móviles o centros de control. Además, cuenta con almacenamiento de grabaciones que permite la revisión de eventos pasados para fines de seguridad, investigación o evidencia.</p>
        <p>El CCTV contribuye a la prevención de incidentes, mejora la respuesta ante emergencias y refuerza la seguridad de personas, bienes e instalaciones, convirtiéndose en una herramienta clave para la protección y el control operativo en hogares, empresas e instituciones.</p>
</div>
<div style="text-align:center; margin-top:20px;">
    <a href="cctv.php" target="_blank" style="text-decoration:none;">
        <button style="
            background-color:#ff7a00;
            color:white;
            border:none;
            padding:12px 25px;
            font-size:16px;
            border-radius:8px;
            cursor:pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        "
        onclick="cerrarModal('modal1')"
        onmouseover="this.style.backgroundColor='#e66800'"
        onmouseout="this.style.backgroundColor='#ff7a00'">
            Revisar Catálogo
        </button>
    </a>
    </div>
</div>

<!-- MODAL 2 -->
<div id="modal2" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarModal('modal2')">&times;</span>

        <h2 style="text-align: center; margin-bottom: 15px;">Alarmas de seguridad</h2>
        <p>Las alarmas de seguridad son sistemas diseñados para detectar y alertar de manera inmediata cualquier situación de riesgo, como intrusiones, accesos no autorizados, incendios o emergencias. Su función principal es proteger personas, bienes e instalaciones mediante señales sonoras, visuales o notificaciones remotas que permiten una respuesta rápida ante cualquier incidente.</p>
        <p>Estos sistemas pueden estar compuestos por sensores de movimiento, contactos en puertas y ventanas, detectores de humo, cámaras integradas y paneles de control centralizados. Al activarse una alerta, el sistema emite una señal que puede ser escuchada en el lugar o enviada directamente a dispositivos móviles o centros de monitoreo.</p>
        <p>Las alarmas de seguridad son una herramienta fundamental en la prevención del delito y la reducción de riesgos, ya que disuaden a posibles intrusos y permiten actuar de forma inmediata ante cualquier emergencia, brindando mayor tranquilidad y protección tanto en hogares como en empresas e instituciones.</p>
    </div>
    <div style="text-align:center; margin-top:20px;">
    <a href="alarmas.php" target="_blank" style="text-decoration:none;">
        <button style="
            background-color:#ff7a00;
            color:white;
            border:none;
            padding:12px 25px;
            font-size:16px;
            border-radius:8px;
            cursor:pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        "
        onclick="cerrarModal('modal2')"
        onmouseover="this.style.backgroundColor='#e66800'"
        onmouseout="this.style.backgroundColor='#ff7a00'">
            Revisar Catálogo
        </button>
    </a>
    </div>
</div>

<!-- MODAL 3 -->
<div id="modal3" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarModal('modal3')">&times;</span>

        <h2 style="text-align: center; margin-bottom: 15px;">Cableado estructurado</h2>
        <p>El cableado estructurado y las redes de datos son la base fundamental de la infraestructura tecnológica de cualquier empresa moderna, ya que permiten la comunicación eficiente, segura y ordenada entre dispositivos, servidores y sistemas.</p>
        <p>El cableado estructurado consiste en un sistema organizado de cables, conectores, paneles de parcheo y canalizaciones que siguen estándares internacionales para garantizar un rendimiento óptimo y escalable. Este tipo de instalación no depende de un solo uso específico, sino que está diseñado para soportar múltiples servicios como voz, datos, video, telefonía IP, sistemas de seguridad y control de acceso.</p>
        <p>Por su parte, las redes de datos permiten la interconexión de equipos dentro de una organización, facilitando el intercambio de información de manera rápida y segura. Estas redes pueden ser locales (LAN), extendidas (WAN) o inalámbricas (WIFI), dependiendo de las necesidades del entorno.</p>
        <p>Una infraestructura bien diseñada de cableado estructurado mejora la estabilidad de la red, reduce fallas, facilita el mantenimiento y permite futuras expansiones sin necesidad de rehacer toda la instalación. Además, contribuye a un mejor desempeño de los sistemas y a una mayor productividad en las operaciones diarias.</p>
        <p>En conjunto, el cableado estructurado y las redes de datos representan una solución integral para garantizar conectividad confiable, ordenada y preparada para las tecnologías actuales y futuras.</p>
    </div>
</div>

<!-- MODAL 4 -->
<div id="modal4" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarModal('modal4')">&times;</span>

        <h2 style="text-align: center; margin-bottom: 15px;">Soporte técnico</h2>
        <p>El soporte técnico es un servicio esencial que se encarga de brindar asistencia, mantenimiento y solución de problemas relacionados con equipos de cómputo, sistemas informáticos y dispositivos tecnológicos dentro de una empresa o usuario particular.</p>
        <p>Su objetivo principal es garantizar el correcto funcionamiento de la infraestructura tecnológica, evitando interrupciones en las operaciones y asegurando la continuidad del trabajo. El soporte técnico puede incluir desde la instalación y configuración de hardware y software, hasta la detección y reparación de fallas, eliminación de virus, optimización de sistemas y recuperación de información.</p>
        <p>Este servicio puede ofrecerse de manera presencial o remota, dependiendo de la naturaleza del problema y la urgencia de la atención. Además, incluye mantenimiento preventivo, el cual ayuda a reducir fallas futuras mediante revisiones periódicas y actualizaciones necesarias.</p>
        <p>El soporte técnico es fundamental en cualquier entorno digital, ya que permite resolver incidencias de forma rápida, mejorar el rendimiento de los equipos y brindar a los usuarios la seguridad de contar con un sistema estable, funcional y actualizado en todo momento.</p>
    </div>
    <div style="text-align:center; margin-top:20px;">
    <a href="soporte.php" target="_blank" style="text-decoration:none;">
        <button style="
            background-color:#ff7a00;
            color:white;
            border:none;
            padding:12px 25px;
            font-size:16px;
            border-radius:8px;
            cursor:pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        "
        onclick="cerrarModal('modal4')"
        onmouseover="this.style.backgroundColor='#e66800'"
        onmouseout="this.style.backgroundColor='#ff7a00'">
            Revisar Catálogo
        </button>
    </a>
    </div>
</div>

<!-- MODAL 5 -->
<div id="modal5" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarModal('modal5')">&times;</span>

        <h2 style="text-align: center; margin-bottom: 15px;">Servicios Web y plataformas</h2>
        <p>Los servicios web son soluciones tecnológicas diseñadas para crear, gestionar y optimizar la presencia digital de personas, negocios o empresas en internet. Estos servicios permiten desarrollar plataformas modernas, funcionales y adaptadas a las necesidades de cada cliente, facilitando la comunicación, la promoción y la interacción con los usuarios.</p>
        <p>Entre los principales servicios web se incluyen el diseño y desarrollo de páginas web, tiendas en línea (e-commerce), sistemas personalizados, alojamiento web, registro de dominios y mantenimiento de sitios. También abarcan la optimización para motores de búsqueda (SEO), lo que ayuda a mejorar la visibilidad en internet y atraer más visitantes.</p>
        <p>Los servicios web están enfocados en ofrecer soluciones seguras, rápidas y responsivas, es decir, que funcionen correctamente en computadoras, tabletas y teléfonos móviles. Además, permiten integrar herramientas como formularios de contacto, catálogos en línea, sistemas de reservas, chats en vivo y redes sociales.</p>
        <p>En conjunto, los servicios web son una pieza clave para la transformación digital, ya que ayudan a las empresas a crecer, mejorar su alcance y ofrecer una experiencia profesional y accesible a sus clientes en el mundo digital.</p>
    </div>
</div>

<!-- VIDEO -->
<div style="max-width:900px; margin:40px auto; text-align:center;">
    <video width="100%" controls>
        <source src="video/Soluciones_Integrales.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de video.
    </video>
</div>

</section>

<section id="promociones">

<h2 class="titulo-logos">Promociones</h2>
<p style="text-align: center; font-size: 15px; font-weight: bold; color: #53bde7; margin: 0;">
    Click en las imagenes
</p>
<section class="promociones">
    <div class="promocion">
        <img src="promos/formatomayo.png" class="img-click">
        <h3 style="text-align: center;">FORMATEO</h3>
    </div>

<!-- Modal reutilizable -->
    <div class="modal-img">
        <span class="cerrar-img">&times;</span>
        <img class="contenido-img">
    </div>

    <div class="promocion">
        <img src="promos/cctvmayo.png" class="img-click">
        <h3 style="text-align: center;">CÁMARAS</h3>
    </div>

<!-- Modal reutilizable -->
    <div class="modal-img">
        <span class="cerrar-img">&times;</span>
        <img class="contenido-img">
    </div>

    <div class="promocion">
        <img src="promos/reacondicionamiento.png" class="img-click">
        <h3 style="text-align: center;">REACONDICIONAMIENTO</h3>
    </div>

<!-- Modal reutilizable -->
    <div class="modal-img">
        <span class="cerrar-img">&times;</span>
        <img class="contenido-img">
    </div>

    <div class="promocion">
        <img src="promos/respaldo.png" class="img-click">
        <h3 style="text-align: center;">ALMACENAMIENTO</h3>
    </div>
<!-- Modal reutilizable -->
    <div class="modal-img">
        <span class="cerrar-img">&times;</span>
        <img class="contenido-img">
    </div>

<!--
    <div class="promocion">
        <img src="images/imagen4.png">
        <h3>EXPLAINERS</h3>
    </div>
-->

</section>
</section>

<section id=instalaciones>
    <h2 class="titulo-logos">Instalaciones</h2>
    <p style="text-align: center; font-size: 15px; font-weight: bold; color: #53bde7; margin: 0;">
        Click en las imagenes para expander
    </p>
    <section class="promociones">
        <div class="promocion">
            <img src="MapasServicios/Trinidad.png" 
            alt="TRINIDAD"
            onclick="abrirImagen(this)" 
            style="cursor:pointer;">
            <h3 style="text-align: center;">TRINIDAD</h3>
        </div>
        <div id="visorImagen" class="visor-img">
            <span class="cerrar-img" onclick="cerrarImagen()">&times;</span>
    
            <img id="imagenExpandida" class="contenido-img">
    
            <div id="tituloImagen" class="titulo-img"></div>
        </div>

<!-- Mapa 2 -->
        <div class="promocion">
            <img src="MapasServicios/monte.png" 
            alt="MONTE"
            onclick="abrirImagen(this)" 
            style="cursor:pointer;">
            <h3 style="text-align: center;">MONTE</h3>
        </div>
        <div id="visorImagen" class="visor-img">
            <span class="cerrar-img" onclick="cerrarImagen()">&times;</span>
    
            <img id="imagenExpandida" class="contenido-img">
    
            <div id="tituloImagen" class="titulo-img"></div>
        </div>

<!-- Mapa 3 -->
        <div class="promocion">
            <img src="MapasServicios/autolavado.png" 
            alt="AUTOLAVADO"
            onclick="abrirImagen(this)" 
            style="cursor:pointer;">
            <h3 style="text-align: center;">AUTOLAVADO</h3>
        </div>
        <div id="visorImagen" class="visor-img">
            <span class="cerrar-img" onclick="cerrarImagen()">&times;</span>
    
            <img id="imagenExpandida" class="contenido-img">
    
            <div id="tituloImagen" class="titulo-img"></div>
</div>
        </div>


<!--

        <div class="promocion">
            <img src="images/imagen4.png">
            <h3>EXPLAINERS</h3>
        </div>
-->

</section>


<!-- Contacto -->
<section id="contacto">
<h2 class="titulo-logos">Contacto</h2>
<?php
$estado = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cdm_pro"])) {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mensaje = htmlspecialchars(trim($_POST["mensaje"]));

    if ($nombre && $email && $mensaje) {
        $para = "codedmorelia@gmail.com";
        $asunto = "Nuevo mensaje desde la web";
        $contenido = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
        $headers = "From: $email";

        if (mail($para, $asunto, $contenido, $headers)) {
            $estado = "ok";
        } else {
            $estado = "error";
        }
    } else {
        $estado = "vacio";
    }
}
?>

<div class="cdm-pro-wrap">

<a href="https://www.google.com/maps/place/CODED+MORELIA/@19.6683046,-101.3180904,11z/data=!4m6!3m5!1s0x10b418c634a7021:0x59768b2c0216e2b0!8m2!3d19.71162!4d-101.2089138!16s%2Fg%2F11krpkfx_w?hl=es-419&entry=ttu&g_ep=EgoyMDI2MDQxNS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">
    <div class="cdm-pro-sub">
        Nuestra red de servicio cubre las siguientes ubicaciones
    </div>
</a>

<div class="cdm-pro-info">
    📧 codedmorelia@gmail.com<br>
    <a href="https://wa.me/524431194697" target="_blank" style="color:#25D366; text-decoration:none;">
        <i class="fa-brands fa-whatsapp"></i> +52 443 119 4697 <br>
    </a>
    Llevamos nuestro servicio hasta tu domicilio
</div>

<form method="POST" onsubmit="return cdmValidar(this)">
    <input type="hidden" name="cdm_pro" value="1">

    <div class="cdm-field">
        <input type="text" name="nombre" placeholder="Tu nombre">
    </div>

    <div class="cdm-field">
        <input type="email" name="email" placeholder="Tu correo">
    </div>

    <div class="cdm-field">
        <textarea name="mensaje" rows="4" placeholder="Tu mensaje"></textarea>
    </div>

    <button class="cdm-btn">Enviar mensaje</button>
</form>

<?php if ($estado): ?>
    <div class="cdm-msg 
        <?php 
        if($estado=="ok") echo "cdm-ok";
        if($estado=="error") echo "cdm-error";
        if($estado=="vacio") echo "cdm-vacio";
        ?>">
        <?php 
        if($estado=="ok") echo "✅ Mensaje enviado correctamente";
        if($estado=="error") echo "❌ Error al enviar";
        if($estado=="vacio") echo "⚠️ Completa todos los campos";
        ?>
    </div>
<?php endif; ?>

</div>

</section>

<!-- Redes sociales -->
<div class="cdm-social-wrap">


<div class="cdm-social-card">
    <div class="cdm-social-title">Síguenos</div>
    <div class="cdm-social-sub">Conecta con nosotros en redes</div>

    <div class="cdm-social-links">

        <a href="https://www.facebook.com/share/1CQx9rxpbu/" target="_blank" class="cdm-social-btn cdm-fb">
            <svg class="cdm-icon" viewBox="0 0 24 24">
                <path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7v-3h3.4V9.4c0-3.4 2-5.3 5.1-5.3 1.5 0 3 .3 3 .3v3.3h-1.7c-1.7 0-2.2 1-2.2 2.1V12H18l-.6 3h-2.8v7A10 10 0 0 0 22 12"/>
            </svg>
            Facebook
        </a>

        <a href="https://www.instagram.com/coded_morelia?igsh=MW51bHR6cmNyejFzZA==" target="_blank" class="cdm-social-btn cdm-ig">
            <svg class="cdm-icon" viewBox="0 0 24 24">
                <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm5 5.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5zm5.2-.9a1.1 1.1 0 1 1-1.1-1.1 1.1 1.1 0 0 1 1.1 1.1z"/>
            </svg>
            Instagram
        </a>

        <a href="https://www.tiktok.com/@codedmorelia?_r=1&_t=ZS-95mowHKGa5X" target="_blank" class="cdm-social-btn cdm-tt">
            <svg class="cdm-icon" viewBox="0 0 24 24">
                <path d="M16 1a6 6 0 0 0 6 6v3a9 9 0 0 1-6-2v7a7 7 0 1 1-7-7c.5 0 1 .05 1.5.15V12a3 3 0 1 0 2.5 2.95V1h3z"/>
            </svg>
            TikTok
        </a>

    </div>
</div>

</div>

<!-- FOOTER -->
<footer style="background:#222; color:#fff; padding:40px 20px; margin-top:50px;">
    <div style="max-width:1200px; margin:auto; display:flex; flex-wrap:wrap; justify-content:space-between;">
        
        <!-- Información de la empresa -->
        <div style="flex:1; min-width:250px; margin-bottom:20px;">
            <h3>Coded</h3>
            <p>Brindamos soluciones integrales para impulsar tu negocio.</p>
            <p>Seguridad, Redes y Software</p>
        </div>





<?php /* TODO TU CONTENIDO ORIGINAL DE SERVICIOS Y MODALES PERMANECE IGUAL */ ?>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Coded. Todos los derechos reservados.</p>
</footer>

<button id="btnTop" onclick="volverArriba()">↑</button>

<div id="modalB4" class="modal-b4">
    <div class="modal-contenido-b4">
        <span class="cerrar-b4" onclick="cerrarModalB4()">&times;</span>
        <p>ventana flotante</p>
    </div>
</div>

<div id="modalB5" class="modal-b5">
    <div class="modal-contenido-b5">
        <span class="cerrar-b5" onclick="cerrarModalB5()">&times;</span>
        <p>ventana flotante</p>
    </div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>