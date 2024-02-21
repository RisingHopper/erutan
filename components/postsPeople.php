<div class="container-fluid">

    <!-- inicio -->

    <div class="row">

        <?php include "asideCategories.php"?>

        <div class="col-12 col-md-10 d-flex flex-wrap justify-content-center mt-4">
            <div class="col-11  mx-auto mb-4 mt-3">
                <div class="g--border-bottom-grey">
                    <h2><b><?=$langTxt["publicaciones"]["allPosts"]?></b></h2>	
                </div>
            </div>



            <?php for ($x = 0; $x<count($dataPosts) ;$x++){ ?>
                
            <div class="col-12 col-md-4 mb-5 px-3 g--hover-transform g--transition">
                <div class="card">
                    <?php if(!empty($dataPosts[$x]["img"])){ ?>
                    <img class="card-img-top mx-auto mt-4 object-fit-cover" style="width:85%; height:270px;" src="https://erutan.es/backend/public/uploads/posts/<?=$dataPosts[$x]["img"]?>">       
                    <?php } ?>       

                    <div class="noticiaDescripcion card-body text-center">
                        <h5 class="g--font-family-workSans fw-bold g--color-ff74fc text-center g--font-size-20 g--cut-text-to-3-lines"><?= $dataPosts[$x]['title']; ?> </h5>
                            <!-- <p class="ps-3 text-muted">
                                <?php //date("M d, Y", strtotime($dataPosts[$x]["published_at"]))?>
                            </p> -->
                        <p class="card-text g--cut-text-to-3-lines"> <?= $dataPosts[$x]["description"]; ?> </p>
                        <a href="<?= SITE_ROOT ?>pages/post.php?id=<?=$dataPosts[$x]["slug"]?>" class="g--btn-red2 g--hover-btn-pink g--font-size-16"><?=$langTxt["readMore"]?></a>
                    </div>
                    
                </div>
            </div>

            <?php } ?>


            <div class="paginacion text-center d-none d-lg-block col-md-12 mb-3 mb-4">
                <?php if ($paginaActual > 1): ?>
                    <a href="?pagina=<?php echo $paginaActual - 1; ?>" class="btn g--btn-paginacion">Anterior</a>
                <?php endif; ?>
                <?php
                    $inicioBucle = ( $paginaActual > 3 ) ? $paginaActual - 2 : 1;
                ?>
                <?php for ($i = $inicioBucle; $i <= ( $inicioBucle + 1 ); $i++): ?>
                    <?php if ($i === $paginaActual): ?>
                        <span class="btn g--btn-paginacion__active">
                            <?php echo $i; ?>
                        </span>
                    <?php else: ?>
                        <a href="?pagina=<?php echo $i; ?>" class="btn g--btn-paginacion">
                        <?php echo $i; ?>
                    </a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($paginaActual < $totalPaginas): ?>
                    <a href="?pagina=<?php echo $paginaActual + 1; ?>" class="btn g--btn-paginacion">Siguiente</a>
                <?php endif; ?>
            </div>
                  
            <div class="paginacion text-center d-block d-lg-none">
                <?php if ($paginaActual > 1): ?>
                    <a href="?pagina=<?php echo $paginaActual - 1; ?>" class="btn g--btn-paginacion">Anterior</a>
                <?php endif; ?>
                <?php
                    $inicioBucle = ( $paginaActual > 2 ) ? $paginaActual - 1 : 1;
                ?>
                <?php for ($i = $inicioBucle; $i <= ( $inicioBucle + 2 ); $i++): ?>
                    <?php if ($i === $paginaActual): ?>
                        <span class="btn g--btn-paginacion__active">
                            <?php echo $i; ?>
                        </span>
                    <?php else: ?>
                        <a href="?pagina=<?php echo $i; ?>" class="btn g--btn-paginacion">
                        <?php echo $i; ?>
                    </a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($paginaActual < $totalPaginas): ?>
                    <a href="?pagina=<?php echo $paginaActual + 1; ?>" class="btn g--btn-paginacion">Siguiente</a>
                <?php endif; ?>
            </div>

        </div>

    </div>

    <!-- fin -->

</div>


        

