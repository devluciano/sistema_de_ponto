<?php
//Sessão
session_start();
//Conexão
include_once 'php_action/db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $data = mysqli_escape_string($connect, $_POST['data']);
    $hora = mysqli_escape_string($connect, $_POST['hora']);
   

    $sql = "INSERT INTO entradas (nome, email, data, hora) VALUES ('$nome', '$email', '$data','$hora')";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ponto_list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ponto_list.php');
    endif;
endif;