<!--Navbar-->
<script src="<?=JS_ROOT?>lang.js"></script>
<!-- Modal -->
<?php include 'modal.php' ?>


<header class="g--bg-img-nature">
  <nav class="navbar navbar-expand-lg g--bg-img-nature g--height-80 g--border-bottom-white g--font-size-24 pe-3">
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

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle g--color-ff74fc g--hover-black-text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?=$langTxt["menuInicio"]["publicaciones"]?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item g--font-size-20" href="<?= SITE_ROOT ?>pages/posts"><?=$langTxt["menuInicio"]["publicaciones"]?></a></li>
              <li><a class="dropdown-item g--font-size-20" href="<?= SITE_ROOT ?>pages/postsPeople"><?=$langTxt["menuInicio"]["gente"]?></a></li>
              <li><a class="dropdown-item g--font-size-20" href="<?= SITE_ROOT ?>pages/postsAnimals"><?=$langTxt["menuInicio"]["animales"]?></a></li>
            </ul>
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
          <li class="nav-item">
            <a href="<?= SITE_ROOT ?>pages/foro" class="nav-link g--color-ff74fc g--hover-black-text">Foro</a>
          </li>
          <li class="nav-item">
            <a href="<?= SITE_ROOT ?>pages/ranking" class="nav-link g--color-ff74fc g--hover-black-text">Ranking</a>
          </li>
        </ul>

        <div class="d-flex">
          <a href="<?=SITE_ROOT?>pages/userProfile.php?user=<?= $_SESSION['idUser']; ?>" >
            <img src="<?php echo $_SESSION['fotoPerfil']; ?>" alt="" style="width:38px; height:38px; object-fit: cover;" class="me-2 g--border-black">
          </a>
          <li class="nav-item dropdown" style="list-style:none;">
            <a class="nav-link dropdown-toggle text-uppercase bg-white g--border-black px-4 g--hover-btn-pink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?=$langTxt["menuInicio"]["profile"]?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-uppercase bg-white px-4 g--hover-btn-pink" href="<?=SITE_ROOT?>pages/userProfile.php?user=<?= $_SESSION['idUser'];  ?>"><?=$langTxt["menuInicio"]["profile"]?></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-uppercase bg-white px-4 g--hover-btn-pink" href="<?=SITE_ROOT?>functions/logout.php"> <?=$langTxt["menuInicio"]["salir"]?></a></li>
            </ul>
          </li>

          <?php if($_SESSION['lang'] == 'es' || !isset($_SESSION['lang']) ){ ?>
            <a class="nav-link d-flex mt-1 <?= ((isset($_SESSION['lang']) && $_SESSION['lang'] == "es") || !isset($_SESSION['lang'])) ? '' : null ?>" href="javascript:void(0)" onclick="setLang('en')">
              <img src="<?= IMGS_ROOT ?>es.svg" width="50" height="30">  
            </a>
          <?php } else{ ?>                   
            <a class="nav-link d-flex mt-1 <?= (isset($_SESSION['lang']) && $_SESSION['lang'] == "en") ? 'y' : null ?>" href="javascript:void(0)" onclick="setLang('es')">
              <img src="<?= IMGS_ROOT ?>en.svg" width="50" height="30">
            </a>
          <?php } ?>

        </div>

      </div>
    </div>
  </nav>
</header>