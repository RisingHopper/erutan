<!-- Carousel Desktop -->

<div class="slick-carousel g--height-440">

    <?php foreach ($dataPosts as $post) :?>

    <div class="col bg-light pt-4">
        <div class=""><img class="g--cover g--width-240 g--height-240 d-block mx-auto g--shadow-img" src="https://erutan.es/backend/public/uploads/posts/<?= $post['img']; ?>" alt="logo"></div>
        <div class="px-4 mt-3">
            <h4 class="g--font-family-workSans fw-bold g--color-ff74fc text-center g--font-size-regular"><?= $post['title']; ?></h4>
            <p class="g--cut-text-to-2-lines"><?= $post['description']; ?></p>
            <a href="<?= SITE_ROOT ?>pages/post.php?id=<?=$post["slug"]?>" class="g--btn-red2 g--hover-btn-pink"><?=$langTxt["readMore"]?></a>
        </div>
    </div>

    <?php endforeach; ?>

</div>









                



           
