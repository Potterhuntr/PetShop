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
    table, th, td {
   border: 1px solid black;
  }



  </style>
  <body>



  <table align="center" >

  <tr>
    <th>Nome:</th>
    <th>Documento:</th>
    <th>Contato:</th>
    <th>Cidade:</th>
    <th>CEP:</th>
    <th>Bairro:</th>
    <th>Rua:</th>
    <th>Número:</th>
    <th>Email:</th>

  </tr>



<?php

if ($fornecedor->num_rows > 0) {

  while($for = $fornecedor->fetch_assoc()) {


    echo "<tr>";

    echo "<td>{$for['nome']}</td>";

    echo "<td>{$for['documento']}</td>";

    echo "<td>{$for['contato']}</td>";

    echo "<td>{$for['cidade_id']}</td>";

    echo "<td>{$for['cep']}</td>";

    echo "<td>{$for['bairro']}</td>";

    echo "<td>{$for['rua']}</td>";

    echo "<td>{$for['numero']}</td>";

    echo "<td>{$for['email']}</td>";

    echo "</tr>";

}}
$conexao->close();
?>
</table>
</body>
</html>
