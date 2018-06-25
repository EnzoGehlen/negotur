<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$active = 1;
include('../header.php');
?>

<!--header end here-->
<!--banner start here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider">
            <li>
                <div class="banner">

                </div>
            </li>
            <li>
                <div class="banner1">

                </div>
            </li>
            <li>
                <div class="banner2">

                </div>
            </li>
        </ul>
    </div>
</div>
<!--banner end here-->
<div class="index">  
    <div id="small-dialog5" class="mfp-hide">
        <iframe src="//player.vimeo.com/video/111679725" width="500" height="213" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!--portfolio start here-->
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="../js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
                               jQuery(function ($) {
                                   $(".swipebox").swipebox();
                               });
    </script><br>

    <h2 class="titulo"><strong>DICAS DE VIAGEM</strong></h2>

    <div class="dicas">
        <dl class="dl">

            <dt class="dt">  <img src="../images/mala.png">BAGAGEM </dt><br>
            <dd class="dd">Sempre a menor possível</dd>
            <dd class="dd">Identifique a sua bagagem com nome, endereço e telefone, ponha as etiquetas em lugares visíveis e também dentro da mala</dd>
            <dd class="dd">Leve roupas adequadas a estação</dd><br><br>

            <dt class="dt">  <img src="../images/pills.png">REMÉDIOS </dt><br>
            <dd class="dd">Para quem tem problemas crônicos, leve os remédios na viagem. Mas se for ao exterior, fazer um seguro saúde é a melhor opção</dd><br>           
            <dt class="dt">  <img src="../images/cv.png">DOCUMENTOS </dt><br>
            <dd class="dd"> PHP Básico</dd>
            <dd class="dd"> PHP Intermediário</dd>
            <dd class="dd"> PHP Avançado</dd><br><

            <dt class="dt"> <img src="../images/hotel.png">CHEGANDO NA CIDADE</dt><br>
            <dd class="dd">No hotel,confira a limpeza do quarto, se necessário, exija um quarto limpo, você pagou, você tem direito</dd>
            <dd class="dd">Cuidado com os aparelhos eletrônicos, saiba primeiramente qual é a voltagem do lugar</dd>
            <dd class="dd">No primeiro passeio, antes de sair, peça um cartão do hotel. Se você se perder, mostre o cartão e tudo estará resolvido</dd>
            <dd class="dd">Na hora de comer,comece com pratos leves e vá se habituando aos poucos</dd><br>

            <dt class="dt"> <img src="../images/wall-clock.png"> HORÁRIO DE EMBARQUE</dt><br>
            <dd class="dd">Esteja com todos os documentos em mãos ou na bagagem de mão (passaporte, RG, Passagem ou Voucher) </dd>
            <dd class="dd">
                Em longas viagens é recomendável o uso de roupas e sapatos confortáveis</dd>
            <dd class="dd">Não comer em excesso e, beba muito líquido</dd>
            <dd class="dd">
                Preocupe-se com suas bolsas, carteiras, pacotes e malas. Não peça e não aceite que outras pessoas transportem suas malas</dd>
            <dd class="dd">Chegue com 1 hora de antecedência nas viagens de turismo realizadas com ônibus no local do embarque</dd>
        </dl>

    </div>
    <div class="portfolio">
        <div class="portfolio-main">
            <div class="portfolio-bottom">
                <div class="port-nav-left">

                    <h6>GALERIA</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor.</p>
                </div>
                <div id="portfoliolist">
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p1.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>

                        <div id="small-dialog" class="mfp-hide">
                            <div class="image-top">
                                <div class="video-play-bwn">
                                    <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim"> </a>
                                </div>

                            </div>
                        </div>
                    </div>				

                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p2.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>				
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p3.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>			
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p4.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>			
                    <div class="clearfix"> </div>
                </div>
                <div id="portfoliolist">
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p5.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>				

                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p6.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>				
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p7.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>			
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p8.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>			
                    <div class="clearfix"> </div>
                </div>
                <div id="portfoliolist">
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p9.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>				

                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p10.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>				
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p11.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>
                    </div>			
                    <div class="col-md-3 pa-more">
                        <a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim">
                            <div class="work-column">
                                <img src="../images/p12.jpg" alt="" class="img-cap img-responsive">
                                <div class="porthover">
                                    <h3>South America</h3>
                                    <span class="hover-line"> </span>
                                    <small class="port-play"> </small>
                                    <div class="porthover-grids">
                                        <div class="porthover-left">
                                            <span class="port-lady"> </span>
                                            <p>By Elena Smith</p>
                                        </div>
                                        <div class="porthover-right">
                                            <span class="heart"> </span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </a>

                    </div>			
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>            

<!--portfolio end here--> 
<!--footer start here-->
<?php
include('../footer.php');
?>
<!--footer end here-->
</body>
</html>