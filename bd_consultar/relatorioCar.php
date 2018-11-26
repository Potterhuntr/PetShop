<?php

$conexao = new mysqli("localhost", "root", "mysql", "pet"); //conectando com o bd

if($conexao === false){
  die("ERROR: não foi possível conectar o bando de dados: " . $conexao->connect_error);
}
$sql = "SELECT * FROM cargo";

$cargo= $conexao->query($sql);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Relatório Cargo</title>
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

if ($cargo->num_rows > 0) {

  while($car = $cargo->fetch_assoc()) {


  echo "Nome:  ",$car['nome'],"  ","Descrição:  ",$car['descricao'],"  ","Nível de Acesso:  ",$car['nivelAcesso'];

  echo "<br><br>";

}}
$conexao->close();
?><td></tr></table>
</body>
</html>
