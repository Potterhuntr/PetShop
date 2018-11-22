<?php
$nome = trim($_POST['nome']);
$documento = trim($_POST['documento']);
$numContBac = trim($_POST['numContBac']);
$ctps= trim($_POST['ctps']);
$contato = trim($_POST['contato']);
$cidade = trim($_POST['cidade']);
$cargo = trim($_POST['cargo']);
$cep = trim($_POST['cep']);
$rua = trim($_POST['rua']);
$bairro = trim($_POST['bairro']);
$numero = trim($_POST['numero']);
$email = trim($_POST['email']);


$conecta = mysqli_connect ('localhost', 'root', 'mysql', 'pet');

// Se não conectar
if(!$conecta){
  die("Problema ao conectar no banco!");
}

$sqlinsert = "INSERT INTO funcionario (nome, documento, numerocontabancaria, ctps, contato, cidade_id, cargo_id, cep, rua, bairro, numero, email) VALUES ('$nome', '$documento','$numContBac', '$ctps', '$contato', '$cidade', '$cargo', '$cep', '$rua', '$bairro', '$numero', '$email')";

 //echo $sqlinsert . "<br/>";

$resultado =  mysqli_query($conecta, $sqlinsert);

if($resultado){
  echo "Funcionário inserido com sucesso";
} else {
echo "Falha no cadastro";
}
 ?>
