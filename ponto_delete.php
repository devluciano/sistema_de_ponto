<?php
//Sessão
session_start();
//Conexão
include_once 'php_action/db_connect.php';

if(isset($_POST['btn-deletar'])):

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM entradas WHERE id = '$id'";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ponto_list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar";
        header('Location: ponto_list.php');
    endif;
endif;