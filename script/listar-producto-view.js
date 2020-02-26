let listarProductoView = {
    propiedad: {
        listarProducto: [],
    },

    session: {

    },

    link: {
        productoController: "controller/producto-controller.php",
    },

    control: {
        lstProducto: "listar_producto",
        modificaElemento: "modificar-elemento",
        eliminarElemento: "eliminar-elemento",
    },

    inicializarDom: function(){
        const obj = listarProductoView;
        const control = obj.control;
        const link = obj.link;

        sendDataAjax("POST",link.productoController,false,"listarProducto=true",obj.listarProducto);
        
    },

    listarProducto: function(rpta){
        const obj = listarProductoView;
        const control = obj.control;

        let data = rpta.split("|");
        crearTabla(data,control.lstProducto,true);
        obj.editarProducto();
        obj.eliminarProducto();
    },

    editarFormulario: function(){
        const obj = listarProductoView;
        const control = obj.control;

        let buttonEditar = _cname(control.modificaElemento);

        for(let i = 0; i < buttonEditar.length; i++){
            let button = buttonEditar[i];
            button.addEventListener("click",function(e){
                e.preventDefault();
                let idProducto = _getAtrribute(button,"data-id");

                window.location = baseUrl + "/producto/" + idProducto;

            })
        }
    },

    eliminarProducto: function(){
        const obj = listarProductoView;
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
}

document.addEventListener("DOMContentLoaded", function () {
    listarProductoView.inicializarDom();
})