<?php
$preco = trim($_POST['preco']);
$descricao = trim($_POST['descricao']);





$conecta = mysqli_connect ('localhost', 'root', 'mysql', 'pet');

// Se não conectar
if(!$conecta){
  die("Problema ao conectar no banco!");
}

$sqlinsert = "INSERT INTO servico (preco, descricao) VALUES ('$preco', '$descricao')";

//echo $sqlinsert . "<br/>";

$resultado =  mysqli_query($conecta, $sqlinsert);

if($resultado){
  echo "Serviço inserido com sucesso";
}
else {
echo "Falha no cadastro";
}
 ?>
