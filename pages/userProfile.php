<?php
    include "../functions/config.php";
    session_start();
    include "../functions/setLang.php";
    include "../functions/getLang.php";
    include "../locale/". $lang . "/" . $lang . ".php";
    $pageTitle= "Profile";
    include "../components/header.php";
    $navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
    include $navbarInclude;
    require("../models/BaseModel.php");
?>

<style>
    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }
    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }
    .profile-button:hover {
        background: #682773
    }
    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }
    .profile-button:active {
        background: #682773;
        box-shadow: none
    }
    .back:hover {
        color: #682773;
        cursor: pointer
    }
    .labels {
        font-size: 11px
    }
    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>


<?php

$user = $_GET["user"];
$baseModel = new BaseModel();
$params = $baseModel->consultarUsuarioId($user);
?>



<div class="container-fluid px-0">

    <!-- inicio -->

    <div class="container rounded mt-5 mb-5">

        <div class="row">
            <form class="" action="<?=SITE_ROOT?>functions/updateProfile.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-5 border-right mx-auto bg-white px-0 px-md-5 g--border-black border-bottom-0">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="object-fit:cover;"class="rounded-circle mt-5" width="150px" height="150px" src="<?= $params['profile_picture']?>"><span class="fw-semibold g--font-size-30 text-uppercase"><?php echo $params['username']?></span><span class="text-black-50 g--font-size-22"><?php echo $params['email']?></span><span> </span></div>
                </div>
                <div class="col-md-5 border-right mx-auto bg-white px-0 px-md-5 g--border-black border-top-0">
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="text-right fw-bold text-uppercase"><?=$langTxt["profile"]["perfil"]?></h3>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels g--font-size-16"><?=$langTxt["profile"]["nombre"]?></label>
                                <input name="nombreCompleto" type="text" class="form-control" value="<?php echo $params['name']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <label class="labels g--font-size-16"><?=$langTxt["profile"]["telefono"]?></label>
                                <input name="phone"type="text" class="form-control" value="<?php echo $params['phone']?>">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels g--font-size-16"><?=$langTxt["profile"]["username"]?></label>
                                <input name="username"type="text" class="form-control" value="<?php echo $params['username']?>">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels g--font-size-16"><?=$langTxt["profile"]["email"]?></label>
                                <input name="email" type="text" class="form-control" value="<?php echo $params['email']?>">
                            </div>
                            
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels g--font-size-16"><?=$langTxt["profile"]["pais"]?></label>
                                <input name="pais" type="text" class="form-control" value="<?php echo $params['country']?>">
                            </div>
                            <div class="col-md-6">
                                <label class="labels g--font-size-16"><?=$langTxt["profile"]["ciudad"]?></label>
                                <input name="ciudad" type="text" class="form-control" value="<?php echo $params['city']?>">
                            </div>
                        </div>
                        <div class="d-none" id="languageForModal" value="<?=$lang?>"><?=$lang?></div>
                        <!-- <div class="row mt-3">
                            <label for="multimediaPost" class="form-label g--font-size-16">Multimedia</label>
                            <input class="form-control" type="file" id="multimediaPost" name="fotoPerfil">
                            <p style="font-size:12px;" class="text-danger">*We reccomend to use webp files because has few data.</p>
                        </div> -->
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit" name="bSubir"><?=$langTxt["profile"]["save"]?></button>
                        </div>
                    </div>
                </div>
            </form>


            <form class="mt-4" action="<?=SITE_ROOT?>functions/updateProfilePassword.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-5 border-right mx-auto bg-white px-0 px-md-5 g--border-black">
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="text-right fw-bold text-uppercase"><?=$langTxt["profile"]["changePassword"]?></h3>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels g--font-size-16"><?=$langTxt["profile"]["changePassword"]?></label>
                            <input name="newPassword" type="password" class="form-control" value="password">
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit" name="bSubir"><?=$langTxt["profile"]["savePassword"]?></button>
                        </div>
                    </div>
                </div>
            </form>

            <form class="mt-4" action="<?=SITE_ROOT?>functions/updateProfilePicture.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-5 border-right mx-auto bg-white px-0 px-md-5 g--border-black">
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="text-right fw-bold text-uppercase"><?=$langTxt["profile"]["picture"]?></h3>
                        </div>
                        <div class="row mt-3">
                            <label for="multimediaPost" class="form-label g--font-size-16"><?=$langTxt["profile"]["profilePicture"]?></label>
                            <input class="form-control" type="file" id="multimediaPost" name="fotoPerfil">
                            <p style="font-size:12px;" class="text-danger">*We reccomend to use webp files because has few data.</p>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit" name="bSubir"><?=$langTxt["profile"]["savePicture"]?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>




<!--sweetAlertTemplate-->
<script src="<?= LIBS_ROOT ?>sweetAlert.js"></script>
<script src="<?=JS_ROOT?>sweetAlertTemplate.js" type="text/javascript"></script>

<?php
    if( isset($_GET["update"]) && $_GET["update"] == "ok" ){
?>
    <script>
        const modalLanguage =document.getElementById('languageForModal').innerHTML;
        showAlert("success", (modalLanguage)=='en' ? "The information has been updated" :"Datos actualizados", (modalLanguage)=='en' ? "Your data has been changed correctly" : "Tus datos han sido cambiados correctamente");
    </script>
<?php
      }
?>


<?php 
    include "../components/footer.php";
?>


