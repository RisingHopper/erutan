<?php
  include "../functions/config.php";
  session_start();
  include "../functions/setLang.php";
  include "../functions/getLang.php";
  include "../locale/". $lang . "/" . $lang . ".php";
  $pageTitle= "Posts";
  include "../components/header.php";
  $navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
  include $navbarInclude;

  include '../functions/getPostsAnimalsByPages.php';
  include_once("../components/postsAnimals.php");
?>









<?php 
  include "../components/footer.php";
?>