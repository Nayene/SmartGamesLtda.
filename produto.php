<?php 
  require_once("conexao.php");
  $conexao=conexaoBD();


    // if(isset($_GET['produto'])){
    //     $sql = "SELECT * FROM tbl_produto WHERE idproduto=".$_GET['produto'];
    // }

    

  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Smart Games LTDA. </title>
            <link rel="stylesheet" type="text/css" href=" CSS/style.css">
            <meta charset="utf-8">
	
	</head>
    <body>
        <div class="tela">
            <header class="header">
                <div class="caixa_header">
                    <a href="index.php"><div class="caixa_logo"></div></a>
                    <div class="caixa_pesquisa">
                         <form name="frmBusca" method="get" action="busca.php" >
                                <input type="search" id="txtPesquisa" autocomplete="on" name="txtPesquisa" class="search" placeholder="pesquisar">
                                <input type="submit"  value="Buscar" name="bntBuscar" id="btnBuscar" class="buscar"/>
                        </form>
                    </div>
                    <div class="caixa_redes">
                        <div id="caixa_face"></div>
                        <div id="caixa_insta"></div>
                        <div id="caixa_whats"></div>
                    </div>
                </div>
            </header>
            
            <section class="section" >
                 <div class="caixa_menu">
                 <div class="caixa_menu_item">
                        <?php
                            $sqlCat="SELECT  * FROM tbl_console";
                        
                            $selectCat = mysqli_query($conexao,$sqlCat);
                        
                            while($rsCategoria=mysqli_fetch_array($selectCat)){
                        ?>
                        
                        <div class="item">
                         <a href="categoria.php?console=<?php echo($rsCategoria['idconsole'])?>">
                                <?php echo($rsCategoria['nome'])?>
                            </a>
                        </div>

                        <?php
                            }
                        ?>

                        </div>

                    </div>
               
            <?php
               $sql="SELECT * FROM tbl_produto WHERE idproduto=".$_GET['produto'];
                         
               $select = mysqli_query($conexao,$sql);
               
               while($rsJogos=mysqli_fetch_array($select)){
            ?>
                        
                <div class="caixa_conteudoProduto"> 
                     <img src="img/<?php echo($rsJogos['foto'])?>">
                </div>
                <div class="caixa_descricao">
                    <H1> Descrição </H1>
                    <div class="descricao">
                        <br>
                        <?php echo($rsJogos['descricao'])?>
                    </div>
                    <br>
                    <H1>Desenvolvedora</H1>
                    <div class="descricao">
                        <br>
                        <?php echo($rsJogos['desenvolvedora'])?>
                    </div>
                </div>
             <?php
               $sql="SELECT * FROM tbl_loja WHERE idloja=".$_GET['loja'];
                         
               $select = mysqli_query($conexao,$sql);
               
               while($rsloja=mysqli_fetch_array($select)){
            ?>
                
                <div class="lojasProdutos">
                    <h1>Jogo Disponivel na Loja:</h1>
                    <div class="caixa_loja"> 
                        <?php echo($rsloja['nome'].'-'.$rsloja['rua'].'-'. $rsloja['bairro'].'-'.$rsloja['cidade'].'-'.$rsloja['estado'])?> 

                    </div>
                  
                    <br>
                    <div class="caixa_mapsPro">
                    <iframe src="<?php echo($rsloja['endmaps'])?>" width="1300" height="350"  style="border:0" allowfullscreen></iframe>
                    </div>
                    
                    
                  <?php
               }
               }
                  ?>  
                </div>
            </section>
            
            <footer>
                <div class="footer">
                <div class="caixa_informacoes">
                    <div class="caixa_footer">
                        <!-- direciona para a tela do fale conosco -->
                        <h3>
                            FALE CONOSCO
                        </h3>
                        <h5>
                            (11)95450-3968 <br> (11)4144-5263 <br>  SENAI- Jandira
                        </h5>
                    </div>
                    <div class="caixa_footer">
                        <!-- direciona para a tela noosas lojas -->
                        <h3>
                           <a href="nossaslojas.php">NOSSAS LOJAS </a>
                        </h3>
                        <h5>
                            Rua Elton Silva, 905 <br> Centro, Jandira - SP, 06600-025
                        </h5>
                    </div>
                    <div class="caixa_footer">
                        <h3>ESCREVA-NOS </h3>
                        <h5>smartgamesltda@gmail.com <br>nayene@gmail.com</h5>
                    </div>
                </div>
                    © 2018 SmartGamesLtda.
                </div>
            </footer>
        </div>
    </body>
</html>