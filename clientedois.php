<!DOCTYPE html>
<html>

<head>
  <title>Cadastros</title>
  <!-- inclui o css -->
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
<?php
include("layout/inicio.php");
 ?>
 <?php
 // Incluir o topo
 include("layout/topo.php");
 ?>
 <?php
 //incluir lateral dos cadastros
 include("layout/lateralCadastros.php");
 ?>

<div id="lateral">
  <?php
  include("cliente.php");
  ?>
</div>

</body>
</html>
