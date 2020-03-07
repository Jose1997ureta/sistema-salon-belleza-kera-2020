// import Swiper from "swiper";

let principalProducto = {
    propiedad: {
      
    },

    session: {

    },

    link: {
        lenguajeController: "controller/producto-controller.php",
    },

    control: {
        btnCambiarLenguaje: "btnCambiarLanguaje",
        containerSliderImgenHome:"containerSliderImgenHome",
    },

    inicializarDom: function(){
        const obj = principalProducto;
        const link = obj.link;

        let idProducto = _id("idProducto").value;
        sendDataAjax("POST",link.lenguajeController,false,"idProducto=" + idProducto + "&listarProductoDetalleLang=true",obj.mostrarProductoLang);

        obj.cambiarLenguaje();
    },

    cambiarLenguaje: function(){
        const obj = principalProducto;
        const link = obj.link;
        const control = obj.control;

        let btnCambiarLenguaje = _cname(control.btnCambiarLenguaje);
        for(let i = 0; i < btnCambiarLenguaje.length; i++){
            let btn = btnCambiarLenguaje[i];
            btn.addEventListener("click",function(e){
                e.preventDefault();

                let languaje = _getAtrribute(btn,"data-lang");
                let idProducto = _id("idProducto").value;
                sendDataAjax("POST",link.lenguajeController,false,"lang="+languaje+"&idProducto=" + idProducto + "&listarProductoDetalleLang=true",obj.mostrarProductoLang);
            })
        }

    },

    mostrarProductoLang: function(rpta){
        const obj = principalProducto;

        let html = "";
        let lista = rpta.split("^");
        let producto = lista[0].split("~");
        let imagenProducto = lista[1].split("~");

        if(producto!= ""){
            for(let i = 0; i < producto.length; i++){
                let data = producto[i].split("|");
                if(data[1] == "es"){
                    obj.mostrarEnpanol();
                }else if(data[1] == "en"){
                    obj.mostrarIngles();
                }else if(data[1] == "ru"){
                    obj.mostrarRuso();
                }else{
                    obj.mostrarFrances();
                }

                let tituloNombreProducto = "<h3>" + data[2] + "</h3>";
                tituloNombreProducto += "<p>" + data[3] + "</p>";

                let descripcionProducto = "<p>" + data[4] + "</p>";
                    descripcionProducto += data[5];
                    descripcionProducto += "<b>" + data[6] + "</b>";
                    descripcionProducto += data[7];
                    descripcionProducto += "<b>" + data[8] + "</b>";
                    descripcionProducto += data[9];

                let imagenResultado = "<img src='../imagenes/producto/" + data[10] + "' alt='" + data[1] + "'>";
                if(data[11]){
                    let rutaVideo = "";
                    rutaVideo += "<iframe src='" + data[11] + "' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                    _id("rutaVideo").innerHTML = rutaVideo;
                }
                

                _id("tituloNombreProducto").innerHTML = tituloNombreProducto;
                _id("descripcionProducto").innerHTML = descripcionProducto;
                _id("ImgResultado").innerHTML = imagenResultado;
                
            }
        }

        if(imagenProducto !== ""){
            let html = "";
            for(let i = 0; i < imagenProducto.length; i++){
                let data = imagenProducto[i].split("|");

                html += "<div class='swiper-slide' style='background-image:url(../imagenes/producto/" + data[1] + ")'></div>";
            }

            _id("containerImagenDetalle").innerHTML = html;
            _id("containerImagenDetalleSmall").innerHTML = html;
            sliderProductoDetalle();
        }
        
    },

    mostrarEnpanol: function(){
        let menu = "";
            menu += "<li><a href='" + baseUrl() + "/inicio' class='active'>INICIO</a></li>";
            menu += "<li><a href='" + baseUrl() + "/productos'>PRODUCTO</a></li>";
            menu += "<li><a href='" + baseUrl() + "/inicio#contacto'>CONTACTO</a></li>";
        _id("containerMenu").innerHTML = menu;
    },

    mostrarIngles: function(){
        let menu = "";
        menu += "<li><a href='" + baseUrl() + "/inicio' class='active'>HOME</a></li>";
        menu += "<li><a href='" + baseUrl() + "/productos'>PRODUCT</a></li>";
        menu += "<li><a href='" + baseUrl() + "/inicio#contacto'>CONTACT</a></li>";
        _id("containerMenu").innerHTML = menu;
    },

    mostrarFrances: function(){

    },

    mostrarRuso: function(){

    },

}

document.addEventListener("DOMContentLoaded", function () {
    principalProducto.inicializarDom();
})

function sliderProductoDetalle(){
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
      var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true,
      });
      galleryTop.controller.control = galleryThumbs;
      galleryThumbs.controller.control = galleryTop;

}