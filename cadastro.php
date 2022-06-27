<?php
//include 'salvar.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="teste.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="js.js">




  <title>Document</title>
</head>

<body>

  <div class="container">
    <center>
      <div class="col-sm-3">

        <h2 class="titulo">Cadastre o Cliente</h2>

        <br>

        <form action="salvar.php" method="POST">


          <label> Nome:</label> <br>
          <input type="text" class="form-control" name="nome" placeholder="Nome do Cliente" required> <i class="bi bi-person-fill"></i><br>
          <label> Email:</label <br>
          <input type="Email" class="form-control" name="email" placeholder="Digite Email do Cliente" required><br>


          Telefone: <input type="tel" class="form-control" placeholder="(00) 0 0000-0000" maxlength="11" id="phone" oninput="mascaratel('tele')" inputmode="numeric" name="telefone" required>
          <br>

          Tem crianças ?: <input type="number" min="0" max="5" name="criancas"><br><br>

          Quantidade de quartos: <input type="number" min="1" max="4" name="quartos"><br><br>


          <label> Check-in:</label <br>
          <input type="date" class="form-control" placeholder="" name="Data"><br>

          Funcionario: <input type="text" class="form-control" placeholder="Nome do funcionário" name="func"><br>

          preferências :<input type="text" class="form-control" placeholder="Digite as preferências" name="pref"><br>
          <a href="menu.php"><button class="btn btn-success" onclick="validar()" name="submit">Cadastrar-se</button>
          </a>
    
      
    </form>
    </div>
    </center> 
  </div>
  


  <script src="js.js"></script>



</body>


</html>