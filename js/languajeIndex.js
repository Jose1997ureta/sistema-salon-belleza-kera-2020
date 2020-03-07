// import Swiper from "swiper";

let principalHome = {
    propiedad: {
      
    },

    session: {

    },

    link: {
        lenguajeController: "controller/imagen-home-controller.php",
    },

    control: {
        btnCambiarLanguaje: "btnCambiarLanguaje",
        containerSliderImgenHome:"containerSliderImgenHome",
    },

    inicializarDom: function(){
        const obj = principalHome;
        const link = obj.link;

        sendDataAjax("POST",link.lenguajeController,false,"listarImagenHomeLang=true",obj.mostrarImagenHome);

        obj.cambiarLanguaje();
    },

    cambiarLanguaje: function(){
        const obj = principalHome;
        const link = obj.link;
        const control = obj.control;

        let btnCambiarLanguaje = _cname(control.btnCambiarLanguaje);
        for(let i = 0; i < btnCambiarLanguaje.length; i++){
            let btn = btnCambiarLanguaje[i];
            btn.addEventListener("click",function(e){
                e.preventDefault();

                let languaje = _getAtrribute(btn,"data-lang");

                sendDataAjax("POST",link.lenguajeController,false,"lang="+languaje+"&listarImagenHomeLang=true",obj.mostrarImagenHome);
            })
        }

    },

    mostrarImagenHome: function(rpta){
        const obj = principalHome;
        const control = obj.control;

        let html = "";
        let lista = rpta.split("~");

        if(lista!== ""){
            for(let i = 0; i < lista.length; i++){
                let data = lista[i].split("|");
                let btn = "";
                if(data[0] == "es"){
                    obj.mostrarEnpanol();
                    btn =  "EXPLORAR";
                }else if(data[0] == "en"){
                    obj.mostrarIngles();
                    btn = "SEARCH";
                }else if(data[0] == "ru"){
                    obj.mostrarRuso();
                    btn = "EXPLO";
                }else{
                    obj.mostrarFrances();
                    btn = "EXRAR";
                }
                
                html +="<div class='swiper-slide'>";
                html +="<a href='"+ data[3] +"' class='sect3_item animacion'>";
                html +="<img src='"+ baseUrl() + "/imagenes/imagen-home/" + data[2] + "' alt=''>";
                html +="<div class='sect3_item_title'>"
                html +="<b>" + data[1] + "</b>";
                html +="</div>";
                html +="<span id='buttonId'>" + btn + "</span>";
                html +="</a>";  
                html +="</div>";
            }

            _id(control.containerSliderImgenHome).innerHTML = html;

            convertirSlider('.swiper3');
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
    principalHome.inicializarDom();
})

function convertirSlider(container){
    var swiper3 = new Swiper(container, {
        direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 0,
        // effect: 'coverflow',
        speed: 1000,
        loop: true,
        pagination: false,
        slidesPerColumn: 1,
        navigation: {
            nextEl: '.swiper-button-next3',
            prevEl: '.swiper-button-prev3',
        },
       //  autoplay: {
          //   delay: 3500,
          //   disableOnInteraction: false,
          // },
        breakpoints:{
            1024: {
                slidesPerView: 1,
                slidesPerColumn: 2,
            },
            767: {
                slidesPerView: 1,
                slidesPerColumn: 2,
            },
            567: {
                slidesPerView: 1,
                slidesPerColumn: 2,
            },
            320: {
                slidesPerView: 1,
                slidesPerColumn: 2,

            },
        },
    });	
}