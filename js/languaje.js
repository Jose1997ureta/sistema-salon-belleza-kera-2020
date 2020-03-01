let principalHome = {
    propiedad: {
      
    },

    session: {

    },

    link: {
        lenguajeController: "controller/cambiarLenguaje-controller.php",
    },

    control: {
        btnCambiarLanguaje: "btnCambiarLanguaje",
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

        let btn = _id(control.btnCambiarLanguaje);
        for(let i = 0; i < btn.length; i++){
            let languaje = _getAttribute(btn[i],"data-lang");

            sendDataAjax("POST",link.lenguajeController,false,"lang="+languaje+"&cambiarLanguaje=true",obj.changeLaguaje);
        }

    },

    changeLaguaje: function(form){
        const obj = principalHome;
        const link = obj.link;

        let formData = new FormData(form);
        formData.append("registrarImagenHome",true);

        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaRegistroImagenHome);
    },

    respuestaRegistroImagenHome: function (rpta) {
        const obj = principalHome;
        const control = obj.control;

        if (rpta != "0") {
            _id(control.frmRegistrarImagenHomeES).reset();
            _id(control.frmRegistrarImagenHomeEN).reset();
            _id(control.frmRegistrarImagenHomeRU).reset();
            _id(control.frmRegistrarImagenHomeFR).reset();
            if(rpta == "1|1"){
                mostrarMensaje("success", "Se registró las imagenes para Home")
            }else{
                mostrarMensaje("warning", "Se registró los títulos, pero las imagenes no se pudieron grabar")
            }
            obj.listarImagenHome();
        } else {
            mostrarMensaje("error", "Ocurrio un error");
        }
    },

    mostrarTablaImagen: function(rpta){
        const obj = principalHome;
        const control = obj.control;
        const propiedad = obj.propiedad;

        propiedad.listarHomeES = [];
        propiedad.listarHomeEN = [];
        propiedad.listarHomeRU = [];
        propiedad.listarHomeFR = [];

        let lista = rpta.split("~");

        if(lista != null && lista != ""){
            for(let i = 0; i < lista.length; i++){
                let data = lista[i].split("|");
                if(data[1] === "es"){
                    propiedad.listarHomeES.push(data[0] + '|' + data[1] + '|' + data[2] + '|' + data[3]);
                }else if(data[1] === "en"){
                    propiedad.listarHomeEN.push(data[0] + '|' + data[1] + '|' + data[2] + '|' + data[3]);
                }else if(data[1] === "ru"){
                    propiedad.listarHomeRU.push(data[0] + '|' + data[1] + '|' + data[2] + '|' + data[3]);
                }else{
                    propiedad.listarHomeFR.push(data[0] + '|' + data[1] + '|' + data[2] + '|' + data[3]);
                }
            }
        }

        obj.tablaImagen(propiedad.listarHomeES,control.lstImagenHomeES);
        obj.tablaImagen(propiedad.listarHomeEN,control.lstImagenHomeEN);
        obj.tablaImagen(propiedad.listarHomeRU,control.lstImagenHomeRU);
        obj.tablaImagen(propiedad.listarHomeFR,control.lstImagenHomeFR);

        obj.eliminarImagenHome();
        obj.mostrarModalImagenHome();
    },
}

document.addEventListener("DOMContentLoaded", function () {
    principalHome.inicializarDom();

})