<?php
$nome = trim($_POST['nome']);
$dono = trim($_POST['dono']);
$raca = trim($_POST['raca']);
$comprimento = trim($_POST['comprimento']);
$altura = trim($_POST['altura']);
$carteiraVacina = trim($_POST['carteiraVacina']);



$conecta = mysqli_connect ('localhost', 'root', 'mysql', 'pet');

// Se não conectar
if(!$conecta){
  die("Problema ao conectar no banco!");
}

$sqlinsert = "INSERT INTO animal (nome, dono_id, raca, comprimento, altura, nivelAcesso) VALUES ('$nome', '$dono', '$raca', '$comprimento', '$altura', '$carteiraVacina')";

// echo $sqlinsert . "<br/>";

$resultado =  mysqli_query($conecta, $sqlinsert);

if($resultado){
  echo "Fornecedor inserido com sucesso";
} else {
echo "Falha no cadastro";
}
 ?>
