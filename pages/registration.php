<?php
  include "../functions/config.php";
  session_start();
  include "../functions/setLang.php";
  include "../functions/getLang.php";
  include "../locale/". $lang . "/" . $lang . ".php";
  $pageTitle= "Registration";
  include "../components/header.php";
  include '../functions/claves.php';
  isset($_SESSION['nivel_usuario']) ? header('Location: ../index.php') : null;
  $navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
  include $navbarInclude;
?>
<!--CAPCHA-->
<script src="https://www.google.com/recaptcha/api.js?render=<?= $claves["publica"] ?>"></script>




  <!-- inicio -->

  <div class="container-fluid g--bg-img-form g-width-55x px-md-5 my-4 col-12 col-md-9">
    <form method="post" id="registrationForm">
      <fieldset>
      <legend class="text-center g--font-size-55 mb-2 mb-md-4"><?=$langTxt["registro"]["titulo"]?> <strong>The erutan</strong></legend>
      <div class="container">


          <div class="row d-flex justify-content-center mb-0 mb-md-1">
              <div class="col-12 col-md-6 d-flex flex-column mb-3">
                <label for="nameForm" class="fw-bold g--font-size-20"><?=$langTxt["registro"]["nombre"]?></label>
                <input type="text" name="nameForm" id="nameForm" placeholder="<?=$langTxt["registro"]["nombre"]?>" class="g--height-5vh g--font-size-18 inputFormValidator form-control rounded-0">
              </div>
              <div class="col-12 col-md-6 d-flex flex-column mb-3">
                <label for="usernameForm" class="fw-bold g--font-size-20"><?=$langTxt["registro"]["username"]?></label>
                <input type="text" name="usernameForm" id="usernameForm" placeholder="<?=$langTxt["registro"]["username"]?>" class="g--height-5vh g--font-size-18 inputFormValidator form-control rounded-0">
              </div>
          </div>
          <div class="row d-flex justify-content-center mb-0 mb-md-1">
              <div class="col-12 col-md-6 d-flex flex-column mb-3">
                <label for="emailForm" class="fw-bold g--font-size-20">Email</label>
                <input type="email" name="emailForm" id="emailForm" placeholder="Email" class="g--height-5vh g--font-size-18 inputFormValidator form-control rounded-0">
              </div>
              <div class="col-12 col-md-6 d-flex flex-column mb-3">
                <label for="phoneForm" class="fw-bold g--font-size-20"><?=$langTxt["registro"]["telefono"]?></label>
                <input type="tel" name="phoneForm" id="phoneForm" placeholder="<?=$langTxt["registro"]["telefono"]?>" class="g--height-5vh g--font-size-18 inputFormValidator form-control rounded-0">
              </div>
          </div>
          <div class="row d-flex justify-content-center mb-0 mb-md-1">
              <div class="col-12 col-md-6 d-flex flex-column mb-3">
                <label for="countryForm" class="fw-bold g--font-size-20"><?=$langTxt["registro"]["pais"]?></label>
                <input type="text" name="countryForm" id="countryForm" placeholder="<?=$langTxt["registro"]["pais"]?>" class="g--height-5vh g--font-size-18 inputFormValidator form-control rounded-0">
              </div>
              <div class="col-12 col-md-6 d-flex flex-column mb-3">
                <label for="cityForm" class="fw-bold g--font-size-20"><?=$langTxt["registro"]["ciudad"]?></label>
                <input type="text" name="cityForm" id="cityForm" placeholder="<?=$langTxt["registro"]["ciudad"]?>" class="g--height-5vh g--font-size-18 inputFormValidator form-control rounded-0">
              </div>
          </div>
          <div class="row d-flex justify-content-center mb-0 mb-md-1">
              <div class="col-12 col-md-6 d-flex flex-column mb-3">
                <label for="passwordForm" class="fw-bold g--font-size-20"><?=$langTxt["registro"]["contrasenya"]?></label>
                <input type="password" name="passwordForm" id="passwordForm" placeholder="<?=$langTxt["registro"]["contrasenya2"]?>" class="g--height-5vh g--font-size-18 inputFormValidator form-control rounded-0">
              </div>
              <div class="col-12 col-md-6 d-flex flex-column mb-3">
                <label for="passwordConfirmationForm" class="fw-bold g--font-size-20"><?=$langTxt["registro"]["contrasenya2"]?></label>
                <input type="password" name="passwordConfirmationForm" id="passwordConfirmationForm" placeholder="<?=$langTxt["registro"]["contrasenya2"]?>" class="g--height-5vh g--font-size-18 inputFormValidator form-control rounded-0">
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-4  mx-auto d-flex flex-column my-2 my-md-4 g--font-size-26">
              <div id="languageForSweetAlert" class="d-none" value="<?php echo $_SESSION['lang']?>"><?php echo $_SESSION['lang']?></div>
              <button type="submit" class="py-2 fw-semibold text-white bg-black text-uppercase g--hover-black-text g--hover-bg-white" ><?=$langTxt["registro"]["btn"]?></button>
            </div>
          </div>
        
      </div>
      </fieldset>
    </form>
  </div>

  <!-- fin -->



<?php 
  include "../components/footer.php";
?>


<!--Validator-->
<script src="<?=LIBS_ROOT?>validator.min.js"></script>
<!--Forms-->
<script src="<?=JS_ROOT?>forms.js"></script>
<!--Sweet alert-->
<script src="<?=LIBS_ROOT?>sweetAlert.js"></script>
<script src="<?=JS_ROOT?>sweetAlertTemplate.js"></script>
<!--Newsletter Form js-->
<script src="<?=JS_ROOT?>registrationForm.js?rand=<?= time(); ?>"></script>

<script>
    grecaptcha.ready(function() {
        document.getElementById('registrationForm').addEventListener("submit", function(event) {
            event.preventDefault();
            if(validarNombre() && validarEmail() && validarTelefono() && validarPais() && validarCiudad() && validarUsername() && validarContrasenya() && validarContrasenyaDos() && verificarContrasenyas()){
                grecaptcha.execute(
                    "<?= $claves["publica"] ?>", {
                        action: "registrationForm"
                    }
                ).then(function(token) {
                  validateMailRegistrationForm(token);
                });
            }
        }, false);
    });
</script>