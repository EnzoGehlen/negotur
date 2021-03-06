<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    @$action = $_POST['action'];
    @$tabela = $_POST['tabela'];
} else {

    $action = $_GET['action'];
    @$tabela = $_GET['tabela'];
    @$id = $_GET['id'];
}



switch ($action) {
    case 'deleta': deleta($tabela, $id);
        break;
    case 'adiciona': adiciona($tabela);
        break;
    case 'edita': edita($tabela);
        break;
    case 'lixo': moveEmail();
        break;
    case 'excluiEmail': excluiEmail();
        break;
    case 'login':
        $id = $_POST['user'];
        $senha = $_POST['pass'];
        login($id, $senha);
        break;
    case 'logout': logout();

        break;
}

function deleta($tabela = null, $id = null) {
    include('../conexao.php');
    if ($tabela == 'pacotes'){
        $sql = "DELETE FROM $tabela WHERE cod = '$id'";
    } else {
        $sql = "DELETE FROM $tabela WHERE id = '$id'";
    }
    
    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: ' . $tabela . '.php');
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
}

function adiciona($tabela = null) {
    include('../conexao.php');
    switch ($tabela) {
        case 'frota':
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $imagem = $_POST['imagem'];
            $imagem = basename($_FILES["imagem"]["name"]);
            $target_dir = "../images/frota/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "É uma imagem - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "Não é uma imagem.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Erro.";
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "O arquivo " . basename($_FILES["imagem"]["name"]) . " foi adicionado.<br>";
                } else {
                    echo "Erro.<br>";
                }
            }

            $sql = ("INSERT INTO frota (titulo, descricao, imagem) VALUES ('$titulo', '$descricao', '$imagem')");


            break;


        case 'pacotes':
            $titulo = $_POST['titulo'];
            $saida = $_POST['saida'];
            $retorno = $_POST['retorno'];
            $descricao = $_POST['descricao'];
            $imagem = $_POST['imagem'];
            $imagem = basename($_FILES["imagem"]["name"]);
            $target_dir = "../images/pacote/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "É uma imagem - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "Não é uma imagem.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Erro.";
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "O arquivo " . basename($_FILES["imagem"]["name"]) . " foi adicionado.<br>";
                } else {
                    echo "Erro.<br>";
                }
            }

            $sql = ("INSERT INTO pacotes (titulo, saida, retorno, imagem, descricao) VALUES ('$titulo', '$saida','$retorno', '$imagem', '$descricao')");
            break;

        case 'galeria':
            $titulo = $_POST['titulo'];
            $imagem = $_POST['imagem'];
            $imagem = basename($_FILES["imagem"]["name"]);
            $target_dir = "../images/galeria/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "É uma imagem - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "Não é uma imagem.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Erro.";
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "O arquivo " . basename($_FILES["imagem"]["name"]) . " foi adicionado.<br>";
                } else {
                    echo "Erro.<br>";
                }
            }
            $sql = ("INSERT INTO galeria (titulo,  imagem) VALUES ('$titulo',  '$imagem')");


            break;
    }
    if ($mysqli->query($sql) === TRUE) {
        echo "Adicionado!";
        header('location: ' . $tabela . '.php');
    } else {
        echo "Erro: " . $mysqli->error;
    }
}

