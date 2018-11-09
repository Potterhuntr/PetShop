<?php
$nome = trim($_POST['nome']);
$documento = trim($_POST['documento']);
$contato = trim($_POST['contato']);
$estado = trim($_POST['estado']);
$cidade = trim($_POST['cidade']);
$cep = trim($_POST['cep']);
$rua = trim($_POST['rua']);
$bairro = trim($_POST['bairro']);
$numero = trim($_POST['numero']);
$email = trim($_POST['email']);


$conecta = mysqli_connect ('localhost', 'root', 'mysql', 'pet');
$sqlinsert = "INSERT INTO Fornecedor ()"

if($mysqli->connect_errno){
  echo "Falha na conexão : (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
}
 ?>
