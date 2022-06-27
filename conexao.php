<?php
 $hostname = "localhost";
 $usuario = "root";
 $senha = "";
 $bancodedados = "delluna";


$mysqli = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
if(!$mysqli){
    echo "Falha ao conectar:";
}
else{
    echo "Conectado";
}

?>