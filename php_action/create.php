<?php
//Sessão
session_start();
//Conexão
include_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $status = mysqli_escape_string($connect, $_POST['status']);

    $sql = "INSERT INTO funcionarios (nome, email, senha, status) VALUES ('$nome', '$email', '$senha', '$status')";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../cadastro.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../cadastro.php');
    endif;
endif;