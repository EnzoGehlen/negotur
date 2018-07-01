
<?php
$active = 4;
include('../header.php');
include('../conexao.php');
$sql = "SELECT * FROM frota";
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

                <h3>Confira nossos veiculos</h3>
                <?php
                while ($dados = $result->fetch_assoc()){ ?>
                 <div style='margin-top: 20px;'  class="col-md-3 team-grid">
                    <a href="../images/frota/<?= $dados['imagem']?>" class="b-link-stripe b-animate-go  swipebox"  title="<?= $dados['titulo'] ?>">
                        <img style='max-height: 162px;'  class='img img-responsive' src="../images/frota/<?= $dados['imagem'] ?>" />
                        <div class="b-wrapper">
                        </div>
                    </a>
                    <div class="team-details">
                        <h4><?=$dados['titulo'] ?></h4>
                        <p><?= $dados['descricao'] ?></p>
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