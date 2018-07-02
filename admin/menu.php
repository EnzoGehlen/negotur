<?php
include('verifica.php');
include('../conexao.php');
$sql = "SELECT * FROM contato WHERE lido != true AND lixo != true";
$result = $mysqli->query($sql);
$lidos = mysqli_num_rows($result);

$sql2 = "SELECT * FROM n_users ";
$result2 = $mysqli->query($sql2);
$dados2 = $result2->fetch_assoc();

?>

<aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?= $dados2['nome'] ?></p>
                            <a> <i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa  fa-list-alt"></i> <span>Páginas</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu"> 
                                <li class="active"><a href="home.php"><i class="fa fa-file-text"></i> Home</a></li>
                                <li class="active"><a href="sobre.php"><i class="fa fa-file-text"></i> Sobre</a></li>
                               
                                <li class="active"><a href="frota.php"><i class="fa fa-file-text"></i> Frota</a></li>
                                <li class="active"><a href="pacotes.php"><i class="fa fa-file-text"></i> Pacotes Prontos</a></li>
                                
                            </ul>
                        </li>
                      
                         <li>
                            <a href="galeria.php">
                                <i class="fa fa-picture-o"></i> <span>Galeria</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-purple"></small>
                                </span>
                            </a>
                        </li>
                         <li>
                            <a href="email.php">
                                <i class="fa fa-envelope"></i> <span>Contatos</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-purple"> <?= $lidos ?></small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="perfil.php">
                                <i class="fa fa-users"></i> <span>Meu perfil</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-purple"></small>
                                </span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>