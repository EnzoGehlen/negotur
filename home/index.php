<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$active = 1;
include('../header.php');
include('../conexao.php');
$sql = ("SELECT * FROM home");
$result = $mysqli->query($sql);
$dados = $result->fetch_assoc();
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
        <p><?= $dados['dicas']?></p>

    </div>
    
    <div class="dicas">
        <p><?= $dados['galeria']?></p>

    </div>
                

<!--portfolio end here--> 
<!--footer start here-->
<?php
include('galeria.php');

?>
<footer style=''>
    <div class="footer">
        <div class="container" style=''>
            <div class="footer-main">
                <p>   <strong>NegoTur Viagens e Turismo</strong><br>(49) 99134-6769<br> &copy;Copyright-Todos os direitos reservados

                </p>
            </div>
        </div>
    </div>
</footer>
<!--
 BAGAGEM
→Sempre a menor possível

→Identifique a sua bagagem com nome, endereço e telefone, ponha as etiquetas em lugares visíveis e também dentro da mala

→Leve roupas adequadas a estação

 REMÉDIOS
→Para quem tem problemas crônicos, leve os remédios na viagem. Mas se for ao exterior, fazer um seguro saúde é a melhor opção


 DOCUMENTOS
→ PHP Básico 

→ PHP Intermediário 

→ PHP Avançado


 CHEGANDO NA CIDADE
→ No hotel, confira a limpeza do quarto, se necessário, exija um quarto limpo, você pagou, você tem direito

→ Cuidado com os aparelhos eletrônicos, saiba primeiramente qual é a voltagem do lugar

→ No primeiro passeio, antes de sair, peça um cartão do hotel. Se você se perder, mostre o cartão e tudo estará resolvido

→ Na hora de comer,comece com pratos leves e vá se habituando aos poucos
  HORÁRIO DE EMBARQUE
→ Esteja com todos os documentos em mãos ou na bagagem de mão (passaporte, RG, Passagem ou Voucher) 

→ Em longas viagens é recomendável o uso de roupas e sapatos confortáveis

→ Não comer em excesso e, beba muito líquido 

→ Preocupe-se com suas bolsas, carteiras, pacotes e malas.

→ Não peça e não aceite que outras pessoas transportem suas malas

→ Chegue com 1 hora de antecedência nas viagens de turismo realizadas com ônibus no local do embarque
-->
</body>
</html>


