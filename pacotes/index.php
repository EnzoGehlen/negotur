
<?php
$active = 5;
include('../header.php');
include('../conexao.php');
$sql = "SELECT * FROM pacotes";
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
<div class="pacotes">
    <div class="about">
        <div class="container">
            <h3>Pacotes de Viagens</h3>
            <div class="about-main">
                <div class="about-top">

                </div>
                <div class="about-bottom">
                    <div class="clearfix"> </div>
                </div>

                
                <?php
                while ($dados = $result->fetch_assoc()){ 
                     
                    ?>
                
                 <div style='margin-top: 20px;'  class="col-md-3 team-grid">
                    <a href="subpacotes.php?id=<?=$dados['cod']?>">
                        <img style='max-height: 1620px;'  class='img img-responsive' src="../images/pacote/<?= $dados['imagem'] ?>" />
                        <div class="b-wrapper">
                            
                        </div>
                    </a>
                    <div class="team-details">
                        
                        <h4><?=$dados['titulo'] ?></h4>
                        <p><?= $dados['saida'] ?></p>
                        <?=$dados['retorno'] ?>
                    </div>
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