let productoView = {
    propiedad: {
        listarProducto: [],
    },

    session: {

    },

    link: {
        productoController: "controller/producto-controller.php",
    },

    control: {
        txtTiProductoES: "tipoProductoES",
        txtNombreProductoES: "nombreProductoES",
        txtDescripcionProductoES: "descripcionProductoES",
        txtDesItemProductoES: "descripcionItemProductoES",
        txtTituloBeneficioES: "tituloBeneficioES",
        txtDesBeneficiosES: "descripcionBeneficiosES",
        txtTituloPrincipiosActivosES: "tituloPrincipiosActivosES",
        txtDesPrincipiosActivosES: "descripcionPrincipiosActivosES",

        txtTiProductoEN: "tipoProductoEN",
        txtNombreProductoEN: "nombreProductoEN",
        txtDescripcionProductoEN: "descripcionProductoEN",
        txtDesItemProductoEN: "descripcionItemProductoEN",
        txtTituloBeneficioEN: "tituloBeneficioEN",
        txtDesBeneficiosEN: "descripcionBeneficiosEN",
        txtTituloPrincipiosActivosEN: "tituloPrincipiosActivosEN",
        txtDesPrincipiosActivosEN: "descripcionPrincipiosActivosEN",

        txtTiProductoRU: "tipoProductoRU",
        txtNombreProductoRU: "nombreProductoRU",
        txtDescripcionProductoRU: "descripcionProductoRU",
        txtDesItemProductoRU: "descripcionItemProductoRU",
        txtTituloBeneficioRU: "tituloBeneficioRU",
        txtDesBeneficiosRU: "descripcionBeneficiosRU",
        txtTituloPrincipiosActivosRU: "tituloPrincipiosActivosRU",
        txtDesPrincipiosActivosRU: "descripcionPrincipiosActivosRU",

        txtTiProductoFR: "tipoProductoFR",
        txtNombreProductoFR: "nombreProductoFR",
        txtDescripcionProductoFR: "descripcionProductoFR",
        txtDesItemProductoFR: "descripcionItemProductoFR",
        txtTituloBeneficioFR: "tituloBeneficioFR",
        txtDesBeneficiosFR: "descripcionBeneficiosFR",
        txtTituloPrincipiosActivosFR: "tituloPrincipiosActivosFR",
        txtDesPrincipiosActivosFR: "descripcionPrincipiosActivosFR",

        imgProductoResultado: "imagenProductoResultado",
        txtRutaProductoVideo: "rutaProductoVideo",

        frmRegistrarProducto: "formRegistrarProducto",
        idProducto: "idProducto",
        editarFormulario: false,
    },

    inicializarDom: function(){
        const obj = productoView;
        const control = obj.control;
        const link = obj.link;

        // validarEnviarFormulario(control.frmRegistrarProducto,obj.registrarProducto);

        // sendDataAjax("POST",link.productoController,false,"listarDataProducto=true",obj.listarDataProducto);
        // validarEnviarFormulario(control.formRegistrarImagenProducto,obj.agregarImagenProductoSession);
        
        //====================== SECCION DE EDITAR ================
        if(!validarEmptyNullElement(control.idProducto,true)){
            validarEnviarFormulario(control.formRegistrarProducto,obj.registrarProducto);
        }else{
            // validarEnviarFormulario(control.formActualizarProducto,obj.actualizarProducto);
            control.editarFormulario = true;
            control.idProducto = _id(control.idProducto).value;
            sendDataAjax("POST",link.productoController,false,"idProducto=" + control.idProducto + "&listarProductoId=true",obj.respuestaListarProductoId);
        }
    },

    // listarDataProducto:function(rpta){
    //     const obj = productoView;
    //     const control = obj.control;
    //     const propiedad = obj.propiedad;
        
    //     let lista = rpta.split("^");
    //     propiedad.listarCategoria = lista[0];
    //     propiedad.listarMarca = lista[1];
    //     propiedad.listarColor = lista[2];

    //     crearCombobox(propiedad.listarCategoria,control.cboCategoriaProducto);
    //     crearCombobox(propiedad.listarMarca,control.cboMarcaProducto);
    //     crearCombobox(propiedad.listarColor,control.cboColorProducto);

    //     obj.obtenerListaImagenProductoCarrito();
    // },

    respuestaListarProductoId: function(rpta){
        const obj = productoView;
        const control = obj.control;

        let data = rpta.split("^");
        let producto = data[0].split("|");

        _id(control.txtRutaProductoVideo).value = producto[2];

        _id(control.txtTiProductoES).value = producto[4];
        _id(control.txtNombreProductoES).value = producto[5];
        _id(control.txtDescripcionProductoES).value = producto[6];
        CKEDITOR.instances.descripcionItemProductoES.setData(producto[7]);
        _id(control.txtTituloBeneficioES).value = producto[8];
        CKEDITOR.instances.descripcionBeneficiosES.setData(producto[9]);
        _id(control.txtTituloPrincipiosActivosES).value = producto[10];
        CKEDITOR.instances.descripcionPrincipiosActivosES.setData(producto[11]);

        _id(control.txtTiProductoEN).value = producto[12];
        _id(control.txtNombreProductoEN).value = producto[13];
        _id(control.txtDescripcionProductoEN).value = producto[14];
        CKEDITOR.instances.descripcionItemProductoEN.setData(producto[15]);
        _id(control.txtTituloBeneficioEN).value = producto[16];
        CKEDITOR.instances.descripcionBeneficiosEN.setData(producto[17]);
        _id(control.txtTituloPrincipiosActivosEN).value = producto[18];
        CKEDITOR.instances.descripcionPrincipiosActivosEN.setData(producto[19]);
  
        _id(control.txtTiProductoRU).value = producto[20];
        _id(control.txtNombreProductoRU).value = producto[21];
        _id(control.txtDescripcionProductoRU).value = producto[22];
        CKEDITOR.instances.descripcionItemProductoRU.setData(producto[23]);
        _id(control.txtTituloBeneficioRU).value = producto[24];
        CKEDITOR.instances.descripcionBeneficiosRU.setData(producto[25]);
        _id(control.txtTituloPrincipiosActivosRU).value = producto[26];
        CKEDITOR.instances.descripcionPrincipiosActivosRU.setData(producto[27]);

        _id(control.txtTiProductoFR).value = producto[28];
        _id(control.txtNombreProductoFR).value = producto[29];
        _id(control.txtDescripcionProductoFR).value = producto[30];
        CKEDITOR.instances.descripcionItemProductoFR.setData(producto[31]);
        _id(control.txtTituloBeneficioFR).value = producto[32];
        CKEDITOR.instances.descripcionBeneficiosFR.setData(producto[33]);
        _id(control.txtTituloPrincipiosActivosFR).value = producto[34];
        CKEDITOR.instances.descripcionPrincipiosActivosFR.setData(producto[35]);
        // obj.obtenerListaImagenProductoCarrito();
    },

    registrarProducto: function (form) {
        const obj = productoView;
        const link = obj.link;

        let txtdesItemProductoES = CKEDITOR.instances.descripcionItemProductoES.getData();
        let txtdesBeneficiosES = CKEDITOR.instances.descripcionBeneficiosES.getData();
        let txtdesPrincipiosActivosES = CKEDITOR.instances.descripcionPrincipiosActivosES.getData();

        let txtdesItemProductoEN = CKEDITOR.instances.descripcionItemProductoEN.getData();
        let txtdesBeneficiosEN = CKEDITOR.instances.descripcionBeneficiosEN.getData();
        let txtdesPrincipiosActivosEN = CKEDITOR.instances.descripcionPrincipiosActivosEN.getData();

        let txtdesItemProductoRU = CKEDITOR.instances.descripcionItemProductoRU.getData();
        let txtdesBeneficiosRU = CKEDITOR.instances.descripcionBeneficiosRU.getData();
        let txtdesPrincipiosActivosRU = CKEDITOR.instances.descripcionPrincipiosActivosRU.getData();

        let txtdesItemProductoFR = CKEDITOR.instances.descripcionItemProductoFR.getData();
        let txtdesBeneficiosFR = CKEDITOR.instances.descripcionBeneficiosFR.getData();
        let txtdesPrincipiosActivosFR = CKEDITOR.instances.descripcionPrincipiosActivosFR.getData();


        let formData = new FormData(form);
        formData.append("desItemProductoES",txtdesItemProductoES);
        formData.append("desBeneficiosES",txtdesBeneficiosES);
        formData.append("desPrincipiosActivosES",txtdesPrincipiosActivosES);
        formData.append("desItemProductoEN",txtdesItemProductoEN);
        formData.append("desBeneficiosEN",txtdesBeneficiosEN);
        formData.append("desPrincipiosActivosEN",txtdesPrincipiosActivosEN);
        formData.append("desItemProductoRU",txtdesItemProductoRU);
        formData.append("desBeneficiosRU",txtdesBeneficiosRU);
        formData.append("desPrincipiosActivosRU",txtdesPrincipiosActivosRU);
        formData.append("desItemProductoFR",txtdesItemProductoFR);
        formData.append("desBeneficiosFR",txtdesBeneficiosFR);
        formData.append("desPrincipiosActivosFR",txtdesPrincipiosActivosFR);
        formData.append("registrarProducto",true);

        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaRegistroProducto);
    },

    actualizarProducto: function (form) {
        const obj = productoView;
        const control = obj.control;
        const link = obj.link;

        let formData = new FormData(form);
        formData.append("idProducto", control.idProducto);
        formData.append("actualizarProducto", true);

        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaActualizarProducto);
    },

    respuestaRegistroProducto: function (rpta) {
        const obj = productoView;
        const control = obj.control;
        let data = rpta.split("|");

        if (rpta != "0") {
            mostrarMensaje("success", "Se registró el producto");

        } else {
            mostrarMensaje("error", "Ocurrio un error");
        }
    },

    respuestaActualizarProducto: function (rpta) {
        const obj = productoView;
        const control = obj.control;
        let data = rpta.split("|");

        if (rpta != "0") {
            mostrarMensaje("success", "Se actualizo el producto");
            _id(control.txtNombreProductoColor).value = data[2];
            _addAtrribute(_id(control.txtNombreProductoColor),"data-id",data[1]);

        } else {
            mostrarMensaje("error", "Ocurrio un error");
        }
    },

    agregarImagenProductoSession: function(form){
        const obj = productoView;
        const control = obj.control;
        const link = obj.link;

        let idProductoColor = _getAtrribute(_id(control.txtNombreProductoColor),"data-id");
        let cboNombrecolor = obtenerTextoSelect(control.cboColorProducto);

        let formData = new FormData(form);
        formData.append("idProductoColor",idProductoColor);
        formData.append("colorProducto",cboNombrecolor);
        formData.append("agregarImagenProductoCarrito", true);
        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaAgregarImagenProductoCarrito);
    },

    respuestaAgregarImagenProductoCarrito: function(rpta){
        const obj = productoView;

        let rptaMensaje = rpta;

        if(rptaMensaje === "0|1"){
            mostrarMensaje("success", "Se agregó la imagen");
        }else if(rptaMensaje === "0|0"){
            mostrarMensaje("error", "No se ha podido agregar la imagen");
        }else if(rptaMensaje === "1|0"){
            mostrarMensaje("error", "No se ha podido agregar la imagen");
        }else if(rptaMensaje === "1|1"){
            mostrarMensaje("warning", "La imagen ya ha sido agregado");
        }

        obj.obtenerListaImagenProductoCarrito();

    },

    obtenerListaImagenProductoCarrito: function(){
        const obj = productoView;
        const link = obj.link;

        sendDataAjax("POST",link.productoController,false,"listarImagenProductoCarrito=true",obj.mostrarTablaImagen);
    },

    mostrarTablaImagen: function(rpta){
        const obj = productoView;
        const control = obj.control;

        let lista = rpta.split("~");

        let cabecera = "Operaciones|Producto|Color|Imagen";
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
                tabla += "<button class='btn btn-outline-danger eliminar-elemento' data-id='" + data[0] +"|"+data[2]+"|"+data[4]+"'>";
                tabla += "<span class='btn-icon-wrapper pr-2 opacity-7'>";
                tabla += "<i class='fa fa-trash-alt fa-w-20'></i>";
                tabla += "</span>Eliminar";
                tabla += "</button>";
                tabla += "</td>";
                tabla += "<td>" + data[1] + "</td>";
                tabla += "<td>" + data[3] + "</td>";
                tabla += "<td><img src='"+ baseUrl() +"/images/producto/"+ data[4] +"' width='50'></td>";
                tabla += "</tr>";
            }
    
            tabla += "</tbody>";
            tabla += "</table>";

            if(control.editarFormulario == true){
                tabla += "<button class='btn btn-outline-success' id='buttonActualizarDetalleImagen'><span class='btn-icon-wrapper pr-2 opacity-7'>";
                tabla += "<i class='fa fa-save fa-w-20'></i>";
                tabla +="</span>Actualizar Imagen</button>";
            }else{
                tabla += "<button class='btn btn-outline-primary' id='buttonRegistrarDetalleImagen'><span class='btn-icon-wrapper pr-2 opacity-7'>";
                tabla += "<i class='fa fa-save fa-w-20'></i>";
                tabla +="</span><span>Registrar Imagen</button>";
            }

        }else{
            tabla += "<tr>";
            tabla += "<td class='text-center' colspan='" + cabecera.length +"'>No hay Información Registrada</td>";
            tabla += "</tr>";
            tabla += "</tbody>";
            tabla += "</table>";
        }

        _id("listarImagenProducto").innerHTML = tabla;

        obj.eliminarImagenProductoCarrito();
        obj.registrarDetalleImagen();
        obj.actualizarDetalleImagen();
    },

    eliminarImagenProductoCarrito: function(){
        const obj = productoView;
        const control = obj.control;
        const link = obj.link;

        let buttonEliminar = _cname(control.buttonEliminarProducto);
        let nButtonEliminar = buttonEliminar.length;

        for(let i = 0; i < nButtonEliminar; i++){
            let button = buttonEliminar[i];
            button.addEventListener("click",function(e){
                e.preventDefault();
                let id = button.getAttribute("data-id");

                sendDataAjax("POST",link.productoController,false,"id=" + id + "&eliminarImagenProductoCarrito=true",obj.respuestaEliminarImagenProductoCarrito);

            })
        }
    },

    respuestaEliminarImagenProductoCarrito: function(rpta){
        const obj = productoView;
        
        obj.obtenerListaImagenProductoCarrito();

        if(rpta == "1|1"){
            mostrarMensaje("success", "Se eliminó la imagen");
        }else if(rpta == "1|0"){
            mostrarMensaje("error", "No se ha podido eliminar la imagen");
        }
    },

    registrarDetalleImagen: function(){
        const obj = productoView;
        const control = obj.control;
        const link = obj.link;
        
        if(validarEmptyNullElement(control.btnRegistrarDetalleImagen,true)){
            _id(control.btnRegistrarDetalleImagen).addEventListener("click",function(e){
                e.preventDefault();
                
                sendDataAjax("POST",link.productoController,false,"registrarDatosImagenes=true",obj.respuestaRegistrarImagen);
            })
        }
    },

    respuestaRegistrarImagen: function(rpta){
        const obj = productoView;
        if(rpta == "1"){
            mostrarMensaje("success", "Se registrarón las imagenes");
            obj.obtenerListaImagenProductoCarrito();
        }else{
            mostrarMensaje("error", "No se ha podido registrar las imagenes");
        }
    },

    actualizarDetalleImagen: function(){
        const obj = productoView;
        const control = obj.control;
        const link = obj.link;
        
        if(validarEmptyNullElement(control.btnActualizarDetalleImagen,true)){
            _id(control.btnActualizarDetalleImagen).addEventListener("click",function(e){
                e.preventDefault();
                
                sendDataAjax("POST",link.productoController,false,"registrarDatosImagenes=true&eliminarImagen="+control.idProducto,obj.respuestaRegistrarImagen);
            })
        }
    },
}

document.addEventListener("DOMContentLoaded", function () {
    CKEDITOR.replace('descripcionItemProductoES');
    CKEDITOR.replace('descripcionBeneficiosES');
    CKEDITOR.replace('descripcionPrincipiosActivosES');
    
    CKEDITOR.replace('descripcionItemProductoEN');
    CKEDITOR.replace('descripcionBeneficiosEN');
    CKEDITOR.replace('descripcionPrincipiosActivosEN');

    CKEDITOR.replace('descripcionItemProductoRU');
    CKEDITOR.replace('descripcionBeneficiosRU');
    CKEDITOR.replace('descripcionPrincipiosActivosRU');

    CKEDITOR.replace('descripcionItemProductoFR');
    CKEDITOR.replace('descripcionBeneficiosFR');
    CKEDITOR.replace('descripcionPrincipiosActivosFR');

    CKEDITOR.config.height = '100px';
    productoView.inicializarDom();

})