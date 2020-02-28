let imagenHomeView = {
    propiedad: {
        listarHome: [],
    },

    session: {

    },

    link: {
        productoController: "controller/imagen-home-controller.php",
    },

    control: {
        lstImagenHome: "listarImagenHome",
        frmRegistrarImagenHome: "formRegistrarImagenHome",
        frmActualizarImagenHome: "formActualizarImagenHome",
        btnEliminarImgHome: "eliminar-elemento",
        btnActualizarImgHome: "modificar-elemento",
    },

    inicializarDom: function(){
        const obj = imagenHomeView;
        const control = obj.control;

        validarEnviarFormulario(control.frmRegistrarImagenHome,obj.registrarImagenHome);
        obj.listarImagenHome();
    },

    listarImagenHome: function(){
        const obj = imagenHomeView;
        const link = obj.link;

        sendDataAjax("POST",link.productoController,false,"listarImagenHome=true",obj.mostrarTablaImagen);
    },

    registrarImagenHome: function(form){
        const obj = imagenHomeView;
        const link = obj.link;

        let formData = new FormData(form);
        formData.append("registrarImagenHome",true);

        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaRegistroImagenHome);
    },

    respuestaRegistroImagenHome: function (rpta) {
        const obj = imagenHomeView;
        const control = obj.control;
        
        if (rpta != "0") {
            _id(control.frmRegistrarImagenHome).reset();
            if(rpta == "1|1"){
                mostrarMensaje("success", "Se registró la imagen del Home")
            }else{
                mostrarMensaje("warning", "Se registró el título, pero la imagen no se pudo grabar")
            }
            obj.listarImagenHome();
        } else {
            mostrarMensaje("error", "Ocurrio un error");
        }
    },

    mostrarTablaImagen: function(rpta){
        const obj = imagenHomeView;
        const control = obj.control;

        let lista = rpta.split("~");

        let cabecera = "Operaciones|Título|Imagen";
        let cabeceraTabla = cabecera.split("|");
        let tabla = "";

        tabla += "<table class='table table-bordered'>";
        tabla += "<thead class='text-center'>";
        tabla += "<tr>";
        for(let i = 0; i < cabeceraTabla.length; i++){
            tabla += "<th>" + cabeceraTabla[i] + "</th>";
        }
        tabla += "</tr>"
        tabla += "<tbody class='text-center'>";

        if(lista != null && lista != ""){
            for(let i = 0; i < lista.length; i++){
                let data = lista[i].split("|");
                tabla += "<tr>";
                tabla += "<td>";
                tabla += "<div class='d-flex justify-content-center'>";
                tabla += "<button class='btn btn-outline-warning mr-2 modificar-elemento' data-id='" + data[0] + "' data-titulo='" + data[1] + "' data-src='" + data[2] + "' data-toggle='modal' data-target='#exampleModal'>";
                tabla += "<span class='btn-icon-wrapper pr-2 opacity-7'>";
                tabla += "<i class='fa fa-trash-alt fa-w-20'></i>";
                tabla += "</span>Modificar";
                tabla += "</button>";
                tabla += "<button class='btn btn-outline-danger eliminar-elemento' data-id='" + data[0] + "'>";
                tabla += "<span class='btn-icon-wrapper pr-2 opacity-7'>";
                tabla += "<i class='fa fa-trash-alt fa-w-20'></i>";
                tabla += "</span>Eliminar";
                tabla += "</button>";
                tabla += "</div>";
                tabla += "</td>";
                tabla += "<td>" + data[1] + "</td>";
                tabla += "<td><img src='"+ baseUrl() +"/images/imagen-home/"+ data[2] +"' width='50'></td>";
                tabla += "</tr>";
            }

            tabla += "</tbody>";
            tabla += "</table>";

        }else{
            tabla += "<tr>";
            tabla += "<td class='text-center' colspan='" + cabecera.length +"'>No hay Información Registrada</td>";
            tabla += "</tr>";
            tabla += "</tbody>";
            tabla += "</table>";
        }

        _id(control.lstImagenHome).innerHTML = tabla;

        obj.eliminarImagenHome();
        obj.mostrarModalImagenHome();
    },

    mostrarModalImagenHome: function(){
        const obj = imagenHomeView;
        const control = obj.control;

        let btnActualizar = _cname(control.btnActualizarImgHome);
        for(let i = 0; i < btnActualizar.length; i++){
            let btn = btnActualizar[i];
            btn.addEventListener("click",function(e){
                e.preventDefault();

                let idImage = _getAtrribute(btn,"data-id");
                let tituloImagen = _getAtrribute(btn,"data-titulo");
                let srcImagen = _getAtrribute(btn,"data-src");

                let html = "<form class='needs-validation' id='formActualizarImagenHome' novalidate='' autocomplete='off'>";
                    html += "<div class='form-row form-group'>";
                    html += "<div class='col-md-12'>";
                    html += "<label for='tituloImagenEditar'>Categoria:</label>";
                    html += "<input type='hidden' name='idImagenHome' value='" + idImage + "'>";
                    html += "<input type='text' class='form-control form-control-sm mb-3' name='tituloImagenEditar' value='" + tituloImagen + "' placeholder='Nombre de la Categoría' required=''>";
                    html += "<div class='invalid-feedback'>Ingresar Título Imagen</div>";
                    html += "</div>";
                    html += "<div class='col-md-12 form-group'>";
                    html += "<label for='namecategory'>Imagen:</label>";
                    html += "<input type='file' class='form-control-file' name='imagenHomeActualizar' required=''>";
                    html += "<div class='invalid-feedback'>Ingresar Imagen</div>";
                    html += "</div>";
                    html += "<div class='col-md-12'>";
                    html += "<img class='w-100' id='imagenHomeActual' src='" + baseUrl() + "/images/imagen-home/" + srcImagen + "' />";
                    html += "</div>";
                    html += "</div>";
                    html += "<button class='btn btn-outline-success' type='submit'>";
                    html += "<span class='btn-icon-wrapper pr-2 opacity-7'>";
                    html += "<i class='fa fa-save fa-w-20'></i>";
                    html += "</span>Actualizar";
                    html += "</button>";
                    html += "</form>";

                mostrarModal("", "Formulario Actualizar Categoría", html);
                validarEnviarFormulario(control.frmActualizarImagenHome,obj.actualizarImagenHome);
            })
        }
    },

    actualizarImagenHome: function(form){
        const obj = imagenHomeView;
        const link = obj.link;

        let imagenActual = _getAtrribute(_id("imagenHomeActual"),"src");

        let formData = new FormData(form);
        formData.append("imagenHomeActual",imagenActual);
        formData.append("actualizarImagenHome",true);

        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaActualizarImagenHome);
    },

    respuestaActualizarImagenHome:function(rpta){
        const obj = imagenHomeView;
        if (rpta != "0") {
            if(rpta == "1|1"){
                mostrarMensaje("success", "Se actualizó la Imagen del Home");
                ocultarModal();
                obj.listarImagenHome();
            }else{
                mostrarMensaje("warning", "Se actualizó el titulo, pero la imagen no se pudo grabar")
            }
        } else {
            mostrarMensaje("error", "Ocurrio un error");
        }
    },

    eliminarImagenHome: function(){
        const obj = imagenHomeView;
        const control = obj.control;
        const link = obj.link;
        
        let buttonEliminar = _cname(control.btnEliminarImgHome);

        for(let i = 0; i < buttonEliminar.length; i++){
            let button = buttonEliminar[i];
            button.addEventListener("click",function(e){
                e.preventDefault();
                let idImagen = _getAtrribute(button,"data-id");

                sendDataAjax("POST",link.productoController,false,"idImagen="+ idImagen + "&eliminarImagenHome=true",obj.respuestaEliminarHome);
            })
        }
    },

    respuestaEliminarHome: function(rpta){
        const obj = imagenHomeView;

        if(rpta === "1"){
            mostrarMensaje("success", "Se eliminó la Imagen");
            obj.listarImagenHome();    
        }else{
            mostrarMensaje("error", "Ocurrio un error");
        }
    },
}

document.addEventListener("DOMContentLoaded", function () {
    imagenHomeView.inicializarDom();

})