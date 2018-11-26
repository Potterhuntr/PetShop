<?php

$conexao = new mysqli("localhost", "root", "mysql", "pet"); //conectando com o bd

if($conexao === false){
  die("ERROR: não foi possível conectar o bando de dados: " . $conexao->connect_error);
}
$sql = "SELECT * FROM funcionario";

$funcionario= $conexao->query($sql);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Relatório Funcionário</title>
  </head>
  <style type="text/css">

  *{
    color: #000000;

  }
    .style1 {
    color: #FF0000;
    font-size: x-small;
    }

    .style3 {color: #0000FF; font-size: x-small;
    }


     tr {
     text-align: left;
 }


  </style>
  <body>



<table align="center" >

  <tr>
    <th>Nome:      </th>
    <th>Documento:     </th>
    <th>Conta Bancária:        </th>
    <th>CTPS:         </th>
    <th>Contato:      </th>
    <th>Cargo:</th>
    <th>Cidade:</th>
    <th>CEP:</th>
    <th>Bairro:</th>
    <th>Rua:</th>
    <th>Número:</th>
    <th>Email:</th>

  </tr>



<?php

if ($funcionario->num_rows > 0) {

  while($fun= $funcionario->fetch_assoc()) {

    echo "<tr>";

    echo "<td>{$fun['nome']}</td>";

    echo "<td>{$fun['documento']}</td>";

    echo "<td>{$fun['numerocontabancaria']}</td>";

    echo "<td>{$fun['ctps']}</td>";

    echo "<td>{$fun['contato']}</td>";

    echo "<td>{$fun['cargo_id']}</td>";

    echo "<td>{$fun['cidade_id']}</td>";

    echo "<td>{$fun['bairro']}</td>";

    echo "<td>{$fun['rua']}</td>";

    echo "<td>{$fun['numero']}</td>";

    echo "<td>{$fun['email']}</td>";

    echo "</tr>";

}}
$conexao->close();
?>

</table>


</body>
</html>
