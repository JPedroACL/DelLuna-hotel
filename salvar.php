<?php
include'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel= $_POST ['telefone'];
$cria = $_POST ['criancas'];
$quartos = $_POST ['quartos'];
$check = $_POST['Data'];
$funcionario = $_POST ['func'];
$pref = $_POST ['pref'];
$Salvar = mysqli_query($mysqli, "INSERT INTO clientes (nome, email, telefone, quant.criancas, quant.quartos, check_in, funcionario, preferencias)  ('$nome','$email', '$tel', '$cria', '$quartos', '$check','$funcionario','$pref')");
if ($salvar) {
  header('location: menu.php');
}
?>
