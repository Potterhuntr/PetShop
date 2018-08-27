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
           background-color: #5F9EA0;
         }

         body{

           background-color: #000000;
           background-image: url(fundo1.jpg);
         }

         #inicio {
           border: 1px #FFFFFF solid ;
           background: url(paper.gif);
           border-top-right-radius: 30%;
           border-top-left-radius: 30%;
           box-shadow:  #5F9EA0 15px 15px 15px;
           background-color:#5F9EA0;
           width: 850px;
           height: 300px;
           padding: 15px;
           margin: 0px auto;
           color: #000000;
           text-align: center;
           font-size: 50px;
           font-weight: bolder;
           font-style: oblique;
           font-family: cur ;
         }

         #menu-topo{
           width: 850px;
           height: 15px;
           padding: 15px;
           margin: 20px auto;
           border: 1px #FFFFFF solid ;
         }


         #menu-topo ul{
           background-color:  #5F9EA0;
           list-style-type: none;
           box-shadow:  #5F9EA0 2px 5px 10px;
           text-align: center;
         }

         #menu-topo ul li{
           background-color:  #5F9EA0;
           display: inline;


         }

         #menu-topo ul a{
           background-color:  #5F9EA0;
           color: #000000;
           font-weight: bolder;
           text-decoration:none;
           display: inline-block;
           padding: 1px 25px;
         }

         #menu-topo ul a:hover{
           background-color: #5F9EA0;
           text-decoration: underline;
         }

         #primeiro {
             border: 5px #FFFFFF solid ;
             background-color: /*#D3D3D3*/ #ffffff	;
             font-size: 40px;
             font-weight: bolder;
             color: #000000;
             text-align: center;
             width: 850px;
             height: 150px;
             padding: 15px;
             margin: 20px auto;
             border: 1px #FFFFFF solid ;
         }

         #primeiro a{
           font-size: 15px;
           color: #000000;
           background-color: #5F9EA0;
           border: solid 5px  #5F9EA0;
           text-align: center;
           text-decoration: none;
         }


         #segundo {
           border: 1px #FFFFFF solid ;
           background-color: #D3D3D3	;
           font-size: 40px;
           font-weight: bolder;
           color: #000000;
           text-align: center;
           width: 850px;
           height: 150px;
           padding: 15px;
           margin: 20px auto;
           border: 1px #FFFFFF solid;

         }

         #segundo a{
           font-size: 15px;
           color: #000000;
           background-color: #5F9EA0;
           border: solid 5px  #5F9EA0;
           text-align: center;
           text-decoration: none;
         }

         #terceiro {
           border: 1px #FFFFFF solid ;
          background-color: #D3D3D3	;
           font-size: 40px;
           font-weight: bolder;
           color: #000000;
           text-align: center;
           width: 850px;
           height: 150px;
           padding: 15px;
           margin: 20px auto;
           border: 1px #FFFFFF solid ;

         }

         #terceiro a{
           font-size: 15px;
           color: #000000;
           background-color: #5F9EA0;
           border: solid 5px  #5F9EA0;
           text-align: center;
           text-decoration: none;
         }

         #quarto {
           border: 1px #FFFFFF solid ;
           background-color: #D3D3D3	;
           font-size: 40px;
           font-weight: bolder;
           color: #000000;
           text-align: center;
           width: 850px;
           height: 150px;
           padding: 15px;
           margin: 20px auto;
           border: 1px #FFFFFF solid ;
         }

         #quarto a{
           font-size: 15px;
           color: #000000;
           background-color: #5F9EA0;
           border: solid 5px  #5F9EA0;
           text-align: center;
           text-decoration: none;
         }

         #quinto {
           border: 1px #FFFFFF solid ;
           background-color: #D3D3D3	;
           font-size: 40px;
           font-weight: bolder;
           color: #000000;
           text-align: center;
           width: 850px;
           height: 150px;
           padding: 15px;
           margin: 0px auto;
           border: 1px #FFFFFF solid ;
         }

         #quinto a{
           font-size: 15px;
           color: #000000;
           background-color: #5F9EA0;
           border: solid 5px  #5F9EA0;
           text-align: center;
           text-decoration: none;
         }


       </style>

  <body>
        <div id="inicio">
            <br>
            <img src="logo.png" alt="" width="150" height="150" align= "center">
            <br>
           Mundo Animal
            <br><br>
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

       <div id="primeiro">
         <br>
          CADASTROS
         <br>
         <a href = "cadastros.php">ENTRAR</a>
         <br>
         <br>
       </div>

       <div id="segundo">
        <br>
         ESTOQUE
        <br>
        <a href = "estoque.php">ENTRAR</a>
        <br>
        <br>
       </div>

       <div id="terceiro">
         <br>
          +NOVA VENDA
         <br>
         <a href = "venda.php">ENTRAR</a>
         <br>
         <br>
       </div>

       <div id="quarto">
         <br>
          RELATÓRIOS
         <br>
         <a href = "relatorios.php">ENTRAR</a>
         <br>
         <br>
       </div>

       <div id="quinto">
          <br>
           FINANÇAS
          <br>
          <a href = "financas.php">ENTRAR</a>
          <br>
          <br>
       </div>

  </body>
</html>
