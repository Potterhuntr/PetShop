<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
  </head>
  <style>
       *{
          margin-top: 0px auto;
          margin: 0px auto;
           font-family: monospace  ;
           color: #444444;
         }
         body{
           background-color: #E0FFFF ;
           /*background-image: url(fundo1.jpg);*/
         }
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
  </body>
</html>
