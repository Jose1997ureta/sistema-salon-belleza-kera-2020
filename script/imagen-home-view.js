let imagenHomeView = {
    propiedad: {
        listarHomeES: [],
        listarHomeEN: [],
        listarHomeRU: [],
        listarHomeFR: [],
    },

    session: {

    },

    link: {
        productoController: "controller/imagen-home-controller.php",
    },

    control: {
        lstImagenHomeES: "listarImagenHomeES",
        lstImagenHomeEN: "listarImagenHomeEN",
        lstImagenHomeRU: "listarImagenHomeRU",
        lstImagenHomeFR: "listarImagenHomeFR",
        frmRegistrarImagenHomeES: "formRegistrarImagenHomeES",
        frmRegistrarImagenHomeEN: "formRegistrarImagenHomeEN",
        frmRegistrarImagenHomeRU: "formRegistrarImagenHomeRU",
        frmRegistrarImagenHomeFR: "formRegistrarImagenHomeFR",
        frmActualizarImagenHome: "formActualizarImagenHome",
        btnEliminarImgHome: "eliminar-elemento",
        btnActualizarImgHome: "modificar-elemento",
        tipoLang: "tipoLang",
    },

    inicializarDom: function(){
        const obj = imagenHomeView;
        const control = obj.control;

        validarEnviarFormulario(control.frmRegistrarImagenHomeES,obj.registrarImagenHome);
        validarEnviarFormulario(control.frmRegistrarImagenHomeEN,obj.registrarImagenHome);
        validarEnviarFormulario(control.frmRegistrarImagenHomeRU,obj.registrarImagenHome);
        validarEnviarFormulario(control.frmRegistrarImagenHomeFR,obj.registrarImagenHome);
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
        const control = obj.control;

        let tipoLangR = form.firstElementChild.firstElementChild.firstElementChild.nextElementSibling.value;
        let tituloImagenR = "";

        if(tipoLangR == "es"){
            tituloImagenR = CKEDITOR.instances.tituloImagenES.getData();
        }else if(tipoLangR == "en"){
            tituloImagenR = CKEDITOR.instances.tituloImagenEN.getData();
        }else if(tipoLangR == "ru"){
            tituloImagenR = CKEDITOR.instances.tituloImagenRU.getData();
        }else{
            tituloImagenR = CKEDITOR.instances.tituloImagenFR.getData();
        }
        

        let formData = new FormData(form);
        formData.append("tituloImagenR",tituloImagenR);
        formData.append("registrarImagenHome",true);

        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaRegistroImagenHome);
    },

    respuestaRegistroImagenHome: function (rpta) {
        const obj = imagenHomeView;
        const control = obj.control;

        if (rpta != "0") {
            _id(control.frmRegistrarImagenHomeES).reset();
            _id(control.frmRegistrarImagenHomeEN).reset();
            _id(control.frmRegistrarImagenHomeRU).reset();
            _id(control.frmRegistrarImagenHomeFR).reset();
            CKEDITOR.instances.tituloImagenES.setData('');
            CKEDITOR.instances.tituloImagenEN.setData('');
            CKEDITOR.instances.tituloImagenRU.setData('');
            CKEDITOR.instances.tituloImagenFR.setData('');

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
        const obj = imagenHomeView;
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
                    propiedad.listarHomeES.push(data[0] + '|' + data[1] + '|' + data[2] + '|' + data[3] + '|' + data[4]);
                }else if(data[1] === "en"){
                    propiedad.listarHomeEN.push(data[0] + '|' + data[1] + '|' + data[2] + '|' + data[3] + '|' + data[4]);
                }else if(data[1] === "ru"){
                    propiedad.listarHomeRU.push(data[0] + '|' + data[1] + '|' + data[2] + '|' + data[3] + '|' + data[4]);
                }else{
                    propiedad.listarHomeFR.push(data[0] + '|' + data[1] + '|' + data[2] + '|' + data[3] + '|' + data[4]);
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

    tablaImagen: function(lista,contenedor){
        const obj = imagenHomeView;
        const control = obj.control;
        
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
        if(lista !== ""){
            for(let i = 0; i < lista.length; i++){
                let data = lista[i].split("|");
    
                tabla += "<tr>";
                tabla += "<td style='width: 150px;'>";
                tabla += "<div class='d-flex justify-content-center'>";
                tabla += "<button class='btn btn-outline-warning mr-2 modificar-elemento' data-id='" + data[0] + "' data-titulo='" + data[2] + "' data-src='" + data[3] + "'  data-ruta-imagen='" + data[4] + "' data-toggle='modal' data-target='#exampleModal'>";
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
                tabla += "<td>" + data[2] + "</td>";
                tabla += "<td><img src='"+ baseUrl() +"/imagenes/imagen-home/"+ data[3] +"' width='50'></td>";
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

        _id(contenedor).innerHTML = tabla;
        
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
                let rutaImagen = _getAtrribute(btn,"data-ruta-imagen");

                let html = "<form class='needs-validation' id='formActualizarImagenHome' novalidate='' autocomplete='off'>";
                    html += "<div class='form-row form-group'>";
                    html += "<div class='col-md-12'>";
                    html += "<label for='tituloImagenEditar'>Descripción:</label>";
                    html += "<input type='hidden' name='idImagenHome' value='" + idImage + "'>";
                    html += "<textarea class='form-control form-control-sm mb-3' id='tituloImagenEditar' required=''></textarea>";
                    html += "<div class='invalid-feedback'>Ingresar Título Imagen</div>";
                    html += "</div>";
                    html += "<div class='col-md-12 form-group mt-3'>";
                    html += "<label for='namecategory'>Imagen:</label>";
                    html += "<input type='file' class='form-control-file' name='imagenHomeActualizar' id='imagenHomeActualizar' required=''>";
                    html += "<div class='invalid-feedback'>Ingresar Imagen</div>";
                    html += "</div>";
                    html += "<div class='col-md-12 mb-3'>";
                    html += "<img style='width:400px' id='imagenHomeActual' data-img='" + srcImagen + "' src='" + baseUrl() + "/imagenes/imagen-home/" + srcImagen + "' />";
                    html += "</div>";
                    html += "<div class='col-md-12'>";
                    html += "<input type='text' class='form-control' name='rutaImagenActualizar' id='rutaImagenActualizar' value='" + rutaImagen + "'/>";
                    html += "</div>";
                    html += "</div>";
                    html += "<button class='btn btn-outline-success' type='submit'>";
                    html += "<span class='btn-icon-wrapper pr-2 opacity-7'>";
                    html += "<i class='fa fa-save fa-w-20'></i>";
                    html += "</span>Actualizar";
                    html += "</button>";
                    html += "</form>";

                mostrarModal("large", "Formulario Actualizar Categoría", html);

                CKEDITOR.replace('tituloImagenEditar');
                CKEDITOR.instances.tituloImagenEditar.setData(tituloImagen);

                if(srcImagen != ""){
                    _removeAttribute(_id("imagenHomeActualizar"),"required");
                }
                validarEnviarFormulario(control.frmActualizarImagenHome,obj.actualizarImagenHome);
            })
        }
    },

    actualizarImagenHome: function(form){
        const obj = imagenHomeView;
        const link = obj.link;

        let imagenActual = _getAtrribute(_id("imagenHomeActual"),"data-img");
        let tituloImagenEditar = CKEDITOR.instances.tituloImagenEditar.getData();

        let formData = new FormData(form);
        formData.append("imagenHomeActual",imagenActual);
        formData.append("tituloImagenEditar",tituloImagenEditar);
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

    CKEDITOR.replace('tituloImagenES');
    CKEDITOR.replace('tituloImagenEN');
    CKEDITOR.replace('tituloImagenRU');
    CKEDITOR.replace('tituloImagenFR');

    CKEDITOR.config.height = '100px';

    imagenHomeView.inicializarDom();

})

if(_id("cerrarSession") != undefined || _id("cerrarSession") != null){
    _id("cerrarSession").addEventListener("click",function(e){
        e.preventDefault();
    
        sendDataAjax("POST","controller/trabajador-controller.php",false,"cerrarSession=true",mostrarRespuesta());
    })
}

function mostrarRespuesta(){
        window.location = baseUrl() + "/view/login";
}
