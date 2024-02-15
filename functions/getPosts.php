<?php
    require_once ("inc-dbconnect.php");

    $dataPosts = $db->prepare("SELECT
	    post.id,
        post.title_$lang as title,
        post.description_$lang as description,
        post.img,
        post.slug_$lang as slug,
        post.published_at
    FROM
        posts AS post
    WHERE post.active = 1
    ");
    $dataPosts->execute();

    $dataPosts = $dataPosts->fetchAll(PDO::FETCH_ASSOC);

?>