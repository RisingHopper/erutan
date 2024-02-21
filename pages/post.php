<?php
    include "../functions/config.php";
    session_start();
    include "../functions/setLang.php";
    include "../functions/getLang.php";
    include "../locale/". $lang . "/" . $lang . ".php";
    $pageTitle= "Post";
    include "../components/header.php";
    include '../functions/claves.php';
    $navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
    include $navbarInclude;
    include_once ("../functions/getPost.php");

    if (empty( $postData[0])){
    ?>
        <script>window.location.replace("/pages/posts.php");</script>
    <?php
    }
?>


<div class="container-fluid">

    <!-- inicio -->

    <div class="row">
        <?php include "../components/asideCategories.php"?>

        <div class="col-12 col-md-10 d-flex flex-wrap justify-content-between mt-4">
            <div class="col-11  mx-auto mb-4 mt-3">
                <div class="g--border-bottom-grey">
                    <h2><b>Check this Post</b></h2>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-md-11 mx-auto px-0">
                    <p class="ps-3 fw-semibold text-secondary g--font-size-18">
                        <?=date("M d, Y", strtotime($postData[0]["published_at"]))?>
                    </p>
                    <div class="col-3 mx-auto">
                        <img src="https://erutan.es/backend/public/uploads/posts/<?= $postData[0]['img'] ?>" alt="" class="w-100 g--border-black">
                    </div>
                    <div class="col-10 mt-4 mx-auto">
                        <h2 class="fw-bold text-center"><?=$postData[0]['title']?></h2>
                        <p class="g--font-size-22 mt-3 px-4"><?=$postData[0]['text'];?></p>
                    </div>
                    <div class="d-inline-block g--bg-red px-3 py-2 mb-4 g--hover-btn-pink" style="border-radius:3px;">
                        <a href="<?=SITE_ROOT?>pages/posts.php" class="text-decoration-none text-white g--font-size-16">
                            <i class="fa-solid fa-arrow-rotate-left"></i> 
                            <strong>Volver a Noticias</strong>
                        </a>
                    </div>
            
                </div>
            </div>
        </div>
    </div>

    <!-- fin -->

</div>



<?php include '../components/footer.php';?>