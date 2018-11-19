<?php
$nome = trim($_POST['nome']);
$documento = trim($_POST['documento']);
$contato = trim($_POST['contato']);
$cidade = Integer.parseInt(trim($_POST['cidade']));
$cep = trim($_POST['cep']);
$rua = trim($_POST['rua']);
$bairro = trim($_POST['bairro']);
$numero = trim($_POST['numero']);



$conecta = mysqli_connect ('localhost', 'root', 'mysql', 'pet');

// Se não conectar
if(!$conecta){
  die("Problema ao conectar no banco!");
}

$sqlinsert = "INSERT INTO cliente (nome, documento, contato, cidade_id, cep, rua, bairro, numero) VALUES ('$nome', '$documento', '$contato', '$cidade', '$cep', '$rua', '$bairro', '$numero')";

// echo $sqlinsert . "<br/>";

$resultado =  mysqli_query($conecta, $sqlinsert);

if($resultado){
  echo "Cliente inserido com sucesso";
} else {
echo "Falha no cadastro";
}
 ?>
