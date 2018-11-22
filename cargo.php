<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro Cargo</title>
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
    if(document.cadastro.descricao.value==""){
    alert("O Campo Descrição é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.nivelAcesso.value==""){
    alert("O Campo Nível de Acesso é obrigatório!");
    return false;
    }
    else
    return true;
    }
  </script>

<body>
<form id="cadastro" name="cadastro" method="post" action="bd_cadastrar/insertCar.php"  onsubmit="return validaCampo(); return false;">

  <table width="625" border="0">

    <tr>

      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Descrição:</td>
      <td width="546"><textarea name="descricao" type="text" id="descricao" maxlength="100" rows="4" cols="70">  </textarea>
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Nível de Acesso:</td>
      <td width="546"><input name="nivelAcesso" type="double" id="nivelAcesso" size="70" maxlength="10" />
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
