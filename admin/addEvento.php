<?php
include('cabecalho.php');
include('menu.php');
include('../conexao.php');

$sql = "SELECT * FROM eventos";
$result = $mysqli->query($sql);
?>
<div class="wrapper">
    <div class="content-wrapper">
         <section class="content-header">
            <h1>

                <small>Lucca Lounge & Fun</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li class="active">Adicionando evento</li>
            </ol>
        </section>
        <section >

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Adicionar novo evento</h3>
                            </div>
                            <div class="box-body">
                                <form action="crud.php" method='POST' enctype="multipart/form-data">
                                    <input type="hidden" name='aaa' value='adiciona'>
                                    <div class="form-group col-md-3">
                                        <label>Título do evento:</label>
                                        <input type="text" name='titulo' class="form-control">
                                    </div>
                                    <div class="form-group col-md-9">
                                        <label>Descrição:</label>
                                        <input type="text" name='descricao' class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Local:</label>
                                        <input type="text" name='local' class="form-control">
                                    </div>
                                    <div class="form-group col-md-2" >
                                        <label>Data:</label>
                                        <input type="date" name='data' class='form-control'>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Link do evento no Facebook</label>
                                        <input type="text" name='facebook' class="form-control">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Preço</label>
                                        <input type="text" name='preco' class="form-control">
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
</div>

<?php
include('rodape.php');
?>