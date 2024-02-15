<!-- Carousel Mobile -->

<div class="slick-mobile g--height-550 mt-3">

    <?php foreach ($dataPosts as $post) :?>

    <div class="col bg-light pt-5">
        <div class=""><img class="g--width-290 g--height-290 d-block mx-auto g--shadow-img" src="https://erutan.es/app/public/uploads/posts/<?= $post['img']; ?>" alt="logo"></div>
        <div class="px-4 mt-4 g--font-size-20">
            <h4 class="g--font-family-workSans fw-bold g--color-ff74fc text-center g--font-size-26"><?= $post['title']; ?></h4>
            <p class="g--cut-text-to-3-lines"><?= $post['description']; ?></p>
            <a href="<?= SITE_ROOT ?>pages/post.php?id=<?=$post["slug"]?>" class="g--btn-red2 g--hover-btn-pink g--font-size-18"><?=$langTxt["readMore"]?></a>
        </div>
    </div>

    <?php endforeach; ?>

</div>
 