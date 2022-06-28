<?php


include 'conexao.php';

$listarDados = "SELECT * FROM clientes";

$resultado_usuario = mysqli_query($mysqli,$listarDados);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Listar</title>
    
  </head>
  <body id="body">
    <div class="form-control" id="titulo">
    <h3 id="titulocor"></h3>
    
    <br>
    <nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">
        <a class="navbar-brand" href="#">controle de check-in</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="inicio.php">Home</a>
            </li>
            
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2"  id="myInput" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
          </form>
        </div>
      
      </nav>

    

    <table class="table table-striped table-bordered table-hover">
  
    <thead>
    <tr>
      <th >id</th>
      <th >Nome</th>
      <th>E-mail</th>
      <th >Tel</th>
      <th>Quant.quartos</th>
      <th >Quant.crianças</th>
      <th >check-in</th>
      <th >funcionario</th>
      <th >Preferências</th>
    </tr>
  </thead>
   <tbody id="myTable">
    <?php
  if(($resultado_usuario) AND ($resultado_usuario -> num_rows != 0)){
  while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
    ?>

    <tr>
    <th><?php  echo $row_usuario['id']?></th>
      <td><?php  echo $row_usuario['nome']?></td>
      <td><?php  echo $row_usuario['email']?></td>
      <td><?php  echo $row_usuario['telefone']?></td>
      <td><?php  echo $row_usuario['quant_criancas']?></td>
      <td><?php  echo $row_usuario['quant_quartos']?></td>
      <td><?php  echo $row_usuario['check_in']?></td>
      <td><?php  echo $row_usuario['funcionario']?></td>
      <td><?php  echo $row_usuario['preferencia']?></td>
    </tr>
    <?php
       ;
  }
  }
   else {
     echo "Nenhum resultado encontrado";
   }
    ?>

   </tbody>
    </table>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>