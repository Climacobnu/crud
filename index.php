<!-- php -S localhost:8000. -->
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
    
        <center>
             <div class="main">
             <form action="insert.php" method="POST" enctype="multipart/form-data">
             <label for="">Descrição:</label>
             <input type="text" name="descricao" id=""> <br>
             <label for="">Solução:</label>
             <input type="text" name="solucao" id=""> <br>
             <label for="">Image:</label>
             <input type="file" name="image" id="1" > <br>
             <input type="submit" name="upload" value="Salvar">
        
             </form>
            </div>
        </center>

                            <!-- Buscar Dados -->


                            <div class="container">

                            

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Descrição</th>
      <th scope="col">Solução</th>
      <th scope="col">Image</th>
      <th scope="col">Data Lançamento</th>
      <th scope="col">Delete</th>
      <th scope="col">Upgrade</th>
    </tr>
  </thead>
  <tbody>   
            
            <?php
            include 'config.php';
            $pic = mysqli_query($con, "SELECT * FROM solucoes");
            while($row = mysqli_fetch_array($pic)) {
            echo  "   
                <tr>
                     <td>$row[id]</td>
                     <td>$row[descricao]</td>
                     <td>$row[solucao]</td>
                     <td><img src='$row[image]' width = '200px' height= '70px'> </td>
                     <td>$row[data_lancamento]</td>
                     <td><a href='delete.php? id=$row[id]' class = 'btn btn-danger'>Delete</a></a></td>
                     <td><a href='update.php? id=$row[id]' class = 'btn btn-danger'>Update</a></a></td>

                     <td></td>
                    
                 </tr>
         ";
        }

            ?>
    
   
  </tbody>
</table>
</div>
</body>
</html>