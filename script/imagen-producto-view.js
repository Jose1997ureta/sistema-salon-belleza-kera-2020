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
        frmRegistrarImagenProducto: "formRegistrarImagenProducto",
        btnEliminarImgProducto: "eliminar-elemento",
    },

    inicializarDom: function(){
        const obj = imagenProductoView;
        const control = obj.control;

        validarEnviarFormulario(control.frmRegistrarImagenProducto,obj.registrarImagenProducto);
        obj.listarImagenProducto();
    },

    listarImagenProducto: function(){
        const obj = imagenProductoView;
        const control = obj.control;
        const link = obj.link;

        let idProducto = _id(control.idProducto).value;

        sendDataAjax("POST",link.productoController,false,"idProducto="+ idProducto +"&listarImagenProducto=true",obj.mostrarTablaImagen);
    },

    registrarImagenProducto: function(form){
        const obj = imagenProductoView;
        const control = obj.control;
        const link = obj.link;

        let idProducto = _id(control.idProducto).value;

        let formData = new FormData(form);
        formData.append("idProducto",idProducto);
        formData.append("registrarImagenProducto",true);

        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaRegistroImagenProducto);
    },

    respuestaRegistroImagenProducto: function (rpta) {
        const obj = imagenProductoView;
        const control = obj.control;

        if (rpta != "0") {
            _id(control.frmRegistrarImagenProducto).reset();
            if(rpta == "1|1"){
                mostrarMensaje("success", "Se registró la imagen producto")
            }else{
                mostrarMensaje("warning", "Se registró el producto, pero la imagen no se pudo grabar")
            }
            obj.listarImagenProducto();
        } else {
            mostrarMensaje("error", "Ocurrio un error");
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
                tabla += "<td><img src='"+ baseUrl() +"/imagenes/producto/"+ data[2] +"' width='50'></td>";
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

        _id(control.lstImagenProducto).innerHTML = tabla;

        obj.eliminarImagenProducto();
    },

    eliminarImagenProducto: function(){
        const obj = imagenProductoView;
        const control = obj.control;
        const link = obj.link;
        
        let buttonEliminar = _cname(control.btnEliminarImgProducto);

        for(let i = 0; i < buttonEliminar.length; i++){
            let button = buttonEliminar[i];
            button.addEventListener("click",function(e){
                e.preventDefault();
                let idImagen = _getAtrribute(button,"data-id");

                sendDataAjax("POST",link.productoController,false,"idImagen="+ idImagen + "&eliminarImagenProducto=true",obj.respuestaEliminarProducto);
            })
        }
    },

    respuestaEliminarProducto: function(rpta){
        const obj = imagenProductoView;

        if(rpta === "1"){
            mostrarMensaje("success", "Se eliminó el producto");
            obj.listarImagenProducto();    
        }else{
            mostrarMensaje("error", "Ocurrio un error");
        }
    },
}

document.addEventListener("DOMContentLoaded", function () {
    imagenProductoView.inicializarDom();

})