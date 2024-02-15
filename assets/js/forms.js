/**Recogemos las constantes de las clases que utilizaremos a lo largo del script.
*/
const inputsForm    = document.getElementsByClassName( "inputFormValidator" );
const btnsForm      = document.getElementsByClassName( "btnFormValidator" );
const btnsVerPass   = document.getElementsByClassName("btnVerPass");
const dateInputs    = document.getElementsByClassName("dateOnFocus");
const timeInputs    = document.getElementsByClassName("timeOnFocus");
/**Función para validar los inputs según su tipo.
 * @param {element} input 
*/
const inputValidation = (input) => {
    let inputValue = input.value;
    let inputType  = input.type;
    switch ( inputType ) {
        case "text":
        case "password":
        case "textarea":
        case "number":
            validator.isEmpty( inputValue ) ? disableButtons(btnsForm, input) : enableButtons(btnsForm, input);
            break;
        case "email":
            validator.isEmpty( inputValue ) || !validator.isEmail( inputValue ) ? disableButtons(btnsForm, input) : enableButtons(btnsForm, input);
            break;
        case "tel":
            validator.isEmpty( inputValue ) || !validator.isMobilePhone( inputValue ) ? disableButtons(btnsForm, input) : enableButtons(btnsForm, input);
            break;
        case "date":
            validator.isEmpty( inputValue ) || !validator.isDate( inputValue ) ? disableButtons(btnsForm, input) : enableButtons(btnsForm, input);
            validator.isEmpty( inputValue ) ? input.type="text" : input.type="date";
            break;
        case "time":
            validator.isEmpty( inputValue ) || !validator.isTime( inputValue ) ? disableButtons(btnsForm, input) : enableButtons(btnsForm, input);
            validator.isEmpty( inputValue ) ? input.type="text" : input.type="time";
            break;
    }
    if( input.classList.contains("IDCard") )
       !validator.isIdentityCard(inputValue, "any") || validator.isEmpty(inputValue) ? disableButtons(btnsForm, input) : enableButtons(btnsForm, input);
    if( input.classList.contains("postalCode") )
        !validator.isPostalCode(inputValue, "any") || validator.isEmpty(inputValue) ? disableButtons(btnsForm, input) : enableButtons(btnsForm, input);
    
}
/**Función para hacer "disable" todos los botones con la clase "btnFormValidator", añadir clase "is-invalid" y eliminar la clase "is-valid" en el input que no es válido.
 * @param {HTMLCollection} btnsForm  Todos los botones con la clase "btnFormValidator".
 * @param {element} element Por defecto "null".
*/
const disableButtons = (btnsForm, element = null) => {
    Array.prototype.forEach.call(btnsForm, btnForm => {
        btnForm.disabled = true;
    });
    if (element!=null){
        element.classList.remove("is-valid");
        element.classList.add("is-invalid");
    }
}
/**Función para hacer "enable" todos los botones con la clase "btnFormValidator", añadir clase "is-valid" y eliminar la clase "is-invalid" en el input que es válido.
 * @param {HTMLCollection} btnsForm Todos los botones con la clase "btnFormValidator".
 * @param {element} element Por defecto "null".
*/
const enableButtons = (btnsForm, element = null) => {
    Array.prototype.forEach.call(btnsForm, btnForm => {
        btnForm.disabled = false;
    });
    if (element!=null){
        element.classList.remove("is-invalid");
        element.classList.add("is-valid");
    }
}
/**Función para añadir la función "toggleVerPass" on mouseup|mousedown.
 * @param {HTMLCollection} btns Todos los botones con la clase "btnVerPass".
*/
const addVerPass = (btns) =>{
    Array.prototype.forEach.call(btns, btnVerPass => {
        let inputPassword = btnVerPass.parentElement.parentElement.getElementsByClassName("form-control")[0];
        btnVerPass.addEventListener('mousedown',() => {inputPassword.type = "text"});
        btnVerPass.addEventListener('mouseup', () => {inputPassword.type = "password"});
    });
}
/**Función para añadir la función "inputValidation" on blur.
 * @param {HTMLCollection} inputs Todos los botones con la clase "inputsForm".
*/
const addInputValidation = (inputs) =>{
    Array.prototype.forEach.call(inputs, input => {
        if(typeof input != "undefined")
            input.addEventListener('blur', (event) => { inputValidation(event.target)} );
    });
}
/**Función para hacer un input type date on focus.
 * @param {HTMLCollection} inputs Todos los botones con la clase "dateInputs".
*/
const addDateOnFocus = (inputs) =>{
    Array.prototype.forEach.call(inputs, input => {
        input.addEventListener('focus', () => {input.type = "date"});
    });
}
/**Función para hacer un input type date on focus.
 * @param {HTMLCollection} inputs Todos los botones con la clase "timeInputs".
*/
const addTimeOnFocus = (inputs) =>{
    Array.prototype.forEach.call(inputs, input => {
        input.addEventListener('focus', () => {input.type = "time"});
    });
}
/**Funcion para mostrar el mensaje de KO básico.
*/
const responseKo = () =>{
    showAlert("error", "Algo salio mal", "Vuelve a intentarlo más tarde, si el problema persiste ponte en contacto con nosotros.");
}
/**Funcion para mostrar el mensaje de OK básico.
*/
const responseOk = (result, txtSuccess) =>{
    result == "ok" ? showAlert("success", "¡Muchas gracias!", txtSuccess) : responseKo();
}
/**Funcion para limpiar los campos del formulario
*/
const cleanForm = (form) =>{
    form.reset();
    Array.prototype.forEach.call(inputsForm, input => {
        input.classList.remove("is-valid");
    }); 
}
/*Llamadas*/
disableButtons(btnsForm);
addInputValidation(inputsForm);
addVerPass(btnsVerPass);
addDateOnFocus(dateInputs);
addTimeOnFocus(timeInputs);