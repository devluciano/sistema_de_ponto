<?php
//Sessão
session_start();
//Conexão
include_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM funcionarios WHERE id = '$id'";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../cadastro.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar";
        header('Location: ../cadastro.php');
    endif;
endif;