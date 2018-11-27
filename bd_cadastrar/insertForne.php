<meta http-equiv="refresh" content="1;url= ../cadastros.php">
<?php
$nome = trim($_POST['nome']);
$documento = trim($_POST['documento']);
$contato = trim($_POST['contato']);
$cidade = trim($_POST['cidade']);
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

$sqlinsert = "INSERT INTO fornecedor (nome, documento, contato, cidade_id, cep, rua, bairro, numero, email) VALUES ('$nome', '$documento', '$contato', '$cidade', '$cep', '$rua', '$bairro', '$numero', '$email')";

// echo $sqlinsert . "<br/>";

$resultado =  mysqli_query($conecta, $sqlinsert);

if($resultado){
  echo "Fornecedor inserido com sucesso";
} else {
echo "Falha no cadastro";
}
 ?>
