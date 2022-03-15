<?php

//include db connection 
include 'config.php';

if(isset($_POST['upload'])){
    $DESCRICAO = $_POST['descricao'];
    $SOLUCAO = $_POST['solucao'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc, 'uploadImage/' .$img_name);
    header('location:index.php');

    // insert data

    mysqli_query($con, "INSERT INTO solucoes (Descricao, Solucao, Image) VALUES ('$DESCRICAO','$SOLUCAO','$img_des')");

}

?>
