<?php
//Sessão
session_start();
//Conexão
include_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $status = mysqli_escape_string($connect, $_POST['status']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE funcionarios SET nome = '$nome', email = '$email', senha = '$senha', status = '$status'
    WHERE id = '$id'";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../cadastro.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ../cadastro.php');
    endif;
endif;