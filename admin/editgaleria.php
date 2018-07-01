<?php
include('cabecalho.php');
include('menu.php');

include('../conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM galeria WHERE id = $id";
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
                <li><a href="galeria.php">Galeria</a></li>
                <li class="active">Editar imagem</li>
            </ol>
        </section>
        <section >

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Editar imagem</h3>
                            </div>
                            <div class="box-body">
                                <form action="crud.php" method='POST' enctype="multipart/form-data">
                                    <input type="hidden" name='action' value='edita'>
                                     <input type="hidden" name='tabela' value='galeria'>
                                     <input type="hidden" name='id' value="<?= $dados['id']?>">
                                    <div class="form-group col-md-6">
                                        <label>Título:</label>
                                        <input type="text" name='titulo' value="<?= $dados['titulo'] ?>" class="form-control">
                                    </div>
                                   
                               
                                   <div class="form-group pull-right col-md-12">
                                        <label>Imagem atual</label>
                                        <img class='img img-responsive' style='max-height: 350px;' src="../images/galeria/<?= $dados['imagem'] ?>" alt="" />
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Nova imagem</label>
                                        <input type="file" name='imagem'  id='imagem' >
                                        <input type="hidden" name='imagemm' value='<?= $dados['imagem']?>' >
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