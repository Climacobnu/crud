<?php


include 'config.php';
if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $DESCRICAO = $_POST['descricao'];
    $SOLUCAO = $_POST['solucao'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc, 'uploadImage/' .$img_name);

    mysqli_query($con," UPDATE solucoes SET descricao = '$DESCRICAO', solucao = '$SOLUCAO', image = '$img_des' where id = '$ID'");
    header('location:index.php');

}

?>