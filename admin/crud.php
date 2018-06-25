<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $func = $_POST['aaa'];
} else {

    $func = $_GET['func'];
    $id = $_GET['id'];
}



switch ($func) {
    case 'deleta': deletaEvento($id);
        break;
    case 'adiciona': adicionaEvento();
        break;
    case 'edita': editaEvento();
        break;
    case 'lixo': moveEmail();
        break;
    case 'excluiEmail': excluiEmail();
        break;
}

function deletaEvento($id = null) {
    include('../conexao.php');
    $sql = "DELETE FROM eventos WHERE id = '$id'";
    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: eventos.php');
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
}

function adicionaEvento() {
    include('../conexao.php');
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $facebook = $_POST['facebook'];
    $preco = $_POST['preco'];
    $imagem = basename($_FILES["imagem"]["name"]);


    $target_dir = "../images/eventos/";
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


    $sql = ("INSERT INTO eventos (titulo, descricao, local, data, facebook, preco, imagem) VALUES ('$titulo', '$descricao', '$local','$data', '$facebook', '$preco', '$imagem')");
    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: eventos.php');
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
}

function editaEvento() {
    include('../conexao.php');
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $facebook = $_POST['facebook'];
    $preco = $_POST['preco'];
    $imagem = basename($_FILES["imagem"]["name"]);
    if (empty($imagem)) {
        $imagem = $_POST['imagemm'];
    }


    $target_dir = "../images/eventos/";
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

    $sql = ("UPDATE eventos SET titulo = '$titulo',  descricao = '$descricao', local = '$local', data = '$data', facebook = '$facebook', preco = '$preco',  imagem = '$imagem' WHERE id = $id");
    if ($mysqli->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: eventos.php');
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
}

function moveEmail() {
    include('../conexao.php');
    $sql = "SELECT * FROM contato WHERE lixo != true";
    $result = $mysqli->query($sql);
    
    
    while($movidos = $result->fetch_assoc()){
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
    
    
    while($movidos = $result->fetch_assoc()){
        $x = $movidos['id'];
        @$id = $_POST["$x"];
        $moveu = ("DELETE FROM contato WHERE id = $id");
        $mysqli->query($moveu); 
    }
   
    header('location: email.php');
}