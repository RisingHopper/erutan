<?php
    include "../functions/config.php";
    session_start();
    include "../functions/setLang.php";
    include "../functions/getLang.php";
    include "../locale/". $lang . "/" . $lang . ".php";
    $pageTitle= "Community";
    include "../components/header.php";
    $navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
    include $navbarInclude;

?>

<div class="container-fluid px-md-5 my-4">

    <!-- inicio -->

    <div class="g--bg-community mx-auto g--leter-spacing-2 g--word-spacing g--font-family-monoton d-flex justify-content-center align-items-center" style="width:100%; height:55vh;">
        <h2 class="d-none d-md-block g--font-size-50 fw-semibold g--color-ff74fc"><?=$langTxt["comunidad"]["titulo"]?></h2>
        <h2 class="d-block d-md-none g--font-size-30 text-center fw-semibold g--color-ff74fc"><?=$langTxt["comunidad"]["titulo"]?></h2>
    </div>

    <div class="row justify-content-between mt-4 text-center">
        <div class="col-11 mx-auto joinUs col-md-4 mb-3"><a href="<?= SITE_ROOT ?>pages/registration"><?=$langTxt["comunidad"]["joinUs"]?></a></div>
        <div class="col-11 mx-auto forum col-md-4 mb-3"><a href="<?= SITE_ROOT ?>pages/foro"><?=$langTxt["comunidad"]["forum"]?></a></div>
        <div class="col-11 mx-auto store col-md-3 mb-3"><a href="#"><?=$langTxt["comunidad"]["store"]?></a></div>
    </div>

    <!-- fin -->

</div>


<?php 
    include "../components/footer.php";
?>