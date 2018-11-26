<?php
$nome = trim($_POST['nome']);
$dono = trim($_POST['dono']);
$raca = trim($_POST['raca']);
$altura = trim($_POST['altura']);
$carteiraVacina = trim($_POST['carteiraVacina']);
$comprimento = trim($_POST['comprimento']);



$conecta = mysqli_connect ('localhost', 'root', 'mysql', 'pet');

// Se não conectar
if(!$conecta){
  die("Problema ao conectar no banco!");
}

$sqlinsert = "INSERT INTO animal (nome, dono_id, raca, comprimento, altura, carteiravacina) VALUES ('$nome', '$dono', '$raca', '$comprimento', '$altura', '$carteiraVacina')";

// echo $sqlinsert . "<br/>";

$resultado =  mysqli_query($conecta, $sqlinsert);

if($resultado){
  echo "Animal inserido com sucesso";
} else {
echo "Falha no cadastro";
}
 ?>
