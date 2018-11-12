<?php
$nome = trim($_POST['nome']);
$documento = trim($_POST['documento']);
$contato = trim($_POST['contato']);
$estado = trim($_POST['estado']);
$cidade = trim($_POST['cidade']);
$cep = trim($_POST['cep']);
$rua = trim($_POST['rua']);
$bairro = trim($_POST['bairro']);
$numero = trim($_POST['numero']);
$email = trim($_POST['email']);


$conecta = mysqli_connect ('localhost', 'root', 'mysql', 'Pet');

$sqlinsert = "INSERT INTO fornecedor (nome, documento, contato, estado, cidade, cep, rua, bairro, numero, email) VALUES"
 ."('$nome', '$documento', '$contato', '$estado', '$cidade', '$cep', '$rua', '$bairro', '$numero', '$email')";

//
//

$resultado =  mysqli_query($conecta, $sqlinsert);

if($resultado){
  echo "Fornecedor inserido com sucesso";
} else {
echo "Falha no cadastro";
}
 ?>
