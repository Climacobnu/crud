<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
        input{
            margin 10px;
        }

</style>
<?php

include 'config.php';
$ID = $_GET['id'];
$Record = mysqli_query($con, "SELECT * FROM solucoes WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>
    
        <center>
             <div class="main">
             <form action="insert.php" method="POST" enctype="multipart/form-data">
             <label for="">Descrição:</label>
             <input type="text" value="<?php echo $data['descricao'] ?>" name="descricao" id=""> <br>
             <label for="">Solução:</label>
             <input type="text" value="<?php echo $data['solucao'] ?>" name="solucao" id=""> <br>
             <label for="">Image:</label>
             <td><input type="file" value="<?php echo $data['image'] ?>"><img src="<?php echo $data['image'] ?>"> </td><br>
            
             <input type="hidden" value="<?php echo $data['id'] ?>">
             <input type="submit" name="update" class = 'btn btn-danger m-2' value="Update">
        
             </form>
            </div>
        </center>  


                    <!-- update code  -->

</body>
</html>