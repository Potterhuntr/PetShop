<?php

$conexao = new mysqli("localhost", "root", "mysql", "pet"); //conectando com o bd

if($conexao === false){
  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}
$sql = "SELECT * FROM cliente ORDER BY nome";

$clientes= $conexao->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro Animal</title>

  </head>

  <style type="text/css">

    .style1 {
    color: #FF0000;
    font-size: x-small;
    }

    .style3 {color: #0000FF; font-size: x-small;
    }

  </style>

<!-- Validação Campos -->
  <script type="text/javascript">
    function validaCampo()
    {
    if(document.cadastro.nome.value==""){
    alert("O Campo Nome é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.dono.value==""){
    alert("O Campo Dono é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.raca.value==""){
    alert("O Campo Raça é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.comprimento.value==""){
    alert("O Campo Comprimento é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.altura.value==""){
    alert("O Campo Altura é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.carteiraVacina.value==""){
    alert("O Campo Carteira de Vacina é obrigatório!");
    return false;
    }
    else
    return true;
    }
  </script>

<body>
<form id="cadastro" name="cadastro" method="post" action="bd_cadastrar/insertAni.php" onsubmit="return validaCampo(); return false;">

  <table width="625" border="0">
    <tr>

      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>
      <td>Dono:</td><br>
        <td><select name="dono" id="dono" type = "Integer">
          <?php

          if ($clientes->num_rows > 0) {
            echo '<option value="">Selecione um dono</option>';

            while($cli = $clientes->fetch_assoc()) {
              echo "<option value=\"{$cli['id']}\">{$cli['nome']}</option>";
            }

          } else {
            echo '<option value="">Nenhum cliente cadastrado</option>';
          }
          $conexao->close();
          ?></select>
          <span class="style1">*</span></td>

  </tr>

    <tr>

      <td width="69">Raça:</td>
      <td width="546"><input name="raca" type="text" id="raca" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Comprimento:</td>
      <td width="546"><input name="comprimento" type="text" id="comprimento" size="70" maxlength="255" />
      <span class="style1">*</span>  </td>

    </tr>


    <tr>

      <td width="69">Altura:</td>
      <td><input name="altura" type="text" id="altura" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>



    <tr>

      <td width="69">Carteira de Vacina:</td>
      <td width="546"><input name="carteiraVacina" type="text" id="carteiraVacina" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

    <td colspan="2"><p>
      <input name="cadastrar" type="submit" id="cadastrar" value="Concluir"/>

      <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />

      <span class="style1">* Campos com * são obrigatórios!</span></p></td>

    </tr>

  </table>

</form>
  </body>
</html>
