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
        txtDescripcionProducto: "descripcionProductoES",

        frmRegistrarProducto: "formRegistrarProducto",
        idProducto: "idProducto",
        editarFormulario: false,
    },

    inicializarDom: function(){
        const obj = productoView;
        const control = obj.control;
        const link = obj.link;

        validarEnviarFormulario(control.frmRegistrarProducto,obj.registrarProducto);

        // sendDataAjax("POST",link.productoController,false,"listarDataProducto=true",obj.listarDataProducto);
        // validarEnviarFormulario(control.formRegistrarImagenProducto,obj.agregarImagenProductoSession);
        
        //====================== SECCION DE EDITAR ================
        // if(!validarEmptyNullElement(control.idProducto,true)){
        //     validarEnviarFormulario(control.formRegistrarProducto,obj.registrarProducto);
        // }else{
        //     validarEnviarFormulario(control.formActualizarProducto,obj.actualizarProducto);
        //     control.editarFormulario = true;
        //     control.idProducto = _id(control.idProducto).value;
        //     sendDataAjax("POST",link.productoController,false,"idProducto=" + control.idProducto + "&listarProductoId=true",obj.respuestaListarProductoId);
        // }
        
        // _id(control.txtPrecioProducto).addEventListener("keypress", (event) => {
        //     validateDouble(event);
        // })

        // _id(control.txtCantidadProducto).addEventListener("keypress", (event) =>{
        //     validateNumber(event);
        // })

        // _id(control.chkStockProducto).addEventListener("change",() => {
        //     let checbox = _id(control.chkStockProducto);
        //     let contenedor = _id(control.contenedorCantidadProducto);
        //     let cantidadProducto = _id(control.txtCantidadProducto);
        //     if(checbox.checked === true){
        //         _removeClass(contenedor,"d-none");
        //         _addAtrribute(cantidadProducto,"required",true);
        //     }else{
        //         _addClass(contenedor,"d-none");
        //         _removeAttribute(cantidadProducto,"required");
        //     }
        // })
    },

    listarDataProducto:function(rpta){
        const obj = productoView;
        const control = obj.control;
        const propiedad = obj.propiedad;
        
        let lista = rpta.split("^");
        propiedad.listarCategoria = lista[0];
        propiedad.listarMarca = lista[1];
        propiedad.listarColor = lista[2];

        crearCombobox(propiedad.listarCategoria,control.cboCategoriaProducto);
        crearCombobox(propiedad.listarMarca,control.cboMarcaProducto);
        crearCombobox(propiedad.listarColor,control.cboColorProducto);

        obj.obtenerListaImagenProductoCarrito();
    },

    respuestaListarProductoId: function(rpta){
        const obj = productoView;
        const control = obj.control;

        let data = rpta.split("^");
        let producto = data[0].split("|");

        _id(control.cboCategoriaProducto).value = producto[1];
        _id(control.txtNombreProducto).value = producto[2];
        _id(control.txtNombreProductoColor).value = producto[2];
        _addAtrribute(_id(control.txtNombreProductoColor),"data-id",producto[0]);
        _id(control.txtModeloProducto).value = producto[3];
        _id(control.cboMarcaProducto).value = producto[4];
        _id(control.txtPrecioProducto).value = producto[5];
        if(producto[6] != "0"){
            _id(control.chkStockProducto).checked = true;
            _removeClass(_id(control.contenedorCantidadProducto),"d-none");
            _id(control.txtCantidadProducto).value = producto[7];
        }else{
            _id(control.chkStockProducto).checked = false;
            _addClass(_id(control.contenedorCantidadProducto),"d-none");
            _id(control.txtCantidadProducto).value = producto[7];
        }

        if(producto[8] != "0"){
            _id(control.chkNuevoProducto).checked = true;
        }else{
            _id(control.chkNuevoProducto).checked = false;
        }
        _id(control.txtDescripcionProducto).value = producto[9];

        if(producto[10] != "0"){
            _id(control.chkEstadoProducto).checked = true;
        }else{
            _id(control.chkEstadoProducto).checked = false;
        }

        obj.obtenerListaImagenProductoCarrito();
    },

    registrarProducto: function (form) {
        const obj = productoView;
        const link = obj.link;

        console.log(CKEDITOR.instances.descripcionItemProductoES.getData())

        // let formData = new FormData(form);
        // formData.append("registrarProducto", true);

        // sendDataAjax("POST", link.productoController, true, formData, obj.respuestaRegistroProducto);
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
            _id(control.txtNombreProductoColor).value = data[2];
            _addAtrribute(_id(control.txtNombreProductoColor),"data-id",data[1]);

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