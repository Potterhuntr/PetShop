<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>

</head>

<style>

    *{
      margin: 0px;
      padding: 0px;
      font-family: Roboto;
      color: #000000;
    }

    body{
      background-color: #DFDFDF;
      background-image: url("fundo1.jpg");
    }

  .login {
    width: 350px;
    padding: 15px;
    background-color: #5F9EA0;
    text-align: center;
    margin: 200px auto;
  }

  .login .campo{
    padding: 5px 15px;
    font-size: 20px;
    background-color: #F0FFFF;
  }

  .login form input{
    margin-bottom: 15px;
  }

  .login .botao{
    padding: 10px 25px;
    border: solid 1px  #b3b3ff;
    background-color:  #b3b3ff;
    font-size: 15px;
  }

  .login .botao.entrar{
    background-color: #2F4F4F;
    border-color: #2F4F4F;
    color: #FFFFFF;
  }

  .login a{
    color: #FFFFFF;
    text-decoration: underline;;
    font-size: 13px;
  }

  .login a:hover{
    color: #ffff00;
  }

</style>
<body>

  <div class="login">

    <img src="user.png"
     height="150" alt="">

    <form class="" action="" method="post">
      <label for="">Usuário ou email:</label><br>
      <input type="text" name="usuario" value="" class="campo"
       placeholder="usuario@email.com"  ><br>


    <label for=""><font color="white">Senha:</font></label><br>
      <input type="password" name="senha" value="" class="campo"><br>


    <input type="submit" name="" value="ENTRAR" src= "index.html" class="botao entrar"  >


      <br>
      <a href="#">Esqueceu a senha?</a>

    </form>

  </div>

</body>
</html>
