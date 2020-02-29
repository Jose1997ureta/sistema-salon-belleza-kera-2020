let loginTrabajador = {

    link: {
        trabajadorController: "controller/trabajador-controller.php",
    },

    control: {
        frmIngresarTrabajador: "formIngresarTrabajador",
        correoTrabajador: "correoTrabajador",
        passwordTrabajador: "passwordTrabajador",
    },

    inicializarDom: function(){
        const obj = loginTrabajador;
        const control = obj.control;

        validarEnviarFormulario(control.frmIngresarTrabajador,obj.ingresarTrabajador);
    },

    ingresarTrabajador: function(form){
        const obj = loginTrabajador;
        const link = obj.link;

        let formData = new FormData(form);
        formData.append("IniciarSession",true);

        sendDataAjax("POST", link.trabajadorController, true, formData, obj.respuestaLoginTrabjador);
    },

    respuestaLoginTrabjador: function (rpta) {
        const obj = loginTrabajador;
        
        if (rpta != "0") {
            mostrarMensaje("success", "Bienvenido!!!")
            setTimeout(function(){
                window.location = baseUrl() + "/view/listar-producto";
            }, 2000);
        } else {
            mostrarMensaje("error", "Las Credenciales son incorrectas");
        }
    },
}

document.addEventListener("DOMContentLoaded", function () {
    loginTrabajador.inicializarDom();

})