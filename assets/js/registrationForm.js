const registrationForm = document.getElementById("registrationForm");
const nameInput = document.getElementById("nameForm");
const usernameInput = document.getElementById("usernameForm");
const emailInput = document.getElementById("emailForm");
const phoneInput = document.getElementById("phoneForm");
const countryInput = document.getElementById("countryForm");
const cityInput = document.getElementById("cityForm");
const passwordInput = document.getElementById("passwordForm");
const passwordConfirmationInput = document.getElementById("passwordConfirmationForm");
const languageForSweetAlert = document.getElementById("languageForSweetAlert").innerHTML;


//Funciones para los sweet alerts
const successAlert = (txt) => {
    showAlert("success", (languageForSweetAlert == "en") ? "Thank you!" : "¡Muchas gracias!", txt);
}
const incompleteAlert = (txt) => {
    showAlert("warning", (languageForSweetAlert == "en") ? "Incomplete Action" : "Acción Incompleta", txt);
}
const registeredEmailAlert = (txt) => {
    showAlert("error", (languageForSweetAlert == "en") ? "Registered Email" : "Email Registrado", txt);
}
const registererErrorRegexAlert = (txt) => {
    showAlert("error", (languageForSweetAlert == "en") ? "Problem with the data" : "Problema con los datos", txt);
}

//Funciones para validar las funciones
function validarNombre() {
    if (nameInput.value.trim() === "") {
        incompleteAlert((languageForSweetAlert == "en") ? "It is mandatory to fill the name field" : "Es obligatorio rellenar el campo nombre");
        return false;
    }
    return true;
}
function validarUsername() {
    if (usernameInput.value.trim() === "") {
        incompleteAlert((languageForSweetAlert == "en") ? "It is mandatory to fill the username field" : "Es obligatorio rellenar el campo usuario");
        return false;
    }
    return true;
}
function validarPais() {
    if (countryInput.value.trim() === "") {
        incompleteAlert((languageForSweetAlert == "en") ? "It is mandatory to fill the country field" : "Es obligatorio rellenar el campo pais");
        return false;
    }
    return true;
}
function validarCiudad() {
    if (cityInput.value.trim() === "") {
        incompleteAlert((languageForSweetAlert == "en") ? "It is mandatory to fill the city field" : "Es obligatorio rellenar el campo ciudad");
        return false;
    }
    return true;
}
function validarTelefono() {
    if (phoneInput.value.trim() === "") {
        incompleteAlert((languageForSweetAlert == "en") ? "It is mandatory to fill the phone field" : "Es obligatorio rellenar el campo télefono");
        return false;
    }
    return true;
}
function validarContrasenya() {
    if (passwordInput.value.trim() === "") {
        incompleteAlert((languageForSweetAlert == "en") ? "It is mandatory to fill the password field" : "Es obligatorio rellenar el campo contrasenya");
        return false;
    }
    return true;
}
function validarContrasenyaDos() {
    if (passwordConfirmationInput.value.trim() === "") {
        incompleteAlert((languageForSweetAlert == "en") ? "It is mandatory to fill the password field" : "Es obligatorio rellenar el campo contrasenya");
        return false;
    }
    return true;
}

function validarEmail() {
    const email = emailInput.value.trim();
    if (email === "") {
        incompleteAlert((languageForSweetAlert == "en") ? "Empty email field" : "Falta por rellenar el email");
        return false;
    }
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        incompleteAlert((languageForSweetAlert == "en") ? "Enter a valid email" : "Introduce un email válido");
        return false;
    }
    return true;
}

function verificarContrasenyas() {
    if (passwordInput.value !== passwordConfirmationInput.value) {
        incompleteAlert((languageForSweetAlert == "en") ? "Password do not match" : "Las contraseñas no coinciden");
        return false;
    }
    return true;
}





const validateMailRegistrationForm = (token) => {
    const email = document.getElementById("emailForm").value;
    validator.isEmpty(email) || !validator.isEmail(email) ? responseKo() : validateRegistrationForm(token, email);
}

