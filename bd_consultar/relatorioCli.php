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


  </tr>



<?php

if ($cliente->num_rows > 0) {

  while($cli = $cliente->fetch_assoc()) {


    echo "<tr>";

    echo "<td>{$cli['nome']}</td>";

    echo "<td>{$cli['documento']}</td>";

    echo "<td>{$cli['contato']}</td>";

    echo "<td>{$cli['cidade_id']}</td>";

    echo "<td>{$cli['cep']}</td>";

    echo "<td>{$cli['bairro']}</td>";

    echo "<td>{$cli['rua']}</td>";

    echo "<td>{$cli['numero']}</td>";

    echo "</tr>";

}}
$conexao->close();
?>
</table>
</body>
</html>
