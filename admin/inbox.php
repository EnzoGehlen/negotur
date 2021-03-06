<?php
include('verifica.php');
include('../conexao.php');

$sql = "SELECT * FROM vw_contatos";
$result = $mysqli->query($sql);
 
?>

<div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Inbox</h3>


            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                    <button type="button" onclick="move()"   class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>

                </div>
                <!-- /.btn-group -->
               
                <!-- /.pull-right -->
            </div>
            <form name="formu" action="crud.php" method="POST">
                <input type="hidden" name="action" value="lixo">
            <div class="table-responsive mailbox-messages">
                <table id="example1" class="table table-bordered table-striped">
                     
                    <thead>

                        <tr>
                            <th>Marcar</th>
                            <th>Lidos</th>
                            <th>Autor</th>
                            <th>Título</th>
                            <th>Mensagem</th>
                            <th>Data/Hora</th>
                        </tr>

                    </thead>
                   
                    <tbody>
                        
                       <?php 
                        while ($dados = $result->fetch_assoc()) {
                            $novaData = explode(" ", $dados['created']);
                            $data = explode("-", $novaData[0]);
                            ?>
                            <tr>
                                <td> <input name="<?= $dados['id']; ?>" value="<?= $dados['id']; ?>" type="checkbox"></td>
                                <?php 
                                if ($dados['lido']) {
                                    ?>
                                <td class="mailbox-star" title="lido"><i class="fa fa-star-o"></i> Lido</td>
                                <?php } else {
                                    ?>
                                    <td class="mailbox-star" title="não lido"><i class="fa fa-star text-purple"></i></td>

                                    <?php
                                } 
                                ?>
                                <td class="mailbox-name"><a href="email.php?url=lendo&id=<?= $dados['id'] ?>"><?= $dados['nome'] ?></a></td>
                                <td class="mailbox-subject"><b><?= $dados['assunto'] ?></b></td>
                                    <td>  <?= substr($dados['mensagem'], 0, 40); ?> ... </td>
                               
                                <td class="mailbox-date"><?= "$data[2]/$data[1]/$data[0] $novaData[1]" ?></td>
                            </tr>
                            <?php 
                        } 
                        ?>
                        
                    </tbody>
                    
                    
                </table>
                
            </div>
        <input type="submit" style="visibility: hidden;">
                    </form>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->

    </div>
    <!-- /. box -->
</div>

<script>
    function move(){
        document.formu.submit();
    }
    
</script>