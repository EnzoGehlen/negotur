<?php
include('../conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sql = ("INSERT INTO contato (nome, email, telefone, assunto, mensagem) VALUES ('$nome', '$email', '$telefone', '$assunto','$mensagem')");
if ($mysqli->query($sql) === TRUE) {
       echo '<!DOCTYPE html>';
   echo '<html xmlns="http://www.w3.org/1999/xhtml">';
   echo '<head>';
   echo '   <meta http-equiv="refresh" content="10; url=../home/index.php">';
   echo '</head>';
   echo '<body>';
   echo '<p>Seu email foi enviado com sucesso.</p>';
   echo '<a href="../home/index.php">Prosseguir</a>';
   echo '</body>';
   echo '</html>';
      } else {
      echo "Erro: " . $mysqli->error;
      }