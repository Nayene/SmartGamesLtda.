<?php
    require_once("conexao.php");
    $conexao=conexaoBD();

    // verificando se existe essa variavel
    if(isset($_GET['localizacao'])){
         $sql = "SELECT endmaps FROM tbl_loja WHERE idloja=".$_GET['localizacao'];
        
        $select = mysqli_query($conexao,$sql);
        $rsmaps = mysqli_fetch_array($select);
    }
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
                
                
               <div class="nossasLojas">Localize algumas de nossas Lojas </div> 
                 
            
                <div class="caixa_itemLoja">
                    <!-- select para pegar as lojas existentes no banco  --> 
                 <?php
                    $sql = "SELECT * FROM tbl_loja ORDER BY idloja DESC";

                   //executa o script no banco e guarda o retorno na variavel select
                    $select = mysqli_query($conexao,$sql);

                    // PARA PEGAR AS INFORMAÇÕES 
                    // criar um nova variavel para receber as informaçoes do select
                    while($rsLojas=mysqli_fetch_array($select)){
                        
                ?>
                    <a href="nossaslojas.php?localizacao=<?php echo($rsLojas['idloja'])?>">
                        <div class="caixa_nossasloja">
                            <!-- contatenando as variaveis para o endereço  --> 
                            <?php echo($rsLojas['nome'].'-'.$rsLojas['rua'].'-'. $rsLojas['bairro'].'-'.$rsLojas['cidade'].'-'.$rsLojas['estado'])?> 
                        </div>
                    </a>
                <?php
                    }
                ?>
                </div>
              
                <div class="mapsNossasLojas">
                    <div class="caixa_maps">
                        <!-- colocando o echo no local onde seria o https do link do maps 
                            copiei o html do maps e coloquei a parte de https no banco
--> 
                        <iframe src="<?php echo($rsmaps['endmaps'])?>" width="1000" height="800"  style="border:0" allowfullscreen></iframe>
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