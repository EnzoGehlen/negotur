<?php
include('../conexao.php');
$sql = ("SELECT * FROM galeria");
$result = $mysqli->query($sql);
?>
<div class="portfolio">
        <div class="portfolio-main">
            <div class="portfolio-bottom">
                <div class="port-nav-left">

                    <h6>GALERIA</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor.</p>
                </div>
                <div id="portfoliolist">
                    <?php
                    while ($dados = $result->fetch_assoc()){
                        ?>
                            
                    <div class="col-md-3 pa-more">
                         <div class="work-column">
                                <img style='min-height: 302px;' src="../images/galeria/<?= $dados['imagem'] ?>" alt="" class="img-cap img-responsive">
                                <div class="b-wrapper">
                        </div>
                                <div class="porthover">
                                    <h3><?=$dados['titulo']?> </h3>
                                    <span class="hover-line"> </span>
                                   
                                    <div class="porthover-grids">
                                        
                                        <div class="porthover-right">
                                            
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>

                        
                    </div>
                    <?php
                    }
                    ?>

                    			
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>