<?php
date_default_timezone_set('Europe/Madrid');
$todayDate = date('Y-m-d H:i:s');
$releaseDate = date("Y-m-d H:i:s", strtotime('2023-06-30 12:00:00'));
if ($todayDate < $releaseDate) { ?>

    <div class="row d-flex flex-column px-0 question bg-light g--shadow-question">
        <div class="col-12 my-4 pt-3"><h3 class="text-center g--question-title-style"><?=$langTxt["questionCard"]["title"]?></h3></div>
        <div class="col-12 "><img src="assets/img/Animales.png" class="d-block mx-auto g--shadow-img" alt="" style="width: 80%;"></div>
        <div class="col-12">
            <p class="question__p mt-4"><?=$langTxt["questionCard"]["question"]?></p>
            <!-- <form action="" method="post"> -->
            <input type="radio" class="radio"id="elephant" name="question__radio" value="elephant">
            <label for="elephant" class="label"><?=$langTxt["questionCard"]["option1"]?></label><br>
            <input type="radio" class="radio" id="whale" name="question__radio" value="whale">
            <label for="whale"class="label"><?=$langTxt["questionCard"]["option2"]?></label><br>
            <input type="radio" class="radio" id="zebra" name="question__radio" value="zebra">
            <label for="zebra"class="label"><?=$langTxt["questionCard"]["option3"]?></label><br>
            <input type="radio" class="radio" id="giraffe" name="question__radio" value="giraffe">
            <label for="giraffe" class="label"><?=$langTxt["questionCard"]["option4"]?></label><br>
            <input type="radio" class="radio" id="correctAnswer" name="question__radio" value="hippo">
            <label for="correctAnswer" class="label"><?=$langTxt["questionCard"]["option5"]?></label><br>
            <!-- <input id="enviarRespuesta"class="d-block mx-auto g--btn-red px-5 py-2 g--bg-red text-white my-4" type="submit" value="Send" name="enviar" class="mt-5 d-block border-0 mx-auto bg-primary text-white py-2 px-5"> -->
            <input disabled id="enviarRespuesta"class="d-block mx-auto g--btn-red px-5 py-2 g--bg-red text-white my-4" type="submit" value="Send" name="enviar" class="mt-5 d-block border-0 mx-auto bg-primary text-white py-2 px-5">
            <!-- </form> -->
        </div>
    </div>
    <div class="d-none"id="cookieQuestionCard"><?php echo $_SESSION['questionCard'] ?></div>

<?php } else { ?>

    <div class="row d-flex flex-column px-0 question bg-light g--shadow-question">
        <div class="col-12 my-4 pt-3"><h3 class="text-center g--question-title-style"><?=$langTxt["questionCard"]["title"]?></h3></div>
        <div class="col-12 "><img src="assets/img/AnimalesGuerraAustralia2.png" class="d-block mx-auto g--shadow-img" alt="" style="width: 80%;"></div>
        <div class="col-12">
            <p class="question__p mt-4"><?=$langTxt["questionCard2"]["question"]?></p>
            <!-- <form action="" method="post"> -->
            <input type="radio" class="radio"id="cat" name="question__radio" value="elephant">
            <label for="cat" class="label" ><?=$langTxt["questionCard2"]["option1"]?></label><br>
            <input type="radio" class="radio" id="correctAnswer" name="question__radio" value="yo">
            <label for="correctAnswer"class="label"><?=$langTxt["questionCard2"]["option2"]?></label><br>
            <input type="radio" class="radio" id="spider" name="question__radio" value="zebra">
            <label for="spider"class="label"><?=$langTxt["questionCard2"]["option3"]?></label><br>
            <input type="radio" class="radio" id="kangaroo" name="question__radio" value="giraffe">
            <label for="kangaroo" class="label"><?=$langTxt["questionCard2"]["option4"]?></label><br>
            <input type="radio" class="radio" id="noneA" name="question__radio" value="hippo">
            <label for="noneA" class="label"><?=$langTxt["questionCard2"]["option5"]?></label><br>
            <!-- <input id="enviarRespuesta"class="d-block mx-auto g--btn-red px-5 py-2 g--bg-red text-white my-4" type="submit" value="Send" name="enviar" class="mt-5 d-block border-0 mx-auto bg-primary text-white py-2 px-5"> -->
            <input disabled id="enviarRespuesta"class="d-block mx-auto g--btn-red px-5 py-2 g--bg-red text-white my-4" type="submit" value="Send" name="enviar" class="mt-5 d-block border-0 mx-auto bg-primary text-white py-2 px-5">
            <!-- </form> -->
        </div>
    </div>
    <div class="d-none"id="cookieQuestionCard"><?php echo $_SESSION['questionCard'] ?></div>
    
<?php } ?>

    <div id="languageForSweetAlertCard" class="d-none" value="<?php echo $_SESSION['lang']?>"><?php echo $_SESSION['lang']?></div>


<script>
    let sweetAlertLang = document.getElementById('languageForSweetAlertCard').innerHTML;
    let cookie=document.getElementById("cookieQuestionCard").innerHTML;
    let btn=document.getElementById("enviarRespuesta");
    btn.addEventListener("click",comprueba);
    if(cookie=="true"){
        btn.disabled = false;
    }
    
    function comprueba(){
        if (document.getElementById("correctAnswer").checked){
            correct();
            btn.disabled = true;
            // document.cookie = "cookieQuestionCard=False";
        }else{
            incorrect();
            btn.disabled = true;
            // document.cookie = "cookieQuestionCard=False";
        }
    }


    function incorrect(){
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: sweetAlertLang == 'en' ? 'This is not the correct answer  :(' : 'Esta no es la respuesta correcta :(',
        confirmButtonColor: '#3085d6',
        confirmButtonText: "OK :'("
        }).then((result) => {
        if (result.isConfirmed) {
            location = "http://erutan.test/functions/desactivarPuntos.php"
        }
        })  
    }
    function correct(){
        Swal.fire({
        title: sweetAlertLang == 'en' ? 'Congratulations!' : 'Felicidades',
        text: sweetAlertLang == 'en' ? 'You clicked the right option!' : 'Lo has clavado con la respuesta!',
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: sweetAlertLang == 'en' ? 'Great!' : 'Genial'
        }).then((result) => {
        if (result.isConfirmed) {
            location = "http://erutan.test/functions/insertarPuntos.php"
        }
        })        
    }
</script>

