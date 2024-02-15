<!-- Modal -->
<div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
          <form action="<?=SITE_ROOT?>functions/login.php" method="post" class="form-signin">
          <img class="mb-4 mt-4 g--width-180" src="<?= IMGS_ROOT ?>logo.png" alt="logo" >
          <h1 class="h3 mb-3 font-weight-normal"><?=$langTxt["modal"]["please"]?></h1>
          <input type="text" name="usuario"id="usuario" class="form-control mb-3 mx-auto g--max-width-300" placeholder="<?=$langTxt["modal"]["usuario"]?>" required autofocus>
          <input type="password" name="contrasenya"id="contrasenya" class="form-control mx-auto g--max-width-300 mb-4" placeholder="<?=$langTxt["modal"]["password"]?>" required>
          <button class="g--btn-erutan mb-5" type="submit" name="bIniciarSesion"><?=$langTxt["modal"]["btn"]?></button>
          <p><?=$langTxt["modal"]["noCuenta"]?><a href="<?= SITE_ROOT ?>pages/registration.php"><?=$langTxt["modal"]["aqui"]?></a></p>
          <div class="d-none" id="languageForModal" value="<?=$lang?>"><?=$lang?></div>
        </form>
      </div>
      <div class="modal-footer d-none">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=$langTxt["modal"]["close"]?></button> -->
        <input class="btn btn-primary btn-large btn-block" type="submit" value="Entrar">
      </div>
    </div>
  </div>
</div>



<!--sweetAlertTemplate-->
<script src="<?= LIBS_ROOT ?>sweetAlert.js"></script>
<script src="<?=JS_ROOT?>sweetAlertTemplate.js" type="text/javascript"></script>

  <?php
      if( isset($_GET["user"]) && $_GET["user"] == "ko" ){
  ?>
      <script>
          const modalLanguage =document.getElementById('languageForModal').innerHTML;
          showAlert("error", (modalLanguage)=='en' ? "Credentials error" :"Error en las credenciales", (modalLanguage)=='en' ? "The credentials are not correct, please check the username and password and try again." : "Las credenciales no son correctas, por favor, compruebe el usuario y la contraseña y vuelva a intentarlo.");
      </script>
  <?php
      }
  ?>