let baseUrl = () => "http://localhost/ProyectosWeb-2019/Sistema-Salon-Belleza-Kera-2020";

let baseImagen = () => "../images/";

let _cname = (value) => document.getElementsByClassName(value);

let _id = (value) => document.getElementById(value);

let _log = (value) => console.log(value);

let _tag = (value) => document.getElementsByTagName(value);

let _addAttribute = (elemento, attribute, value) => elemento.setAttribute(attribute, value);

let _getAtrribute = (elemento, attribute) => elemento.getAttribute(attribute);

let _removeAttribute = (elemento, value) => elemento.removeAttribute(value);

let _addClass = (elemento, className) => elemento.classList.add(className);

let _removeClass = (elemento, className) => elemento.classList.remove(className);

let validarEnviarFormulario = (idForm, callback) => {
    let form = _id(idForm);

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        e.stopPropagation();

        if (form.checkValidity() === true) {
            callback(form);
            form.classList.remove('was-validated');
        }else{
            form.classList.add('was-validated');
        }
    })
}

let validateString = (event) => {

    var keyCode = event.keyCode || event.which;

    var expr = /^[a-zA-ZáéíóúÁÉÍÓÚÑñ ]$/;

    var esValido = expr.test(String.fromCharCode(keyCode));
    if (!esValido) {
        event.preventDefault();
    }
    return true;
}

let validateNumber = (event) => {
    
    let key = window.Event ? event.which : event.keyCode
    if (key >= 48 && key <= 57){
        return true;
    }else{
        event.preventDefault();
    }
}

let validateDouble = (event) => {
    var key = window.Event ? event.which : event.keyCode
    if (key >= 46 && key <= 57 && key !== 47){
        return true;
    }else{
        event.preventDefault();
    }
}

let showElement = (value) => {
    let className = [..._cname(value)];

    return className.map(className => className.classList.remove("d-none"));
}

let hiddenElement = (value) => {
    let className = [..._cname(value)];

    return className.map(className => className.classList.add("d-none"));
}

let cleanControl = (value, formValue) => {

    let className = [..._cname(value)];

    if (formValue !== null && formValue !== "" && formValue !== undefined) {
        let form = [..._cname(formValue)];
        form.map(form => form.classList.remove("was-validated"));
    }

    return className.map(className => className.value = '');
}

let sendDataAjax = (method, url, isFormData, parameters, callback) => {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (this.readyState === 4 && this.status === 200) {
                return callback(this.responseText);
            }
        },
        xhr.open(method, `${baseUrl()}/${url}`, true);
    if (isFormData !== true) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    xhr.send(parameters);
}

let crearTabla = (lista, contenedor,buttonEditarModal) => {
    let tabla = "";
    let tablaCabecera = [];
    let tablaData = [];
    for (let i = 0; i < lista.length; i++) {
        if (i == 0) {
            tablaCabecera = lista[i].split("|");
        } else {
            tablaData.push(lista[i].split("|"));
        }
    }

    tabla += "<table class='table table-bordered'>";
    tabla += "<thead class='text-center'>";
    tabla += "<tr>";

    for (let i = 0; i < tablaCabecera.length; i++) {
        tabla += "<th>" + tablaCabecera[i] + "</th>";
    }

    tabla += "</tr>"
    tabla += "<tbody class='text-center'>";

    if (tablaData == "") {
        tabla += "<tr>";
        tabla += "<td class='text-center' colspan='" + tablaCabecera.length +"'>No hay Información Registrada</td>";
        tabla += "</tr>";
    } else {
        for (let i = 0; i < tablaData.length; i++) {
            let data = tablaData[i];
            tabla += "<tr>";
            for (let j = 0; j < data.length; j++) {
                if (j == 0) {
                    tabla += "<td>";
                    tabla += "<div class='d-flex justify-content-center'>";
                    tabla += "<button type='button' class='btn btn-outline-warning mr-2 modificar-elemento' data-id='" + data[0] +"'";
                    (buttonEditarModal == true) ? tabla += "data-toggle='modal' data-target='#exampleModal'>" : tabla += ">";
                    tabla += "<span class='btn-icon-wrapper pr-2 opacity-7'>";
                    tabla += "<i class='fa fa-edit fa-w-20'></i>";
                    tabla += "</span>Editar";
                    tabla += "</button>";
                    tabla += "<button class='btn btn-outline-danger eliminar-elemento' data-id='" + data[0] +"'>";
                    tabla += "<span class='btn-icon-wrapper pr-2 opacity-7'>";
                    tabla += "<i class='fa fa-trash-alt fa-w-20'></i>";
                    tabla += "</span>Eliminar";
                    tabla += "</button>";
                    tabla += "</div>";
                    tabla += "</div>";
                } else if (data[j] == 'Activo' || data[j] == 'Inactivo') {
                    tabla += "<td class='text-center'>";
                    tabla += "<input type='checkbox' data-id='" + data[0] + "'  class='estado-elemento'"; 
                    data[j] == 'Activo' ? tabla +="checked" : tabla += "";
                    tabla += ">";
                    tabla += "</td>";

                } else {
                    tabla += "<td>" + data[j] + "</td>";
                }
            }

            tabla += "</tr>";
        }
    }

    tabla += "</tbody>";
    tabla += "</table>";

    _id(contenedor).innerHTML = tabla;
}

