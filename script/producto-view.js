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

        imagenProductoResultado: "imagenProductoResultado",
        txtRutaProductoVideo: "rutaProductoVideo",

        frmRegistrarProducto: "formRegistrarProducto",
        idProducto: "idProducto",
        containerImgResultado: "containerImagenResultado",
        containerAgregarImagen: "containerAgregarImagen",
        imgProductoResultado: "imgProductoResultado",
        btnAgregarImagen: "btnAgregarImagen",
        editarFormulario: false,
    },

    inicializarDom: function(){
        const obj = productoView;
        const control = obj.control;
        const link = obj.link;

        //====================== SECCION DE EDITAR ================
        if(_id(control.idProducto).value == ""){
            validarEnviarFormulario(control.frmRegistrarProducto,obj.registrarProducto);
        }else{
            control.editarFormulario = true;
            let idProducto = _id(control.idProducto).value;
            sendDataAjax("POST",link.productoController,false,"idProducto=" + idProducto + "&listarProductoId=true",obj.respuestaListarProductoId);

            _removeClass(_id(control.containerAgregarImagen),"d-none");
            _addClass(_id(control.containerAgregarImagen),"d-flex");

            _id(control.btnAgregarImagen).addEventListener("click",function(e){
                e.preventDefault();
    
                window.location = baseUrl() + "/view/imagen-producto/" + idProducto;
            })
        }
    },

    respuestaListarProductoId: function(rpta){
        const obj = productoView;
        const control = obj.control;

        if(rpta !== ""){
            let producto = rpta.split("|");

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

            if(producto[1] !== ""){
                _removeClass(_id(control.containerImgResultado),"d-none");
                _addAttribute(_id(control.imgProductoResultado),"src", baseUrl() + "/images/producto/" + producto[1]);
                _addAttribute(_id(control.imgProductoResultado),"data-src",producto[1]);
                _removeAttribute(_id(control.imagenProductoResultado),"required");
            }else{
                _addClass(_id(control.containerImgResultado),"d-none");
                _addAttribute(_id(control.imagenProductoResultado),"requered",true);
            }
            
            validarEnviarFormulario(control.frmRegistrarProducto,obj.actualizarProducto);
        }else{
            window.location = baseUrl() + '/view/listar-producto';
        }

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

        let imgProductoResultado = _getAtrribute(_id(control.imgProductoResultado),"data-src");

        let idProducto = _id(control.idProducto).value;

        let formData = new FormData(form);
        formData.append("idProducto",idProducto);
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

        formData.append("imgProductoResultado",imgProductoResultado);
        formData.append("actualizarProducto",true);

        sendDataAjax("POST", link.productoController, true, formData, obj.respuestaActualizarProducto);
    },

    respuestaRegistroProducto: function (rpta) {
        const obj = productoView;
        const control = obj.control;

        if (rpta != "0") {
            _id(control.frmRegistrarProducto).reset();

            CKEDITOR.instances.descripcionItemProductoES.setData('');
            CKEDITOR.instances.descripcionBeneficiosES.setData('');
            CKEDITOR.instances.descripcionPrincipiosActivosES.setData('');

            CKEDITOR.instances.descripcionItemProductoEN.setData('');
            CKEDITOR.instances.descripcionBeneficiosEN.setData('');
            CKEDITOR.instances.descripcionPrincipiosActivosEN.setData('');

            CKEDITOR.instances.descripcionItemProductoRU.setData('');
            CKEDITOR.instances.descripcionBeneficiosRU.setData('');
            CKEDITOR.instances.descripcionPrincipiosActivosRU.setData('');

            CKEDITOR.instances.descripcionItemProductoFR.setData('');
            CKEDITOR.instances.descripcionBeneficiosFR.setData('');
            CKEDITOR.instances.descripcionPrincipiosActivosFR.setData('');

            if(rpta == "1|1"){
                mostrarMensaje("success", "Se registró el producto")
            }else{
                mostrarMensaje("warning", "Se registró el producto, pero la imagen no se pudo grabar")
            }
        } else {
            mostrarMensaje("error", "Ocurrio un error");
        }
    },

    respuestaActualizarProducto: function (rpta) {
        if (rpta != "0") {
            if(rpta == "1|1"){
                mostrarMensaje("success", "Se actualizó el producto");
                _addClass(_id(this.control.containerImgResultado),"hide");
            }else{
                mostrarMensaje("warning", "Se actualizó el producto, pero la imagen no se pudo grabar")
            }
        } else {
            mostrarMensaje("error", "Ocurrio un error");
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