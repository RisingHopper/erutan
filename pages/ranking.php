<?php
  include "../functions/config.php";
  session_start();
  include "../functions/setLang.php";
  include "../functions/getLang.php";
  include "../locale/". $lang . "/" . $lang . ".php";
  $pageTitle= "Ranking";
  include "../components/header.php";
  isset($_SESSION['nivel_usuario']) || header('Location: ../index.php');
  $navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
  include $navbarInclude;
  include "../functions/getRanking.php";
  $jugadorPosicion=1;
?>


<div class="container-fluid mb-3">

    <!-- inicio -->

    <div class="row justify-content-center">
        <div class="col-12 mx-auto text-center text-uppercase mt-4 mb-5 mb-3">
            <h2 class="fw-bold"><?=$langTxt["publicaciones"]["ranking"]?></h2>
        </div>

    
        <?php foreach ($dataRanking as $ranking) :?>

        <?php
        $connect = new PDO('mysql:host=localhost;dbname=erutan', 'root', '');
        $idUser=$ranking["id_user"];
        $consulta = "select * from users_web where id=$idUser";
        $statement = $connect->prepare($consulta);
        $statement->execute();
        $resultado= $statement->fetchAll(PDO::FETCH_ASSOC);
        ?> 

        <div class="row justify-content-center mb-4 col-11">
            <div class="card mx-auto" style="width: 500px;">
                <div class="row no-gutters">
                    <div class="d-none d-md-block col-sm-5 px-0" style="height:150px;">
                        <img class="card-img p-2 w-100 h-100 g--cover" src="<?php echo $resultado[0]["profile_picture"] ?>">
                    </div>
                    <div class="d-block d-md-none col-sm-5 px-0" style="height:250px;">
                        <img class="card-img p-2 w-100 h-100 g--cover" src="<?php echo $resultado[0]["profile_picture"] ?>">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold g--font-size-24"><?php echo $resultado[0]["nombreUsuario"] ?></h5>
                            <p class="card-text g--font-size-20"><?=$langTxt["publicaciones"]["total"]?> <?php echo $ranking['SUM(points)'] ?> <?=$langTxt["publicaciones"]["points"]?></p>
                            <img style="width:80px; left:-40px; top:-40px; transform: rotate(30deg);" class="position-absolute" src="<?= IMGS_ROOT . $jugadorPosicion . 'place.webp' ?>">
                            <a href="#" class="btn btn-primary fw-bold"><?php echo $jugadorPosicion .' '.$langTxt["publicaciones"]["posicion"]?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $jugadorPosicion=$jugadorPosicion+1; ?>
        <?php endforeach; ?>
    </div>

    <!-- fin -->

</div>
     

<?php 
  include "../components/footer.php";
?>