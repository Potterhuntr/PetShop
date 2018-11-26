<?php

$conexao = new mysqli("localhost", "root", "mysql", "pet"); //conectando com o bd

if($conexao === false){
  die("ERROR: não foi possível conectar o bando de dados: " . $conexao->connect_error);
}
$sql = "SELECT * FROM animal";

$animal= $conexao->query($sql);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Relatório Animal</title>
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

if ($animal->num_rows > 0) {

  while($ani = $animal->fetch_assoc()) {


  echo "Nome:  ",$ani['nome'],"  ","Dono:  ",$ani['dono_id'],"  ", "Raça:  ",$ani['raca'],"  ","Comprimeto:   ",$ani['comprimento'], "  ","Altura:   ",$ani['altura'], "  ".
    "Carteira de Vacina:   ",$ani['carteiravacina'];

  echo "<br><br>";

}}
$conexao->close();
?><td></tr></table>
</body>
</html>
