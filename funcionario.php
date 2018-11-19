<?php

$conexao = new mysqli("localhost", "root", "mysql", "pet"); //conectando com o bd

if($conexao === false){
  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}

$sql = "SELECT * FROM cidade ORDER BY nome";

$cidades = $conexao->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro Funcionário</title>
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
    if(document.cadastro.numContBac.value==""){
    alert("O Campo Cidade é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.ctps.value==""){
    alert("O Campo Cidade é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.contato.value==""){
    alert("O Campo Contato é obrigatório!");
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
<form id="cadastro" name="cadastro" method="post" action="bd_cadastrar/insertFun.php" onsubmit="return validaCampo(); return false;">

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

      <td size="69">Conta Bancária:</td>
      <td aling= "center" width="546"><input name="numContBac" type="text" id="numContBac" size="55" maxlength="255"  aling/>
      <span class="style1">*</span> <span class="style3">Apenas números</span> </td>

    </tr>

    <tr>

      <td width="69">CTPS:</td>
      <td width="546"><input name="ctps" type="text" id="ctps" size="55" maxlength="255" />
      <span class="style1">*</span> <span class="style3">Apenas números</span> </td>

    </tr>

    <tr>

      <td width="69">Contato:</td>
      <td width="546"><input name="contato" type="text" id="contato" size="55" maxlength="255" />
      <span class="style1">*</span> <span class="style3">Apenas números</span> </td>

    </tr>

    <tr>

      <tr>
        <td>Cidade:</td><br>
          <td><select name="cidade" id="cidade">
            <?php

            if ($cidades->num_rows > 0) {
              echo '<option value="">Selecione uma cidade</option>';

              while($cid = $cidades->fetch_assoc()) {
                echo "<option value=\"{$cid['id']}\">{$cid['nome']}</option>";
              }

            } else {
              echo '<option value="">Nenhuma cidade cadastrada</option>';
            }
            $conexao->close();
            ?></select>
            <span class="style1">*</span></td>

    </tr>

    <tr>

      <td width="69">CEP:</td>
      <td width="546"><input name="cep" type="text" id="cep" size="70" maxlength="50" />
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
      <input name="cadastrar1" type="submit" id="cadastrar1" value="Concluir"/>

      <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />

      <span class="style1">* Campos com * são obrigatórios!</span></p></td>

    </tr>

  </table>

</form>
  </body>
</html>
