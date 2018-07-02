<?php
$active = 2;
include('../header.php');
include('../conexao.php');
$sql = ("SELECT * FROM sobre");
$result = $mysqli->query($sql);
$dados = $result->fetch_assoc();
?>
<body>
    <!--header start here-->
    
    <!--friend start here-->
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>
    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="about-top">
                    <h3><?= $dados['titulo'] ?></h3>

                </div>
                <div class="about-his">
                    <div class="col-md-4 about-left">
                        <img src="../images/sobre/<?= $dados['imagem'] ?>" class='img img-responsive pull-left' alt="" title="">
                    </div>

                    <div class="col-md-8 about-right">
                        <h4><?= $dados['subtitulo'] ?></h4>
                        <p><?= $dados['texto'] ?>


                        </p>

                    </div>

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
