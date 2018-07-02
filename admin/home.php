<?php
include('verifica.php');
include('cabecalho.php');
include('menu.php');

include('../conexao.php');

$sql = "SELECT * FROM home ";
$result = $mysqli->query($sql);
$dados = $result->fetch_assoc();
 
?>

    <div class="content-wrapper">
         <section class="content-header">
            <h1>

                <small>Nego Tur</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
                <li class="active">Home</li>
            </ol>
        </section>
        <section >

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Página home</h3>
                            </div>
                            <div class="box-body">
                                <form action="crud.php" method='POST' enctype="multipart/form-data">
                                    <input type="hidden" name='action' value='edita'>
                                     <input type="hidden" name='tabela' value='home'>
                                     <div class="form-group col-md-12">
                                        <label>Dicas de viagem:</label>
                                        <textarea  name='dicas' class="form-control"><?= $dados['dicas']?></textarea>
                                    </div>
                                     <div class="form-group col-md-12">
                                        <label>Galeria:</label>
                                        <textarea  name='galeria' class="form-control"><?= $dados['galeria']?></textarea>
                                    </div>
                                   
                                    
                                   
                                    <div class="form-group col-md-12">
                                        
                                        <input type="submit" value="Salvar" name="submit" class="btn btn-twitter">
                                    </div>
                                    


                                    



                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php
include('rodape.php');
?>
