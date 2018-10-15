<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastros</title>
</head>
<style>
*{
  margin: 0px auto;
  padding: 0px auto;
  font-family: monospace;
  color: #444444;
}
body{
  background-color: #F5FFFA;
}
#inicio{
  /*border: 1px #FFFFFF solid ;
  background: url(paper.gif);
  border-top-right-radius: 30%;
  border-top-left-radius: 30%;
  box-shadow:  #5F9EA0 15px 15px 15px;
  background-color:#5F9EA0;
  width: 900px;
  height: 200px;
  padding: 20px;
  margin: 50px auto;
  color: #000000;
  text-align: center;
  font-size: 50px;
  font-weight: bolder;
  font-style: oblique;
  font-family: cursive;*/
}

/*#one{
  background-color: #FFFFFF;
  width: 900px;
  height: 300px;
  font-size: 20px;
  border: solid 2px #5F9EA0;
  padding: 20px;
  margin: 15px auto;
  text-align: center;
}
#one a{
align-items:flex-start;
 font-size: 40px;
 color: #000000;
 background-color: #5F9EA0;
 border: solid 30px  #5F9EA0;
 text-align: center;
 text-decoration: none;
}
#one a:hover{
  background-color: #5F9EA0;
  text-decoration: underline;
}*/
/*#two{
  margin: 0px auto;
}*/

#inicio {
  color: #000000;
  font-size: 75px;
  font-weight: bolder;
  font-style: oblique;
  font-family: cursive ;
  text-align: center;
  background-image: url(fundo1.jpg);

   /* mudar esta porra no Ps mais simples */
}
#one{
  padding: inherit;
  weight: 200px;

}
#one ul{
  background-color: #48D1CC;
  padding: 10px;
  list-style-type: none;
  text-align: center;
}

#one ul a{
  color: #000000;
  font-weight: bolder;
  text-decoration:none;
  display: inline-block;
  padding: 1px 25px;
}
#one ul a:hover{
  text-decoration: underline;
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
         <li> <a href="relatorios.php">RELATÓRIOS</a> </li>
         <li> <a href="financas.php">FINANÇAS</a> </li>
         </font>
     </ul>
  </div>

  <!-- <div id="inicio">
    Cadastros
    <br>
    <img src="pata.png" alt="" width="600" height="145" align= "center" >
  </div> -->

  <div id="one" align ="justify">
      <ul>
        <font size="5px">
          <li><a   href = "fornecedor.php">FORNECEDOR</a></li>
          <li><a href = "#">SERVIÇO</a> </li>
          <li><a  href = "#">ANIMAL</a> </li>
          <li><a href = "#">CLIENTE</a> </li>
          <li><a  href = "#">CARGO</a></li>
          <li>  <a  href = "#">FUNCIONÁRIO</a></li>
        </font>
      </ul>
  </div>

  <div id="two">
    <br>

  </div>


</body>
</html> 
