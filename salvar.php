<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel= $_POST ['telefone'];
$cria = $_POST ['criancas'];
$quartos = $_POST ['quartos'];
$check = $_POST['Data'];
$funcionario = $_POST ['func'];
$pref = $_POST ['pref'];
$salvar = mysqli_query($mysqli, "INSERT INTO clientes (nome, email, telefone, quant_criancas, quant_quartos, check_in, funcionario, preferencia) VALUES ('$nome','$email', '$tel', '$cria', '$quartos', '$check','$funcionario','$pref')");
if ($salvar) {
  header('location: menu.php');
}
?>