<?php
//conexão
include_once 'php_action/db_connect.php';
//sessão
session_start();
//Verificação
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;
//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM funcionarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<!DOCTYPE html>
  <html>
    <head>
    <meta charset="utf-8">
    <title>Login</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <h1>Olá <?php echo $dados['nome']; ?></h1>
    
    <a href="logout.php">Voltar</a>
</body>
</html>






