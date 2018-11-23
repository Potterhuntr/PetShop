<?php

$conexao = new mysqli("localhost", "root", "mysql", "pet"); //conectando com o bd

if($conexao === false){
  die("ERROR: não foi possível conectar o bando de dados: " . $conexao->connect_error);
}
$sql = "SELECT * FROM fornecedor";

$fornecedor= $conexao->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form name="dono" id="dono" >

<?php
if ($fornecedor->num_rows > 0) {

  while($for = $fornecedor->fetch_assoc()) {
    echo "<option values={$for['nome']} </option>";

  }}

/*'contato',
 'cidade_id',
  'cep', 'rua',
  'bairro',{$for['documento']},{$for['contato']}
  'numero']}</option>";*/
$conexao->close();
      ?></form>
</body>
</html>
