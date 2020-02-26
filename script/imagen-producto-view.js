let imagenProductoView = {
    propiedad: {
        listarProducto: [],
    },

    session: {

    },

    link: {
        productoController: "controller/producto-controller.php",
    },

    control: {
        idProducto: "idProducto",
        lstImagenProducto: "listarImagenProducto",
    },

    inicializarDom: function(){
        const obj = imagenProductoView;
        const control = obj.control;

        validarEnviarFormulario(control.frmRegistrarProducto,obj.registrarProducto);
        obj.listarImagenProducto();
    },

    listarImagenProducto: function(){
        const obj = imagenProductoView;
        const control = obj.control;

        let idProducto = _id(control.idProducto).value;

        sendDataAjax("POST",link.productoController,false,"idProducto="+ idProducto +"&listarImagenProducto=true",obj.mostrarImagenProducto);
    },

    mostrarImagenProducto: function(rpta){
        const obj = imagenProductoView;
        const control = obj.control;

        let data = rpta.split("|");
        obj.eliminarProducto();
    },

    eliminarProducto: function(){
        const obj = imagenProductoView;
        const control = obj.control;
        
        let buttonEliminar = _cname(control.eliminarElemento);

        for(let i = 0; i < buttonEliminar.length; i++){
            let button = buttonEliminar[i];
            button.addEventListener("click",function(e){
                e.preventDefault();
                let idProducto = _getAtrribute(button,"data-id");

                sendDataAjax("POST",link.productoController,false,"idProducto="+ idProducto + "&eliminarProducto=true",obj.respuestaEliminarProducto);
            })
        }
    },

    mostrarTablaImagen: function(rpta){
        const obj = imagenProductoView;
        const control = obj.control;

        let lista = rpta.split("~");

        let cabecera = "Operaciones|Producto|Imagen";
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
                tabla += "<button class='btn btn-outline-danger eliminar-elemento' data-id='" + data[0] + "'>";
                tabla += "<span class='btn-icon-wrapper pr-2 opacity-7'>";
                tabla += "<i class='fa fa-trash-alt fa-w-20'></i>";
                tabla += "</span>Eliminar";
                tabla += "</button>";
                tabla += "</td>";
                tabla += "<td>" + data[1] + "</td>";
                tabla += "<td><img src='"+ baseUrl() +"/images/producto/"+ data[2] +"' width='50'></td>";
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

        _id("listarImagenProducto").innerHTML = tabla;

        obj.eliminarProducto();
    },

    eliminarImagenProductoCarrito: function(){
        const obj = imagenProductoView;
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
        const obj = imagenProductoView;

        obj.obtenerListaImagenProductoCarrito();

        if(rpta == "1|1"){
            mostrarMensaje("success", "Se eliminó la imagen");
        }else if(rpta == "1|0"){
            mostrarMensaje("error", "No se ha podido eliminar la imagen");
        }
    },

    registrarDetalleImagen: function(){
        const obj = imagenProductoView;
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
        const obj = imagenProductoView;
        if(rpta == "1"){
            mostrarMensaje("success", "Se registrarón las imagenes");
            obj.obtenerListaImagenProductoCarrito();
        }else{
            mostrarMensaje("error", "No se ha podido registrar las imagenes");
        }
    },

    actualizarDetalleImagen: function(){
        const obj = imagenProductoView;
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
    imagenProductoView.inicializarDom();

})