<?php
  include "../functions/config.php";
  session_start();
  include "../functions/setLang.php";
  include "../functions/getLang.php";
  include "../locale/". $lang . "/" . $lang . ".php";
  $pageTitle= "Faqs";
  include "../components/header.php";
  $navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
  include $navbarInclude;
 
?>


<div class="container-fluid g--bg-question g--border-bottom-grey">

  <!-- inicio -->

  <div class="row pt-2 pb-0">
    <div class="mt-4 d-none d-md-flex align-items-center justify-content-center col-md-8 mx-auto col-12 text-white text-uppercase text-center fw-bold pb-3 mb-2 g--bg-faqs g--height-150">
      <h1 class="d-none d-md-block fw-bold"><?=$langTxt["faqs"]["title"]?></h1>
    </div>
    <div class="d-flex d-md-none align-items-center justify-content-center col-md-9 mx-auto col-11 text-white text-uppercase text-center fw-bold pb-3 mb-2 g--bg-faqs  g--height-80">
      <h5 class="d-block d-md-none fw-bold"><?=$langTxt["faqs"]["title"]?></h5>
    </div>
    <div class="col-md-8 col-11 mt-3 mx-auto mb-5 px-0">
      <?php include '../components/accordion.php' ?>
    </div>
  </div>

  <!-- fin -->

</div>


<?php 
  include "../components/footer.php";
?>