/* =====================================================
   SLIDER PRINCIPAL
===================================================== */
let slideIndex = 0;
const slides = document.getElementsByClassName("slide");

function mostrarSlide(n){
    if(n >= slides.length) slideIndex = 0;
    if(n < 0) slideIndex = slides.length - 1;

    for(let i=0;i<slides.length;i++){
        slides[i].style.display="none";
    }

    slides[slideIndex].style.display="block";
}

function cambiarSlide(n){
    slideIndex += n;
    mostrarSlide(slideIndex);
}

mostrarSlide(slideIndex);
setInterval(()=>{ cambiarSlide(1); },5000);


/* =====================================================
   MODALES GENERALES SERVICIOS
===================================================== */
function abrirModal(id){
    document.getElementById(id).style.display="block";
}

function cerrarModal(id){
    document.getElementById(id).style.display="none";
}


/* =====================================================
   MODALES BANNER 4 Y 5
===================================================== */
function abrirModalB4(e){
    e.preventDefault();
    document.getElementById("modalB4").style.display="block";
}

function cerrarModalB4(){
    document.getElementById("modalB4").style.display="none";
}

function abrirModalB5(e){
    e.preventDefault();
    document.getElementById("modalB5").style.display="block";
}

function cerrarModalB5(){
    document.getElementById("modalB5").style.display="none";
}

/* =====================================================
   MODAL PROMOCIONES (MODAL1 2 3 4 5)
===================================================== */
var modal1 = document.getElementById('modal1');

modal1.addEventListener('click', function(e) {
    if (e.target === modal1) {
        cerrarModal('modal1');
    }
});

var modal2 = document.getElementById('modal2');

modal2.addEventListener('click', function(e) {
    if (e.target === modal2) {
        cerrarModal('modal2');
    }
});

var modal3 = document.getElementById('modal3');

modal3.addEventListener('click', function(e) {
    if (e.target === modal3) {
        cerrarModal('modal3');
    }
});

var modal4 = document.getElementById('modal4');

modal4.addEventListener('click', function(e) {
    if (e.target === modal4) {
        cerrarModal('modal4');
    }
});

var modal5 = document.getElementById('modal5');

modal5.addEventListener('click', function(e) {
    if (e.target === modal5) {
        cerrarModal('modal5');
    }
});


/* =====================================================
   MODAL PROMOCIONES (REUTILIZABLE)
===================================================== */
document.addEventListener("DOMContentLoaded",function(){

    const modalImg = document.querySelector(".modal-img");
    const imagenModal = modalImg.querySelector(".contenido-img");

    document.querySelectorAll(".img-click").forEach(img=>{
        img.addEventListener("click",function(){
            modalImg.style.display="block";
            imagenModal.src=this.src;
        });
    });

    modalImg.addEventListener("click",function(e){
        if(e.target===modalImg){
            modalImg.style.display="none";
        }
    });

});


/* =====================================================
   VISOR INSTALACIONES
===================================================== */
function abrirImagen(img) {
document.getElementById("visorImagen").style.display = "block";
document.getElementById("imagenExpandida").src = img.src;

// Tomar título del alt o del h3
let titulo = img.alt || img.parentElement.querySelector("h3").innerText;
document.getElementById("tituloImagen").innerText = titulo;
}

function cerrarImagen() {
document.getElementById("visorImagen").style.display = "none";
}

// Cerrar al hacer clic fuera
window.onclick = function(event) {
    let visor = document.getElementById("visorImagen");
    if (event.target === visor) {
        visor.style.display = "none";
    }
}


/* =====================================================
   BOTON VOLVER ARRIBA
===================================================== */
window.onscroll=function(){
    const btn=document.getElementById("btnTop");
    if(document.documentElement.scrollTop>300){
        btn.style.display="block";
    }else{
        btn.style.display="none";
    }
};

function volverArriba(){
    window.scrollTo({top:0,behavior:"smooth"});
}


/* =====================================================
   VALIDACION FORMULARIO CONTACTO
===================================================== */
function cdmValidar(f){
    if(!f.nombre.value.trim() || !f.email.value.trim() || !f.mensaje.value.trim()){
        alert("Completa todos los campos");
        return false;
    }

    let email=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!email.test(f.email.value)){
        alert("Correo inválido");
        return false;
    }

    return true;
}

/* =====================================================
   VISOR PROMOCIONES
===================================================== */
document.querySelectorAll(".img-click").forEach(img => {
    img.addEventListener("click", function() {
        const modal = document.querySelector(".modal-img");
        const modalImg = modal.querySelector(".contenido-img");

        modal.style.display = "block";
        modalImg.src = this.src;
    });
});

document.querySelector(".cerrar-img").onclick = function() {
    this.closest(".modal-img").style.display = "none";
};

// Cerrar al hacer clic fuera de la imagen
document.querySelector(".modal-img").addEventListener("click", function(e) {
    if (e.target === this) {
        this.style.display = "none";
    }
});


/* ====== */
