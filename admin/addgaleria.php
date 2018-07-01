<?php
include('verifica.php');
include('cabecalho.php');
include('menu.php');

?>

    <div class="content-wrapper">
         <section class="content-header">
            <h1>

                <small>Nego Tur</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li class="active">Adicionando imagem</li>
            </ol>
        </section>
        <section >

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Adicionar nova imagem</h3>
                            </div>
                            <div class="box-body">
                                <form action="crud.php" method='POST' enctype="multipart/form-data">
                                    <input type="hidden" name='action' value='adiciona'>
                                     <input type="hidden" name='tabela' value='galeria'>
                                    <div class="form-group col-md-6">
                                        <label>Título:</label>
                                        <input type="text" name='titulo' class="form-control">
                                    </div>
                                  
                               
                                    <div class="form-group col-md-8">
                                        <label>Imagem</label>
                                        <input type="file" name='imagem' id='imagem' >
                                    </div>
                                    <div class="form-group col-md-12">
                                        
                                        <input type="submit" value="Adicionar" name="submit" class="btn btn-twitter">
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