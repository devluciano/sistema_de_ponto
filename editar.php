<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM funcionarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Funcionário</h3>
        <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="password" name="senha" id="senha" value="<?php echo $dados['senha']; ?>">
                <label for="senha">Senha</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="status" id="status" value="<?php echo $dados['status']; ?>">
                <label for="status">Status</label>
            </div>
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="cadastro.php" class="btn green">Lista de funcionários</a>
        
        </form>
    </div>
</div>
        
        
        
        
        
    
    
      

















<?php
//footer
include_once 'includes/footer.php'; 
?>



     


     