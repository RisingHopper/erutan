/**Funcion template para mostrar un sweetAlert
 * @param {string} type success || error || warning || info || question
 * @param {string} title Titulo del sweetAlert.
 * @param {string} text Texto a mostrar en el cuerpo del sweetAlert.
 * @param {string} buttonText Texto que muestra el boton de cerrar. Por defecto "cerrar".
 * @param {boolean} showConfirmButton Condición para mostar un boton inferior. Por defecto "false".
 * @param {boolean} showCloseButton Condición para mostrar una cruz en la esquina superior. Por defecto "true".
*/
function showAlert(type, title, text, buttonText="Cerrar", showConfirmButton=false, showCloseButton=true){
    Swal.fire({
        icon: type,
        title: title,
        text: text,
        confirmButtonText: buttonText,
        showConfirmButton: showConfirmButton,
        showCloseButton: showCloseButton
    });
}