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


        table, th, td {
       border: 1px solid black;
      }

      </style>
      <body>



      <table align="center" >

      <tr>
        <th>Nome:</th>
        <th>Dono:</th>
        <th>Raça:</th>
        <th>Comprimento:</th>
        <th>Altura:</th>
        <th>Carteira Vacina:</th>


      </tr>



    <?php

    if ($animal->num_rows > 0) {

      while($ani = $animal->fetch_assoc()) {


        echo "<tr>";

        echo "<td>{$ani['nome']}</td>";

        echo "<td>{$ani['dono_id']}</td>";

        echo "<td>{$ani['raca']}</td>";

        echo "<td>{$ani['comprimento']}</td>";

        echo "<td>{$ani['altura']}</td>";

        echo "<td>{$ani['carteiravacina']}</td>";

        echo "<td>{$ani['rua']}</td>";

        echo "<td>{$ani['numero']}</td>";

        echo "</tr>";

    }}
    $conexao->close();
    ?>
    </table>
</body>
</html>
