<?php
    // conexao com o banco
    require_once("conexao.php");
    $conexao=conexaoBD();

    
    // verificando se existe essa variavel 
    if(isset($_GET['console'])){
        $sql = "SELECT * FROM tbl_console WHERE idconsole=".$_GET['console']; 
    }

   

    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Smart Games LTDA. </title>
            <link rel="stylesheet" type="text/css" href=" CSS/style.css">
            <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	</head>
    <body>
        <div class="tela">
            <!-- cabeçario --> 
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
            <!-- conteudo --> 
            <section class="section" >
                <div class="caixa_menu">

                    <div class="caixa_menu_item">
                        <!-- select para pegar o nome do console para o menu  --> 
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
                
                <!-- slide --> 
                <div class="slide">
                    <div id="wowslider-container0">
                        <div class="ws_images"><ul>
                            <li><img src="img/slide1.jpg" alt="imagem slide" title="" id="wows0_0"/></li>
                            <li><img src="img/imgxbox.jpg" alt="imagem slide" title="" id="wows0_1"/></li>
                            <li><img src="img/slide2.jpeg" alt="imagem slide" title="" id="wows0_2"/></li>
                            </ul>
                        </div>
                        <div class="ws_bullets">
                            <div>
                            <a href="#" title=""><span>1</span></a>
                            <a href="#" title=""><span>2</span></a>
                            <a href="#" title=""><span>3</span></a>
                            </div>
                        </div>
                        <div class="ws_shadow"></div>
                    </div>	
                    <script type="text/javascript" src="engine0/wowslider.js"></script>
                    <script type="text/javascript" src="engine0/script.js"></script>
                </div>
             

                
                <!-- jogos --> 
                 <div class="caixa_conteudo">
                    <div class="caixa_textotitulo">
                          Jogos Populares do X-Box 360
                    </div>
                     
                    <div class="caixa_vermais">
                        <a href="categoria.php">Veja Mais</a>
                    </div>
                     <!-- select para pegar os jogos da tabela produtos segundo o id  --> 
                     <?php
                        $sql="SELECT * FROM tbl_produto WHERE idconsole = 1 LIMIT 5;";
                         
                        $select = mysqli_query($conexao,$sql);
                        
                        while($rsJogos=mysqli_fetch_array($select)){
                            
                     ?>
                <a href="categoria.php?idProduto=<?php echo($rsJogos['idproduto'])?>&console=<?php echo($rsJogos['idconsole'])?>">
                    <div class="caixa_jogo">
                        <div class="caixa_img">
                            <img src="img/<?php echo($rsJogos['foto'])?>">
                        </div>
                        
                        <div class="caixa_titulo">
                           <?php echo($rsJogos['nome'])?>
                        </div>
                         
                        
                    </div>
                   </a>
                     <?php
                     
                        }
                     ?>

                    
                </div>
                
                  
                 <div class="caixa_conteudo">
                    <div class="caixa_textotitulo">
                          Jogos Populares do X-Box 360
                    </div>
                     
                    <div class="caixa_vermais">
                        <a href="categoria.php">Veja Mais</a>
                    </div>
                     <!-- select para pegar os jogos da tabela produtos segundo o id  --> 
                     <?php
                    
                        $sql="SELECT * FROM tbl_produto WHERE idconsole = 3 LIMIT 5;";
                         
                        $select = mysqli_query($conexao,$sql);
                        
                        while($rsJogos=mysqli_fetch_array($select)){
                     ?>
                   
                    <a href="categoria.php?idProduto=<?php echo($rsJogos['idproduto'])?>&console=<?php echo($rsJogos['idconsole'])?>">
                    <div class="caixa_jogo">
                        <div class="caixa_img">
                            <img src="img/<?php echo($rsJogos['foto'])?>">
                        </div>
                        
                        <div class="caixa_titulo">
                           <?php echo($rsJogos['nome'])?>
                        </div>
                         
                        
                    </div>
                   </a>
                   
                     <?php
                     
                        }
                     ?>

                    
                </div>
                 
                 <div class="caixa_conteudo">
                    <div class="caixa_textotitulo">
                          Jogos Populares do X-Box 360
                    </div>
                     
                    <div class="caixa_vermais">
                        <a href="categoria.php">Veja Mais</a>
                    </div>
                     <!-- select para pegar os jogos da tabela produtos segundo o id  --> 
                     <?php
                        $sql="SELECT * FROM tbl_produto WHERE idconsole = 2 LIMIT 5;";
                         
                        $select = mysqli_query($conexao,$sql);
                        
                        while($rsJogos=mysqli_fetch_array($select)){
                     ?>
                   
                    <a href="categoria.php?idProduto=<?php echo($rsJogos['idproduto'])?>&console=<?php echo($rsJogos['idconsole'])?>">
                    <div class="caixa_jogo">
                        <div class="caixa_img">
                            <img src="img/<?php echo($rsJogos['foto'])?>">
                        </div>
                        
                        <div class="caixa_titulo">
                           <?php echo($rsJogos['nome'])?>
                        </div>
                         
                        
                    </div>
                   </a>
                   
                     <?php
                     
                        }
                     ?>

                    
                </div>
                
                
            
                
                <div class="titulonossasLojas"> 
                    <div class="caixa_lojamaps">
                        Visite nossa Loja Oficial<p></p>
                    </div>
                    <div class="caixa_maps2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.1029153567983!2d-46.90027078530185!3d-23.528800584699084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0154039cb55b%3A0xadf34a919f156950!2sSENAI+Jandira+-+Professor+Vicente+Amato!5e0!3m2!1spt-BR!2sbr!4v1552852140386" width="1450" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
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