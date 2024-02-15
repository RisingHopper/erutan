<div class="content-panel edit-panel">

    <div class="d-flex flex-row justify-content-between px-md-5 px-2 mb-3" id="accountTab" role="tablist">

        <div class="nav-item" id="news">
            <h2 class="g--font-size-2con8 g--fw-600 g--hover-black-pink">
                <a class="nav-link" href="javascript:void(0);" id="news-tab" data-bs-toggle="tab" data-bs-target="#tab-news" type="button" role="tab" aria-controls="news" aria-selected="true"> <?=$langTxt["articulos"]?>
            </a>
            </h2>
            <hr class="g--hr-custom g--bg-yellow">
        </div>

        <div class="nav-item" id="videos">
            <h2 class="g--font-size-2con8 g--fw-600 g--hover-black-pink activeSection">
                <a class="nav-link active" href="javascript:void(0);" id="videos-tab" data-bs-toggle="tab" data-bs-target="#tab-videos" type="button" role="tab" aria-controls="videos" aria-selected="true"> Videos</a>
            </h2>
            <hr class="g--hr-custom g--bg-blue">
        </div>

        <div class="nav-item" id="games">
            <h2 class="g--font-size-2con8 g--fw-600 g--hover-black-pink ">
                <a class="nav-link" href="javascript:void(0);" id="games-tab" data-bs-toggle="tab" data-bs-target="#tab-games" type="button" role="tab" aria-controls="games" aria-selected="true"><?=$langTxt["juegos"]?></a>
            </h2>
            <hr class="g--hr-custom g--bg-red">
        </div>

    </div>

    <div class="tab-content">
        <!-- Noticias -->
        <div id="tab-news" class="tab-pane fade " role="tabpanel" aria-labelledby="tab-news">
            <div class="bg-black d-flex justify-content-center align-items-center" width=100% style="height:200px;">
                <h3 class="text-center text-white text-uppercase fw-bold"><?=$langTxt["comingSoon"]?></h3>
            </div>
        </div>

        <!-- Videos -->
        <div id="tab-videos" class="tab-pane fade show active" role="tabpanel" aria-labelledby="tab-videos">
            <?php include "sectionVideos.php" ?>
        </div>

        <!-- Juegos -->
        <div id="tab-games" class="tab-pane fade" role="tabpanel" aria-labelledby="tab-games">
            <div class="bg-black d-flex justify-content-center align-items-center" width=100% style="height:200px;">
                <h3 class="text-center text-white text-uppercase fw-bold"><?=$langTxt["comingSoon"]?></h3>
            </div>
        </div>
    </div>

</div>






<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tabs = document.querySelectorAll('.nav-item');

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                // Asegúrate de que haya un 'h2' dentro del tab
                var h2Element = tab.querySelector('h2');

                if (h2Element) {
                    // Elimina la clase 'activeSection' de todos los tabs
                    tabs.forEach(function(t) {
                        var h2 = t.querySelector('h2');
                        if (h2) {
                            h2.classList.remove('activeSection');
                        }
                    });

                    // Añade la clase 'activeSection' al tab actual
                    h2Element.classList.add('activeSection');
                }
            });
        });
    });
</script>


