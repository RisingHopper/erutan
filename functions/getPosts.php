<?php
    require_once ("inc-dbconnect.php");

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
        post.active = 1
    ORDER BY
        published_at DESC
    ");
    $dataPosts->execute();

    $dataPosts = $dataPosts->fetchAll(PDO::FETCH_ASSOC);

?>