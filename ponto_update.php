<?php
//Sessão
session_start();
//Conexão
include_once 'php_action/db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $data = mysqli_escape_string($connect, $_POST['data']);
    $hora = mysqli_escape_string($connect, $_POST['hora']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE entradas SET nome = '$nome', email = '$email', data = '$data', hora = '$hora'
    WHERE id = '$id'";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ponto_list.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ponto_list.php');
    endif;
endif;
?>