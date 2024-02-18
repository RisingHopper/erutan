<?php
include "functions/config.php";
session_start();
include "functions/setLang.php";
include "functions/getLang.php";
// var_dump($lang);
include "locale/". $lang . "/" . $lang . ".php";
$pageTitle= "Inicio";
include "components/header.php";


if(! isset($_SESSION['questionCard'])){
    $_SESSION["questionCard"]="true";
}




$navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "components/navbarUser.php" : "components/navbar.php";
include $navbarInclude;



include 'functions/claves.php';
include 'functions/getPosts.php';
include 'functions/addVisits.php';







?>

<div class="container-fluid my-0 px-0">
    <div id="contenido">
        <div class="container-fluid px-md-5 my-4 py-3 px-4">
            <!-- Introducción y cards -->
            <div class="row" >
                <div class="col-12 col-md-4 pe-2 g--font-size-20  g--text-justify px-0 mx-0 mb-5 mb-md-0" data-aos="fade-right">
                    <div class="">
                        <img src="assets/img/logo.png" class="d-none d-md-block g--width-250">
                        <img src="assets/img/logo.png" class="d-block d-md-none mx-auto g--width-250 mb-3">
                        <p class="mt-3"><?=$langTxt["home"]['introduccion']["texto"]?></p>
                        <a href="https://www.paypal.com/es/home" class="text-decoration-none text-black bg-white g--border-black d-inline-block px-4 py-1 mt-2 g--hover-white-text g--hover-bg-black"><?=$langTxt["contributor"]?></a>
                    </div>

                </div>
                <div class="d-none d-xl-block col-md-8 px-0 ps-5">
                    <?php include 'components/carousel.php' ?>
                </div>
                <div class="d-block d-md-none col-12 px-0">
                    <?php include 'components/carouselResponsive.php' ?>
                </div>
            </div>
            
            <div class="row mt-5">
                <!-- Pregunta -->
                <div class="col-12 col-md-4">
                    <?php include "components/question_card.php" ?>
                </div>
                
                <!-- Videos -->
                <div class="offset-md-1 col-12 col-md-7 px-0 mt-5 mt-md-0">
                    <?php include "components/sections.php" ?>
                </div>
                
                <!-- Newsletter -->
                <div class="col-12 mx-auto my-5 px-0 mx-0">
                    <?php include "components/newsletter.php" ?>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
include "components/footer.php";
?>


<script src="<?= JS_ROOT ?>slickCarousel.js"></script>   	
<script> AOS.init(); </script>