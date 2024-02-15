<?php
// header("Cache-Control: no-cache, must-revalidate"); 
// header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // No guardamos caché

// Archivo de Errores LOGS
define("RUTA_LOGS", __DIR__ . "/../logs");
if (!file_exists(RUTA_LOGS)) {
    mkdir(RUTA_LOGS);
}
ini_set('display_errors', 0);
ini_set("log_errors", 1);
ini_set('error_reporting', E_ALL);
ini_set("error_log", RUTA_LOGS . "/" . date("Y-m-d") . ".log");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="nature, erutan, naturaleza, curiosidades, blog">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="title" content="The Erutan">
    <meta name="description" content="The Erutan es una web dedicada a compartir curiosidades sobre animales, naturaleza...">
    <title><?php echo($pageTitle)?> | Erutan</title>
    <link rel="icon" href="<?= IMGS_ROOT ?>favicon24.svg" sizes="32x32">
    <link rel="icon" href="<?= IMGS_ROOT ?>favicon24.svg" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="<?= IMGS_ROOT ?>favicon24.svg">

    <!-- Global Style // Custom Style -->
    <link href="<?=CSS_ROOT?>global.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="<?=LIBS_ROOT?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=LIBS_ROOT?>bootstrap/bootstrap-icons/fonts/bootstrap-icons.woff" rel="stylesheet">
    <!--Fontawesome-->
    <link href="<?=LIBS_ROOT?>fontawesome-6.5.1/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?=LIBS_ROOT?>fontawesome-6.5.1/css/brands.min.css" rel="stylesheet">
    <link href="<?=LIBS_ROOT?>fontawesome-6.5.1/css/solid.min.css" rel="stylesheet">
    <link href="<?=LIBS_ROOT?>fontawesome-6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="<?=LIBS_ROOT?>slick-1.8.1/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="<?=LIBS_ROOT?>slick-1.8.1/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <!-- AOS Data -->
    <link href="<?=LIBS_ROOT?>aos-2.3.1/dist/aos.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- <main id="main" class="g--max-width-1440 mx-auto"> -->



    

