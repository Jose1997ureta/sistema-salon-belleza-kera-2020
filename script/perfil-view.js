let trabajadorView = {

    link: {
        trabajadorController: "controller/trabajador-controller.php",
    },

    control: {
        frmActualizarTrabajador: "formActualizarTrabajador",
        frmActualizarPassword: "formActualizarPassword",
        nombreTrabajador: "nombreTrabajador",
        apellidoTrabajador: "apellidoTrabajador",
        emailTrabajador: "emailTrabajador",
        passwordTrabajador1: "passwordTrabajador1",
        passwordTrabajador2: "passwordTrabajador2",
    },

    inicializarDom: function(){
        const obj = trabajadorView;

        obj.listarTrabajador();
    },

    listarTrabajador: function(){
        const obj = trabajadorView;
        const link = obj.link;

        sendDataAjax("POST", link.trabajadorController, false, "listarTrabajadorId=true", obj.mostrarTrabajador);
    },

    mostrarTrabajador: function(rpta){
        const obj = trabajadorView;
        const control = obj.control;

        let lista = rpta.split("|");

        if(lista != null && lista != ""){
            
            _id(control.nombreTrabajador).value = lista[1];
            _id(control.apellidoTrabajador).value = lista[2];
            _id(control.emailTrabajador).value = lista[3];

            validarEnviarFormulario(control.frmActualizarTrabajador,obj.actualizarTrabajador);
            validarEnviarFormulario(control.frmActualizarPassword,obj.actualizarPasswordTrabajador);
        }
    },

    actualizarTrabajador: function(form){
        const obj = trabajadorView;
        const link = obj.link;

        let formData = new FormData(form);
        formData.append("actualizarTrabajador",true);
        
        sendDataAjax("POST", link.trabajadorController, true, formData, obj.respuestaActualizarTrabajador);
    }, 

    respuestaActualizarTrabajador:function(rpta){
        const obj = trabajadorView;
        if (rpta != "0") {
            mostrarMensaje("success", "Se actualizó los datos del Trabajador");
            setTimeout(function(){
                location.reload();
            }, 2000);
        } else {
            mostrarMensaje("error", "Ocurrio un error");
        }
    },

    actualizarPasswordTrabajador: function(form){
        const obj = trabajadorView;
        const link = obj.link;

        let formData = new FormData(form);
        formData.append("actualizarPasswordTrabajador",true);
        
        sendDataAjax("POST", link.trabajadorController, true, formData, obj.respuestaActualizarPasswordTrabajador);
    }, 

    respuestaActualizarPasswordTrabajador:function(rpta){
        const obj = trabajadorView;
        if (rpta == "1") {
            mostrarMensaje("success", "Se actualizó las contraseña");
            setTimeout(function(){
                window.location = baseUrl() + "/view/sign-in";
            }, 2000);
        } else if(rpta == "2"){
            mostrarMensaje("error", "Las contraseñas no coinciden");
        }else{
            mostrarMensaje("error", "Ocurrio un error");
        }
    },

}

document.addEventListener("DOMContentLoaded", function () {
    trabajadorView.inicializarDom();

})