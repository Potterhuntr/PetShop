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
<form id="cadastro" name="cadastro" method="post" action="cadastros.php" onsubmit="return validaCampo(); return false;">

  <table width="625" border="0">
    <tr>

      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Dono:</td>
      <td><select name="dono" id="dono" >
        <option >Selecione...</option>
        <option value="Conectar com o banco">Conectar com o banco</option>
        </select>
        <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Raça:</td>
      <td width="546"><input name="raca" type="text" id="raca" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Comprimento:</td>
      <td width="546"><input name="comprimeto" type="text" id="comprimento" size="70" maxlength="255" />
      <span class="style1">*</span>  </td>

    </tr>


    <tr>

      <td width="69">Altura:</td>
      <td><input name="altura" type="text" id="altura" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">CEP:</td>
      <td><input name="cep" type="text" id="cep" size="70" maxlength="50" />
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
