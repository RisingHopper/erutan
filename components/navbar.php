<!-- NAVBAR GENERAL -->
<script src="<?=JS_ROOT?>lang.js"></script>
<!-- Modal Inicio Sesion -->
<?php include 'modal.php' ?>


<header class="g--bg-img-nature">
  <nav class="g--max-width-1440 mx-auto navbar navbar-expand-lg g--height-80 g--border-bottom-white g--font-size-24 pe-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= SITE_ROOT ?>"><img class="g--width-180" src="<?= IMGS_ROOT ?>logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="z-3 collapse navbar-collapse g--margin-left-330" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active g--color-ff74fc g--hover-black-text" aria-current="page" href="<?= SITE_ROOT ?>"><?=$langTxt["menuInicio"]["inicio"]?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link g--color-ff74fc g--hover-black-text" href="<?= SITE_ROOT ?>pages/posts"><?=$langTxt["menuInicio"]["publicaciones"]?></a>
          </li>
          <li class="nav-item">
            <a href="<?= SITE_ROOT ?>pages/postsPeople" class="nav-link g--color-ff74fc g--hover-black-text"><?=$langTxt["menuInicio"]["gente"]?></a>
          </li>
          <li class="nav-item">
            <a href="<?= SITE_ROOT ?>pages/postsAnimals" class="nav-link g--color-ff74fc g--hover-black-text"><?=$langTxt["menuInicio"]["animales"]?></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle g--color-ff74fc g--hover-black-text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?=$langTxt["menuInicio"]["comunidad"]?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item g--font-size-20" href="<?= SITE_ROOT ?>pages/community"><?=$langTxt["menuInicio"]["comunidad"]?></a></li>
              <li><a class="dropdown-item g--font-size-20" href="<?= SITE_ROOT ?>pages/faqs">FAQs</a></li>
            </ul>
          </li>
        </ul>

        <div class="d-flex">
          <i data-bs-toggle="modal" data-bs-target="#exampleModals" class="fa-solid fa-robot me-2 g--font-size-30"></i>
          <div data-bs-toggle="modal" data-bs-target="#exampleModals" class="text-uppercase bg-white g--border-black px-2 g--hover-btn-pink">
            <?=$langTxt["menuInicio"]["iniciarSesion"]?>
          </div>

          <?php if($_SESSION['lang'] == 'es' || !isset($_SESSION['lang']) ){ ?>
            <a class="nav-link d-flex mt-1 <?= ((isset($_SESSION['lang']) && $_SESSION['lang'] == "es") || !isset($_SESSION['lang'])) ? '' : null ?>" href="javascript:void(0)" onclick="setLang('en')">
              <img src="<?= IMGS_ROOT ?>es.svg" width="50" height="30">  
            </a>
          <?php } else { ?>                   
            <a class="nav-link d-flex mt-1 <?= (isset($_SESSION['lang']) && $_SESSION['lang'] == "en") ? 'y' : null ?>" href="javascript:void(0)" onclick="setLang('es')">
              <img src="<?= IMGS_ROOT ?>en.svg" width="50" height="30">  
            </a>
          <?php } ?>

        </div>

      </div>

    </div>
  </nav>
</header>