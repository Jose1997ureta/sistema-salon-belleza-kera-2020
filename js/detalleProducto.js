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

        sendDataAjax("POST",link.lenguajeController,false,"lang=es&listarProductoDetalleLang=true",obj.mostrarProductoLang);

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

                sendDataAjax("POST",link.lenguajeController,false,"lang="+languaje+"&listarProductoDetalleLang=true",obj.mostrarProductoLang);
            })
        }

    },

    mostrarProductoLang: function(rpta){
        const obj = principalProducto;

        let html = "";
        let lista = rpta.split("~");

        if(lista!= ""){
            for(let i = 0; i < lista.length; i++){
                let data = lista[i].split("|");
                if(data[1] == "es"){
                    obj.mostrarEnpanol();
                }else if(data[1] == "en"){
                    obj.mostrarIngles();
                }else if(data[1] == "ru"){
                    obj.mostrarRuso();
                }else{
                    obj.mostrarFrances();
                }

                let tituloProducto = "";
                    tituloProducto += data[1];
                    tituloProducto += data[2];

                let descripcionProducto = "";
                    descripcionProducto += data[3];
                    descripcionProducto += data[4];
                    descripcionProducto += data[5];
                    descripcionProducto += data[7];
                    descripcionProducto += data[8];

                let imagenResultado = "";
                    imagenResultado += "<img src='" + data[10] + "' alt='" + data[1] + "'>";

                let rutaVideo = "";
                    rutaVideo += "<iframe src='" + data[11] + "' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";

                _id("tituloNombreProducto").innerHTML = tituloProducto;
                _id("descripcionProducto").innerHTML = descripcionProducto;
                _id("conatinerImgResultado").innerHTML = imagenResultado;
                _id("containerrutaVideo").innerHTML = rutaVideo;
            }

            _id("containerListaProducto").innerHTML = html;

            sliderProductoDetalle();
        }
        
    },

    mostrarEnpanol: function(){
        let menu = "";
            menu += "<li><a href='inicio' class='active'>INICIO</a></li>";
            menu += "<li><a href='productos'>PRODUCTO</a></li>";
            menu += "<li><a href='inicio#contacto'>CONTACTO</a></li>";
        _id("containerMenu").innerHTML = menu;
    },

    mostrarIngles: function(){
        let menu = "";
        menu += "<li><a href='inicio' class='active'>HOME</a></li>";
        menu += "<li><a href='productos'>PRODUCT</a></li>";
        menu += "<li><a href='inicio#contacto'>CONTACT</a></li>";
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