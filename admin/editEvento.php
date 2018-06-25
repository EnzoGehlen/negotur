<?php
include('cabecalho.php');
include('menu.php');
/*
include('../conexao.php');
$idEvento = $_GET['id'];
$sql = "SELECT * FROM eventos WHERE id = $idEvento";
$result = $mysqli->query($sql);
$dados = $result->fetch_assoc();
 * 
 */
?>
<div class="wrapper">
    <div class="content-wrapper">
         <section class="content-header">
            <h1>

                <small>Nego Tur</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Início</a></li>
                <li class="active">Sobre</li>
            </ol>
        </section>
        <section >

            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Página sobre</h3>
                            </div>
                            <div class="box-body">
                                <form action="crud.php" method='POST' enctype="multipart/form-data">
                                    <input type="hidden" name='aaa' value='edita'>
                                    <input type="hidden" name='id' value=' $dados[id] '>
                                    <div class="form-group col-md-7">
                                        <label>Título:</label>
                                        <input type="text" name='titulo' value=' $dados[titulo] ' class="form-control">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label>Subtítulo:</label>
                                        <input type="text" name='subtitulo' value=' $dados[subtitulo] ' class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Local:</label>
                                        <textarea  name='texto' class="form-control"> $dados[texto]</textarea>
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
</div>

<?php
include('rodape.php');
?>