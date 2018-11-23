<?php
$nome = trim($_POST['nome']);
$descricao = trim($_POST['descricao']);
$nivelAcesso = trim($_POST['nivelAcesso']);




$conecta = mysqli_connect ('localhost', 'root', 'mysql', 'pet');

// Se não conectar
if(!$conecta){
  die("Problema ao conectar no banco!");
}

$sqlinsert = "INSERT INTO cargo (nome, descricao, nivelAcesso) VALUES ('$nome', '$descricao', '$nivelAcesso')";

//echo $sqlinsert . "<br/>";

$resultado =  mysqli_query($conecta, $sqlinsert);

if($resultado){
  echo "Cargo inserido com sucesso";
}
else {
echo "Falha no cadastro";
}


 ?>