let mostrarMensaje = (tipo, title) => {

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    switch (tipo) {
        case "error":
            Toast.fire({
                icon: 'error',
                title: title
            })
            break;

        case "warning":
            Toast.fire({
                icon: 'warning',
                title: title
            })
            break;

        default:
            Toast.fire({
                icon: 'success',
                title: title
            })
            break;
    }

}

let confirmarMensajeAjax = (title, text, url ,parameters, callback) => {
    Swal.fire({
        title: title,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar'
    }).then((result) => {
        if (result.value) {
            sendDataAjax("POST", url, false, parameters, callback);
        }
    })
}

let mostrarModal = (tipoModal, titleModal, data) => {
    let modalName = "";
    let modalType = "";
    let modal = "";

    switch (tipoModal) {
        case "large":
            modalName = "bd-example-modal-lg";
            modalType = "modal-lg"
            break;

        case "small":
            modalName = "bd-example-modal-sm";
            modalType = "modal-sm"
            break;

        default:
            modal = "";
            modalType = ""
            break;
    }

    modal += "<div class='modal fade" + modalName + "' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
    modal += "<div class='modal-dialog "+ modalType + "' role='document'>";
    modal += "<div class='modal-content'>";
    modal += "<div class='modal-header'>";
    modal += "<h5 class='modal-title' id='exampleModalLabel'>" + titleModal + "</h5>";
    modal += "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
    modal += "<span aria-hidden='true'>×</span>";
    modal += "</button>";
    modal += "</div>";
    modal += "<div class='modal-body'>";
    modal += data;
    modal += "</div>";
    modal += "</div>";
    modal += "</div>";
    modal += "</div>";

    _id("contenedor-modal").innerHTML = modal;
}

let ocultarModal = () => {

    _removeClass(_tag("BODY")[0], "modal-open");
    _removeAttribute(_tag("BODY")[0], "style");

    _removeClass(_id("exampleModal"), "show");
    _addAttribute(_id("exampleModal"), "style", "display:none");
    _removeAttribute(_id("exampleModal"), "aria-model");
    _addAttribute(_id("exampleModal"), "aria-hidden", true);

    _cname("modal-backdrop")[0].parentNode.removeChild(_cname("modal-backdrop")[0]);

}

let crearCombobox = (lista,idContenedor,indiceInicio) => {
    
    let combobox = "";

    if(validarEmptyNullElement(lista)){
        let listaData = lista.split("~");

        for(let i = 0; i < listaData.length; i++){
            let data = listaData[i].split("|");
            if(indiceInicio == data[0]){
                combobox += "<option selected>" + data[1] + "</option>";
            }else{
                combobox += "<option value='"+ data[0] +"'>" + data[1] + "</option>";
            }
        }
    }else{
        combobox += "<option>-- Seleccionar --</option>";
    }

    _id(idContenedor).innerHTML = combobox;
  
}

let obtenerTextoSelect = (value) =>{
    let cbo = _id(value);
    let select = cbo.options[cbo.selectedIndex].text;

    return select;
}

let validarFormatoArchivo = () => {

}

let validarEmptyNullElement = (value,control) => {
    let elemento;
    if(control != null && control != undefined){
        elemento = _id(value);
    }else{
        elemento = value;
    }

    if(elemento != null && elemento != undefined && elemento != ""){
        return true;
    }
}

let getDateNow = () => {
    date = new Date();
    let dia = date.getDate();
    let mes = date.getMonth() + 1;
    let year = date.getFullYear();
    
    if(dia < 10) dia = '0' + dia;
    if(mes < 10) mes = '0' + mes;
    
    let fecha = year + '-' + mes + '-' + dia;
    
    return fecha;
}
