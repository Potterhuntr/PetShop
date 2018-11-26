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
    <title>Relatório Fornecedor</title>
  </head>
  <style type="text/css">

    .style1 {
    color: #FF0000;
    font-size: x-small;
    }

    .style3 {color: #0000FF; font-size: x-small;
    }

    table, tr, td {
    border: 1px solid black;
     }

  </style>
  <body>



<table align="justify" >


<tr align="justify" >
  <td align="justify" >
<?php

if ($fornecedor->num_rows > 0) {

  while($for = $fornecedor->fetch_assoc()) {


  echo "Nome:  ",$for['nome'],"  ","Documento:  ",$for['documento'],"  ", "Contato:  ",$for['contato'],"  ","Cidade:   ",$for['cidade_id'], "  ","CEP:   ",$for['cep'], "  ".
    "Bairro:   ",$for['bairro'], "  ","Rua:   ",$for['rua'],"  ","Número:   ",$for['numero'],"  ","Email:   ",$for['email'];

  echo "<br><br>";

}}
$conexao->close();
?><td></tr></table>
</body>
</html>
