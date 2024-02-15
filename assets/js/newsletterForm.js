const newsletterForm        = document.getElementById("newsletterForm");
const emailInput            = document.getElementById("emailForm");
const nameInput             = document.getElementById("nameForm");
const phoneInput            = document.getElementById("phoneForm");
const languageForSweetAlert = document.getElementById("languageForSweetAlert").innerHTML;

//Funciones para los sweet alerts
const successAlert = (txt) => {
    showAlert( "success", ( languageForSweetAlert == "en" ) ? "Thank you!" : "¡Muchas gracias!", txt );
}
const incompleteAlert = (txt) => {
    showAlert( "warning", ( languageForSweetAlert == "en" ) ? "Incomplete Action" : "Acción Incompleta", txt );
}
const registeredEmailAlert = (txt) => {
    showAlert( "error",   ( languageForSweetAlert == "en" ) ? "Registered Email" : "Email Registrado", txt );
}

//Funciones para validar las funciones
function validarNombre() {
    if (nameInput.value.trim() === "") {
        incompleteAlert( ( languageForSweetAlert == "en" ) ? "It is mandatory to fill the name field" : "Es obligatorio rellenar el campo nombre" );
        return false;
    }
    return true;
}
function validarTelefono() {
    if (phoneInput.value.trim() === "") {
        alert('ref');
        incompleteAlert( ( languageForSweetAlert == "en" ) ? "It is mandatory to fill the phone field" : "Es obligatorio rellenar el campo télefono" );
        return false;
    }
    return true;
}
function validarEmail() {
    const email = emailInput.value.trim();
    if (email === "") {
      incompleteAlert( ( languageForSweetAlert == "en" ) ? "Empty email field" : "Falta por rellenar el email" );
      return false;
    }
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      incompleteAlert( ( languageForSweetAlert == "en" ) ? "Enter a valid email" : "Introduce un email válido" );
      return false;
    }
    return true;
}
  




const validateMailNewsletterForm = (token) =>{
    const email = document.getElementById("emailForm").value;
    validator.isEmpty( email ) || !validator.isEmail( email ) ? responseKo() : validateNewsletterForm(token, email);
}

//Funcion para la validacion CaptchaV3
const validateNewsletterForm = (tokenResponse, email) =>{
    const formDataValidateNewsletterForm = new FormData();
    formDataValidateNewsletterForm.append("token", tokenResponse);
    let requestOptions = {
        method: 'POST',
        body: formDataValidateNewsletterForm,
        redirect: 'follow'
    };
    fetch("http://erutan.test/functions/reCAPTCHAvalidator.php", requestOptions)
        .then(response => response.text())
        .then(result =>  JSON.parse(result))
        .then(data => (data.success === true) ? checkMailNewsletter(email) : ( (data.dataError == "2") ? showAlert("error", "SPAM", "Ha sido detectado como spam. Si no es usted un robot pongase en contacto con nosotros.") : responseKo("validator") ) )
        .catch(error =>  responseKo(error)); 
}

//Funcion para comprobar que el email no esta registrado
const checkMailNewsletter = (email) => {
  const formDataCheckMail = new FormData();
  formDataCheckMail.append("email", email);
  let requestOptions = {
      method: 'POST',
      body: formDataCheckMail,
      redirect: 'follow'
  };
  fetch("http://erutan.test/functions/checkMailNewsletter.php", requestOptions)
        .then(response => response.text())
        .then(result =>  JSON.parse(result))
        .then(data => (data.dataError == "0") ? ( (data.exist === false) ? addSatisfaccionForm(email) : registeredEmailAlert( ( languageForSweetAlert == "en" ) ? "The email entered has been previously registered" : "El email introducido ya ha sido registrado" )) : responseKo(error) )
        .catch(error =>  responseKo(error)); 
}

//Funcion para añadir la solicitud de newsletter
const addSatisfaccionForm = () => {

    let formdataAccesibilidadForm = new FormData();
    formdataAccesibilidadForm.append("name", document.getElementById("nameForm").value);
    formdataAccesibilidadForm.append("email", document.getElementById("emailForm").value);
    formdataAccesibilidadForm.append("phone", document.getElementById("phoneForm").value);

    let requestOptions = {
        method: 'POST',
        body: formdataAccesibilidadForm,
        redirect: 'follow'
    };
    
    fetch("http://erutan.test/functions/addNewsletter.php", requestOptions)
        .then(response => response.text())
        .then(result =>  JSON.parse(result))
        .then(result => {
        (result.success === true) ? 
        successAlert( ( languageForSweetAlert == "en" ) ? "You have successfully registered for the newsletter" : "Te has registrado correctamente a la newsletter" ) : responseKo(result.dataError)
        .then(cleanForm(newsletterForm))
        setTimeout(() => {
            location.reload();
        }, 1600); 
        })
        .catch(error => responseKo(error));
}