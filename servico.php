<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro Serviço</title>
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
    if(document.cadastro.descricao.value==""){
    alert("O Campo Descrição é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.preco.value==""){
    alert("O Campo Preço é obrigatório!");
    return false;
    }
    else
    return true;
    }
  </script>

<body>
<form id="cadastro" name="cadastro" method="post" action="cadastros.php" onsubmit="return validaCampo(); return false;">

  <table width="625" border="0">
    <tr>

      <td width="69">Descrição:</td>
      <td width="546"><textarea name="descricao" type="text" id="descricao" maxlength="255" rows="4" cols="70">  </textarea>
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Preço:</td>
      <td width="546"><input name="preco" type="double" id="preco" size="70"  />
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
