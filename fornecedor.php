<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro Fornecedor</title>
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
    if(document.cadastro.documento.value==""){
    alert("O Campo Documento é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.contato.value==""){
    alert("O Campo Contato é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.estado.value==""){
    alert("O Campo Estado é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.cidade.value==""){
    alert("O Campo Cidade é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.cep.value==""){
    alert("O Campo CEP é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.rua.value==""){
    alert("O Campo Rua/Avenida é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.bairro.value==""){
    alert("O Campo Bairro é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.numero.value==""){
    alert("O Campo Número é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.email.value=="")
    {
    alert("O Campo email é obrigatório!");
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

      <td width="69">Documento:</td>
      <td width="546"><input name="documento" type="text" id="documento" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Contato:</td>
      <td width="546"><input name="contato" type="text" id="contato" size="55" maxlength="255" />
      <span class="style1">*</span> <span class="style3">Apenas números</span> </td>

    </tr>

    <tr>

      <td width="69">Estado:</td>
      <td><select name="estado" id="estado" >
        <option >Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
        </select>
        <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Cidade:</td>
      <td><input name="cidade" type="text" id="cidade" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">CEP:</td>
      <td><input name="cep" type="text" id="cep" size="70" maxlength="50" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Rua/Avenida:</td>
      <td width="546"><input name="rua" type="text" id="rua" size="70" maxlength="255" />
      <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">Bairro:</td>
      <td><input name="bairro" type="text" id="bairro" size="42" maxlength="255"/>
      <span class="style1">*</span>
      Número:
        <input name="numero" type="text" id="numero" size="10" maxlength="255"/>
        <span class="style1">*</span>
       </td>

    </tr>

    <tr>
      <td width="69">Email:</td>
      <td><input name="email" type="text" id="email" size="70" maxlength="255" />
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
