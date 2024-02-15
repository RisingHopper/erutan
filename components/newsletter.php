<!--CAPCHA-->
<script src="https://www.google.com/recaptcha/api.js?render=<?= $claves["publica"] ?>"></script>


<div class="col-md-12 bg-dark d-flex flex-wrap text-white g--border-inset">
    <div class="d-none d-md-block col-4 g--bg-img-newsletter"></div>
    <div class="col-12 col-md-8">
        <h2 class="text-center mt-3 mb-3 fw-bold"><?=$langTxt["newsletter"]["title"]?></h2>
        <p class="px-2 px-md-5 g--font-size-20"><?=$langTxt["newsletter"]["texto"]?></p>

        <form id="newsletterForm" class="px-2 px-md-5 mb-3" method="POST">
            <div class="mb-3 d-md-flex d-block">
                <div class="col-12 col-md-3 me-2 mb-2 mb-md-0">
                    <input type="text"  class="form-control inputFormValidator g--height-40" name="nombre" id="nameForm" placeholder=<?=$langTxt["newsletter"]["name"]?>>
                </div>
                <div class="col-12 col-md-4 me-2 mb-2">
                    <input type="email" class="form-control inputFormValidator g--height-40" name="email" id="emailForm" placeholder=<?=$langTxt["newsletter"]["email"]?>>
                </div>
                <div class="col-12 col-md-3">
                    <input type="phone" class="form-control inputFormValidator g--height-40" name="phone" id="phoneForm" placeholder=<?=$langTxt["newsletter"]["tlf"]?>>
                </div>
            </div>
            <div id="languageForSweetAlert" class="d-none" value="<?php echo $_SESSION['lang']?>"><?php echo $_SESSION['lang']?></div>
            <button type="submit" class="g--height-40 px-5" ><?=$langTxt["newsletter"]["btn"]?></button>
        </form>

    </div>  
</div>


<!--Validator-->
<script src="<?=LIBS_ROOT?>validator.min.js"></script>
<!--Forms-->
<script src="<?=JS_ROOT?>forms.js"></script>
<!--Sweet alert-->
<script src="<?=LIBS_ROOT?>sweetAlert.js"></script>
<script src="<?=JS_ROOT?>sweetAlertTemplate.js"></script>
<!--Newsletter Form js-->
<script src="<?=JS_ROOT?>newsletterForm.js?rand=<?= time(); ?>"></script>

<script>
    grecaptcha.ready(function() {
        document.getElementById('newsletterForm').addEventListener("submit", function(event) {
            event.preventDefault();
            if(validarNombre() && validarEmail() && validarTelefono()){
                grecaptcha.execute(
                    "<?= $claves["publica"] ?>", {
                        action: "newsletterForm"
                    }
                ).then(function(token) {
                    validateMailNewsletterForm(token);
                });
            }
        }, false);
    });
</script>