function edita($tabela = null) {
    include('../conexao.php');

    switch ($tabela) {
        case 'sobre':
            $titulo = $_POST['titulo'];
            $subtitulo = $_POST['subtitulo'];
            $texto = $_POST['texto'];
            $imagem = $_POST['imagem'];
            $imagem = basename($_FILES["imagem"]["name"]);
            if (empty($imagem)) {
                $imagem = $_POST['imagemm'];
            }
            $target_dir = "../images/sobre/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["imagem"]["name"]) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
            }
            $sql = ("UPDATE sobre SET titulo = '$titulo',  subtitulo = '$subtitulo', texto = '$texto', imagem = '$imagem'");


            break;




        case 'frota':
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $imagem = $_POST['imagem'];
            $imagem = basename($_FILES["imagem"]["name"]);
            if (empty($imagem)) {
                $imagem = $_POST['imagemm'];
            }
            $target_dir = "../images/frota/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["imagem"]["name"]) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
            }
            $sql = ("UPDATE frota SET titulo = '$titulo',  descricao = '$descricao', imagem = '$imagem' WHERE id = '$id'");


            break;

            case 'pacotes':
            $cod = $_POST['id'];    
            $titulo = $_POST['titulo'];
            $saida = $_POST['saida'];
            $retorno = $_POST['retorno'];
            $descricao = $_POST['descricao'];
            $imagem = $_POST['imagem'];
            $imagem = basename($_FILES["imagem"]["name"]);
            if (empty($imagem)) {
                $imagem = $_POST['imagemm'];
            }
            $target_dir = "../images/pacote/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "É uma imagem - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "Não é uma imagem.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Erro.";
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "O arquivo " . basename($_FILES["imagem"]["name"]) . " foi adicionado.<br>";
                } else {
                    echo "Erro.<br>";
                }
            }

            $sql = ("UPDATE pacotes SET titulo = '$titulo', saida = '$saida', retorno = '$retorno', imagem = '$imagem', descricao = '$descricao' WHERE cod = '$cod'");
            
            break;
            
        case 'galeria':
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $imagem = $_POST['imagem'];
            $imagem = basename($_FILES["imagem"]["name"]);
            if (empty($imagem)) {
                $imagem = $_POST['imagemm'];
            }
            $target_dir = "../images/galeria/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imagem"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["imagem"]["name"]) . " has been uploaded.<br>";
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                }
            }
            $sql = ("UPDATE galeria SET titulo = '$titulo',  imagem = '$imagem' WHERE id = '$id'");


            break;

        case 'n_users':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = ("UPDATE n_users SET nome = '$nome',  email = '$email', senha = '$senha'");

            $tabela = "index";
            break;

        case 'home':
            $dicas = $_POST['dicas'];
            $galeria = $_POST['galeria'];


            $sql = ("UPDATE home SET dicas = '$dicas',  galeria = '$galeria'");

            $tabela = "index";
            break;
    }
    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: ' . $tabela . '.php');
    } else {
        echo "Erro ao salvar: " . $mysqli->error;
    }
}

function moveEmail() {
    include('../conexao.php');
    $sql = "SELECT * FROM contato WHERE lixo != true";
    $result = $mysqli->query($sql);


    while ($movidos = $result->fetch_assoc()) {
        $x = $movidos['id'];
        @$id = $_POST["$x"];
        $moveu = ("UPDATE contato SET lixo = true WHERE id = $id");
        $mysqli->query($moveu);
    }

    header('location: email.php');
}

function excluiEmail() {
    include('../conexao.php');
    $sql = "SELECT * FROM contato ";
    $result = $mysqli->query($sql);


    while ($movidos = $result->fetch_assoc()) {
        $x = $movidos['id'];
        @$id = $_POST["$x"];
        $moveu = ("DELETE FROM contato WHERE id = $id");
        $mysqli->query($moveu);
    }

    header('location: email.php?url=lixo');
}

function login($id, $senha) {
    include('../conexao.php');

    $sql = ("SELECT * FROM n_users WHERE email = '$id'");

    $result = $mysqli->query($sql);
    $reg = mysqli_num_rows($result);

    if ($reg == 1) {
        $dados = $result->fetch_assoc();
        if ($senha == $dados['senha']) {
            @session_start();
            $_SESSION["id_usuario"] = $dados["id"];
            $_SESSION["nome_usuario"] = $dados["nome"];
            header('location: index.php');
        } else {
            echo "<script> alert('Senha incorreta')</script> ";
            echo "<script>window.location.replace('index.php');</script>";
        }
    } else {
        echo "<script> alert('Email incorreto')</script> ";
        echo "<script>window.location.replace('index.php');</script>";
    }
}

function logout() {
    session_start();
    session_destroy();
    header('location: index.php');
}
