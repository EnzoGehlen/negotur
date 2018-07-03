<?php
$active = 5;

include('../header.php');

include('../conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM pacotes WHERE cod = '$id' ";
$result = $mysqli->query($sql);
 
?>
 

<!--message start here-->
<link rel="stylesheet" href="../css/swipebox.css">
<script src="../js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
    jQuery(function ($) {
        $(".swipebox").swipebox();
    });
</script>
 <body>
<div class="frota">
    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="about-top">


                </div>
                <div class="about-bottom">
                    <div class="clearfix"> </div>
                </div>
 
                <?php
                while ($dados = $result->fetch_assoc()){ ?>
                    <!--<div class="pacote_imagens">
                            <script type="text/javascript" src="../js/prototype.js"></script>
                            <script type="text/javascript" src="../js/scriptaculous/scriptaculous.js?load=effects,builder""></script>
                            <script type="text/javascript" src="../js/lightbox.js"></script>		
                            <div class="img-pacote">
                                <a href="../images/subpacotes/<?= $dados['imagem']?>" rel="lightbox[pacote]"><img src="../images/" title="" alt="PANTANAL MATOGROSSENSE" /></a>		</div>
                            <div class="img-pacote">
                               <a href="../images/subpacotes/<?= $dados['imagem']?>" rel="lightbox[pacote]"><img src="/uploads/arquivo/Pacote/thumb/pequena/imagesCAA6268T-0.jpg" title="" alt="PANTANAL MATOGROSSENSE" /></a>		</div>
                            <div class="img-pacote">
                               <a href="../images/subpacotes/<?= $dados['imagem']?>"rel="lightbox[pacote]"><img src="/uploads/arquivo/Pacote/thumb/pequena/pousada_fazenda_san_francisco.jpg" title="" alt="" /></a>		</div>
                            <div class="img-pacote">
                               <a href="../images/subpacotes/<?= $dados['imagem']?>"<img src="/uploads/arquivo/Pacote/thumb/pequena/imagesCAN49TXW.jpg" title="" alt="PANTANAL MATOGROSSENSE" /></a>		</div>
                            <div class="img-pacote">
                           <a href="../images/subpacotes/<?= $dados['imagem']?>" rel="lightbox[pacote]"><img src="/uploads/arquivo/Pacote/thumb/pequena/cachoeira_do_sinhozinho_estancia_mimosa_900x600.jpg" title="" alt="" /></a>		</div>
                            <div class="img-pacote">
                                <a href="../images/subpacotes/<?= $dados['imagem']?>"<img src="/uploads/arquivo/Pacote/thumb/pequena/paq4_1.jpg" title="" alt="PANTANAL MATOGROSSENSE" /></a>		</div>
                            <div class="img-pacote">
                                <a href="../images/subpacotes/<?= $dados['imagem']?>"<img src="/uploads/arquivo/Pacote/thumb/pequena/gruta_1.jpg" title="" alt="PANTANAL MATOGROSSENSE" /></a>		</div>
                            <div class="img-pacote">
                                <a href="../images/subpacotes/<?= $dados['imagem']?>"<img src="/uploads/arquivo/Pacote/thumb/pequena/45_298_4869_SAN.jpg" title="" alt="PANTANAL MATOGROSSENSE" /></a>		</div>
                            <br class="clear" /><br /><br />
                        </div><br class="clear" /> 

                        <div class="paginacao">
                            <a href="pacotes.php" class="leia_mais">Voltar</a>	</div>

                    </div>/> -->
                    <div class="team-details">
                        <h4><?=$dados['titulo'] ?></h4>
                        <p><?= $dados['descricao'] ?></p>
                          
                    </div>
                
                    <?php
                }
                ?>
               
               
               
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>

<!--friend end here-->
<!--footer start here-->
<?php
include('../footer.php');
?>
<!--footer end here-color: #ffa500; --> 
</body>
</html>
