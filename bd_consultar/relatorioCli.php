<?php

$conexao = new mysqli("localhost", "root", "mysql", "pet"); //conectando com o bd

if($conexao === false){
  die("ERROR: não foi possível conectar o bando de dados: " . $conexao->connect_error);
}
$sql = "SELECT * FROM cliente";

$cliente= $conexao->query($sql);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Relatório Cliente</title>
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

if ($cliente->num_rows > 0) {

  while($cli = $cliente->fetch_assoc()) {


  echo "Nome:  ",$cli['nome'],"  ","Documento:  ",$cli['documento'],"  ", "Contato:  ",$cli['contato'],"  ","Cidade:   ",$cli['cidade_id'], "  ","CEP:   ",$cli['cep'], "  ".
    "Bairro:   ",$cli['bairro'], "  ","Rua:   ",$cli['rua'],"  ","Número:   ",$cli['numero'];

  echo "<br><br>";

}}
$conexao->close();
?><td></tr></table>
</body>
</html>
