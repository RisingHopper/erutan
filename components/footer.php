    <!-- </main> -->
    <footer class="bg-black">
        <div class="pt-5 pb-1 container-fluid bg-black text-white g--max-width-1440 mx-auto">

            <footer class="px-3">
                <div class="row">
                    <div class="col-12 col-md-4 mb-3 text-white g--font-size-20">
                        <div class="mb-4">
                            <a href="<?= SITE_ROOT ?>"><img class="g--width-250" src="<?= IMGS_ROOT ?>logoWhite.png" alt="logo"></a>
                        </div>
                        <div>
                            <p><?=$langTxt["footer"]["texto"]?></p>
                        </div>
                    </div>

                    <div class="offset-md-2 col-6 col-md-2 mb-3">
                        <h3><?=$langTxt["footer"]["about"]?></h3>
                        <ul class="nav flex-column mt-3">
                            <li class="nav-item mb-2"><a data-bs-toggle="modal" data-bs-target="#exampleModals" class="text-decoration-none g--color-b5a7a7 g--hover-black-pink g--font-size-20" href="#" class="nav-link p-0 text-body-secondary">Log In</a></li>
                            <li class="nav-item mb-2"><a class="text-decoration-none g--color-b5a7a7 g--font-size-20 g--hover-black-pink" href="<?= SITE_ROOT ?>pages/about" class="nav-link p-0 text-body-secondary"><?=$langTxt["footer"]["about"]?></a></li>
                            <li class="nav-item mb-2"><a class="text-decoration-none g--color-b5a7a7 g--font-size-20 g--hover-black-pink" href="<?= SITE_ROOT ?>pages/faqs" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h3><?=$langTxt["footer"]["privacidad"]?></h3>
                        <ul class="nav flex-column mt-3">
                            <li class="nav-item mb-2"><a class="text-decoration-none g--color-b5a7a7 g--font-size-20 g--hover-black-pink" href="<?= SITE_ROOT ?>pages/cookies" class="nav-link p-0 text-body-secondary g--color-b5a7a7">Cookies</a></li>
                            <li class="nav-item mb-2"><a class="text-decoration-none g--color-b5a7a7 g--font-size-20 g--hover-black-pink" href="<?= SITE_ROOT ?>pages/legal" class="nav-link p-0 text-body-secondary g--color-b5a7a7"><?=$langTxt["footer"]["privacidad"]?></a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h3><?=$langTxt["footer"]["rss"]?></h3>
                        <ul class="nav flex-column mt-3">
                            <li class="nav-item mb-2"><a class="text-decoration-none g--color-b5a7a7 g--font-size-20 g--hover-black-pink" href="#"><i class="fa-brands fa-square-facebook"></i> Facebook</a></li>
                            <li class="nav-item mb-2"><a class="text-decoration-none g--color-b5a7a7 g--font-size-20 g--hover-black-pink" href="#"><i class="fa-brands fa-square-x-twitter"></i> Twitter</a></li>
                            <li class="nav-item mb-2"><a class="text-decoration-none g--color-b5a7a7 g--font-size-20 g--hover-black-pink" href="#"><i class="fa-brands fa-linkedin"></i> Linkedin</a></li>
                            <li class="nav-item mb-2"><a class="text-decoration-none g--color-b5a7a7 g--font-size-20 g--hover-black-pink" href="#"><i class="fa-brands fa-square-instagram"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="d-flex flex-column flex-sm-row justify-content-center pt-4 border-top">
                    <p>&copy;The erutan 2024. All rights reserved.</p>
                </div>
            </footer>

        </div>
    </footer>


    <!--Bootstrap-->
    <script src="<?= LIBS_ROOT ?>bootstrap/js/bootstrap.bundle.min.js"></script>    
    <!-- Slick Carousel -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?= LIBS_ROOT ?>slick-1.8.1/slick/slick.min.js"></script>
    <!-- AOS Data -->
    <script type="text/javascript" src="<?= LIBS_ROOT ?>aos-2.3.1/dist/aos.js"></script>

    <!--LIBS-->
    <!--Validator-->
    <script src="<?= LIBS_ROOT ?>validator.min.js"></script>
    <!--SweetAlert-->
    <script src="<?= LIBS_ROOT ?>sweetAlert.js"></script>
    <!-- <script src="assets/js/viewsGraphics.js"></script> -->
    </body>
</html>