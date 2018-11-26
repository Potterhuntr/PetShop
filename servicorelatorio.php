<!DOCTYPE html>
<html>
<head>
  <title>Relatorios</title>
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
  // Incluir o topo
include("layout/lateralRelatorios.php");
;
  ?>

<div id="lateral">
<?php
  include("bd_consultar/relatorioSer.php")
 ?>
</div>

</body>
</html>
