<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=erutan', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';



// $_POST["comment_name"]= 1;
// $_POST["comment_content"]= 'xxdxdxdxd';
// $_POST["comment_id"]= 0;















if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '') {
 $query = "
    INSERT INTO forum_comments (id_comment_parent, comment_text, id_user) 
    VALUES (:parent_comment_id, :comment, :comment_sender_name) ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success"></label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);




?>

