<?php
    require_once ("inc-dbconnect.php");

    $slug = $_GET["id"];

    $postData = $db->prepare("SELECT 
        post.id,
        post.title_$lang as title,
        post.description_$lang as description,
        post.img,
        post.slug_$lang as slug,
        post.published_at,
        post.text_$lang as text
    FROM 
        posts AS post
    WHERE 
        slug_$lang='$slug' LIMIT 1
    ");
    $postData->execute();
    $postData = $postData->fetchAll(PDO::FETCH_ASSOC);

?>
