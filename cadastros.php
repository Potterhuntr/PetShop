<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastros</title>
</head>
<style>
*{
  margin: 0px ;
  padding: 0px ;
  font-family: monospace;
  color: #444444;
}
body{
  background-color: #F5FFFA;
}
#inicio {
  color: #000000;
  font-size: 75px;
  font-weight: bolder;
  font-style: oblique;
  font-family: cursive ;
  text-align: center;
  background-image: url(fundo1.jpg);
}
#one ul{
  background-color: #ADD8E6;
  list-style-type: none;
  text-align: left;
  width: 200px;
  padding: 25px 0px 250px 0px;
}
#one ul a{
 color: #000000;
 text-decoration: none;
 display: block;
 padding: 5px 10px;
 border-left: 	#87CEEB  3px solid;
}
#one ul a:hover{
 background-color: #E0FFFF;
 border-left: #48D1CC  3px solid;

}
#menu-topo{
  padding: inherit;
}
#menu-topo ul{
  background-color: #48D1CC;
  padding: 10px;
  list-style-type: none;
  text-align: center;
}
#menu-topo ul li{
  display: inline;
}
#menu-topo ul a{
  color: #000000;
  font-weight: bolder;
  text-decoration:none;
  display: inline-block;
  padding: 1px 25px;
}
#menu-topo ul a:hover{
  text-decoration: underline;
}
</style>
<body>
  <div id="inicio">
      <img src="logo.png" alt="" width="150" height="150" align= "center">
       Mundo Animal
  </div>

      <div id="menu-topo">
         <ul>
             <font size="5px">
             <li> <a href="cadastros.php">CADASTROS</a> </li>
             <li> <a href="estoque.php">ESTOQUE</a> </li>
             <li> <a href="venda.php">+ NOVA VENDA</a> </li>
             <li> <a href="#">RELATÓRIOS</a> </li>
             <li> <a href="financas.php">FINANÇAS</a> </li>
             </font>
         </ul>
      </div>
  <div id="one" align ="justify">
      <ul>
        <font size="5px">
          <li><a  href = "fornecedor.php">FORNECEDOR</a></li>
          <li><a  href = "servico.php">SERVIÇO</a> </li>
          <li><a  href = "animal.php">ANIMAL</a> </li>
          <li><a  href = "cliente.php">CLIENTE</a> </li>
          <li><a  href = "cargo.php">CARGO</a></li>
          <li><a  href = "funcionario.php">FUNCIONÁRIO</a></li>
        </font>
      </ul>
  </div>
</body>
</html>
