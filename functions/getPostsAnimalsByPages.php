<?php
    require_once ("inc-dbconnect.php");

    // Definicion de variables de paginacion
    $paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $itemsPorPagina = 9;

    // Calculo de variables de paginacion
    $primerItem = ($paginaActual - 1) * $itemsPorPagina;
    $totalItems = $db->query("SELECT count(*) FROM posts  WHERE active = 1")->fetchColumn();
    $totalPaginas = ceil($totalItems / $itemsPorPagina);

    // Obtencion de los datos de la pagina actual
    $dataPosts = $db->prepare("SELECT 
        post.id,
        post.title_$lang AS title,
        post.description_$lang AS description,
        post.img,
        post.slug_$lang AS slug,
        post.published_at
    FROM
        posts AS post
    WHERE 
        post.active = 1 AND category = 'animals'
    AND 
        slug_$lang <>'' 
    ORDER BY 
        published_at 
    DESC LIMIT 
        $primerItem, $itemsPorPagina
    ");
    $dataPosts->execute();
    $dataPosts = $dataPosts->fetchAll(PDO::FETCH_ASSOC);

?>