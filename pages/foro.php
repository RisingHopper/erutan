<?php
  include "../functions/config.php";
  session_start();
  include "../functions/setLang.php";
  include "../functions/getLang.php";
  include "../locale/". $lang . "/" . $lang . ".php";
  $pageTitle= "Forum";
  include "../components/header.php";
  isset($_SESSION['nivel_usuario']) || header('Location: ../index.php');
  $navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
  include $navbarInclude;
?>


<div class="container-fluid">

  <!-- inicio -->

  <div class="row">
    <div class="d-none d-md-block col-2 g--bg-img-foro"></div>

      <div class="col-md-8 col-12 my-5">

        <div class="col-12 mb-5 ps-md-5 ps-0">
          <h2 class="text-center fw-bold text-uppercase"><?=$langTxt["publicaciones"]["chat"]?></h2>
        </div>
           
        <div class="col-md-8 col-12 mb-5 px-md-5 px-1">
          <form method="POST" id="comment_form">
            <div class="form-group">
              <input type="text" name="comment_name" id="comment_name" class="form-control d-none rounded-0" value="<?php echo $_SESSION['idUser']?>" />
              <input type="text" name="comment_nam" id="comment_nam" class="form-control mb-2 rounded-0 g--border-black" value=<?php echo $_SESSION['nombreUsuario']?> disabled />
            </div>
            <div class="bg-light form-control rounded-0 d-none" id="replyComment">Estas respondiendo a</div>
            <div class="form-group">
              <textarea name="comment_content" id="comment_content" class="form-control mb-2 rounded-0 g--border-black" placeholder="Enter Comment" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" name="comment_id" id="comment_id" value="0" />
              <input type="submit" name="submit" id="submit" class="px-5 py-1 bg-black text-white g--font-size-22 fw-semibold" value="<?=$langTxt["publicaciones"]["submit"]?>" />
            </div>
          </form>
        </div>

        <span id="comment_message"></span><br/>

        <div class="col-12 px-md-5 px-1">
          <div id="display_comment" class="bg-white p-md-5 p-3 g--border-black"></div>
        </div>

      </div>

    <div class="d-none d-md-block col-2 g--bg-img-foro"></div>
  </div>

  <!-- fin -->

</div>




<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function(){

 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"http://erutan.test/functions/addComment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"http://erutan.test/functions/fetchComment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});


// Ckeditor ???

</script>


<?php 
  include "../components/footer.php";
?>