//Funcion para la validacion CaptchaV3
const validateRegistrationForm = (tokenResponse, email) => {
    const formDataValidateRegistrationForm = new FormData();
    formDataValidateRegistrationForm.append("token", tokenResponse);
    let requestOptions = {
        method: 'POST',
        body: formDataValidateRegistrationForm,
        redirect: 'follow'
    };
    fetch("http://erutan.test/functions/reCAPTCHAvalidator.php", requestOptions)
        .then(response => response.text())
        .then(result => JSON.parse(result))
        .then(data => (data.success === true) ? checkMailRegistration(email) : ((data.dataError == "2") ? showAlert("error", "SPAM", "Ha sido detectado como spam. Si no es usted un robot pongase en contacto con nosotros.") : responseKo("validator")))
        .catch(error => responseKo(error));
}

//Funcion para comprobar que el email no esta registrado
const checkMailRegistration = (email) => {
    const formDataCheckMail = new FormData();
    formDataCheckMail.append("email", email);
    let requestOptions = {
        method: 'POST',
        body: formDataCheckMail,
        redirect: 'follow'
    };
    fetch("http://erutan.test/functions/checkMailRegistration.php", requestOptions)
        .then(response => response.text())
        .then(result => JSON.parse(result))
        .then(data => (data.dataError == "0") ? ((data.exist === false) ? regexRegistrationForm() : registeredEmailAlert((languageForSweetAlert == "en") ? "The email entered has been previously registered" : "El email introducido ya ha sido registrado")) : responseKo(error))
        .catch(error => responseKo(error));
}

//Funcion para añadir la solicitud de newsletter
const addRegistrationForm = () => {

    let formdataAccesibilidadForm = new FormData();
    formdataAccesibilidadForm.append("name", document.getElementById("nameForm").value);
    formdataAccesibilidadForm.append("username", document.getElementById("usernameForm").value);
    formdataAccesibilidadForm.append("email", document.getElementById("emailForm").value);
    formdataAccesibilidadForm.append("phone", document.getElementById("phoneForm").value);
    formdataAccesibilidadForm.append("country", document.getElementById("countryForm").value);
    formdataAccesibilidadForm.append("city", document.getElementById("cityForm").value);
    formdataAccesibilidadForm.append("password", document.getElementById("passwordForm").value);

    let requestOptions = {
        method: 'POST',
        body: formdataAccesibilidadForm,
        redirect: 'follow'
    };

    fetch("http://erutan.test/functions/addRegistration.php", requestOptions)
        .then(response => response.text())
        .then(result => JSON.parse(result))
        .then(result => {
            (result.success === true) ?
                successAlert((languageForSweetAlert == "en") ? "Successful registration, you are now a member of the Erutan :)" : "Te has registrado correctamente, ahora eres miembro de Erutan :)") : responseKo(result.dataError)
                .then(cleanForm(newsletterForm))
                setTimeout(() => {
                    location.reload();
                }, 1600);
        })
        .catch(error => responseKo(error));
}


const regexRegistrationForm = () => {

    let formdataAccesibilidadForm = new FormData();
    formdataAccesibilidadForm.append("name", document.getElementById("nameForm").value);
    formdataAccesibilidadForm.append("username", document.getElementById("usernameForm").value);
    formdataAccesibilidadForm.append("email", document.getElementById("emailForm").value);
    formdataAccesibilidadForm.append("phone", document.getElementById("phoneForm").value);
    formdataAccesibilidadForm.append("country", document.getElementById("countryForm").value);
    formdataAccesibilidadForm.append("city", document.getElementById("cityForm").value);
    formdataAccesibilidadForm.append("password", document.getElementById("passwordForm").value);

    let requestOptions = {
        method: 'POST',
        body: formdataAccesibilidadForm,
        redirect: 'follow'
    };

    fetch("http://erutan.test/functions/validateRegistration.php", requestOptions)
        .then(response => response.text())
        .then(result => JSON.parse(result))
        .then(result => {
            (result.success === true) ? addRegistrationForm() : registererErrorRegexAlert((languageForSweetAlert == "en") ? "There was an error while registering data" : "Ha habido un error al registrar los datos")
        })
        .catch(error => responseKo(error));

}