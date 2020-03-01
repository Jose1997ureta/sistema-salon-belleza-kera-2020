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
        const control = obj.control;

        // validarEnviarFormulario(control.frmRegistrarImagenHomeES,obj.registrarImagenHome);
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

        if(lista!= ""){
            for(let i = 0; i < lista.length; i++){
                let data = lista[i].split("|");
                
                html +="<div class='swiper-slide'>";
                html +="<a href='detalle.php' class='sect3_item animacion'>";
                html +="<img src='"+ baseUrl() + "/imagenes/imagen-home/" + data[1] + "' alt=''>";
                html +="<div class='sect3_item_title'>"
                html +="<b>" + data[0] + "</b>";
                html +="</div>";
                html +="<span>EXPLORAR</span>";
                html +="</a>";  
                html +="</div>";
            }

            _id(control.containerSliderImgenHome).innerHTML = html;

            var swiper3 = new Swiper('.swiper3', {
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
        
    },

    ImagenHomeEs: function(){

    },


}

document.addEventListener("DOMContentLoaded", function () {
    principalHome.inicializarDom();

})