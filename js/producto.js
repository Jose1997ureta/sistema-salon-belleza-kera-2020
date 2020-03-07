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

        sendDataAjax("POST",link.lenguajeController,false,"listarProductoLang=true",obj.mostrarProductoLang);

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

                sendDataAjax("POST",link.lenguajeController,false,"lang="+languaje+"&listarProductoLang=true",obj.mostrarProductoLang);
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
                let n = i + 1;
                let number = '';
                if(n < 10){
                    number = "0" + n;
                }else{
                    number =  n;
                }
                
                html +="<a href='detalle/" + data[0] +"' class='lista_item'>";
                html +="<div class='lista_item_img'>";
                html +="<img src='" + baseUrl() + "/imagenes/producto/" + data[4] + "' alt=''>";
                html +="<span>" + number + "</span>";
                html +="</div>";
                html +="<div class='lista_item_nombre'>";
                html +="<b>" + data[2] + "</b>";
                html +="<p>" + data[3] + "</p>";  
                html +="</div>";
                html +="</a>";
            }

            _id("containerListaProducto").innerHTML = html;
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
