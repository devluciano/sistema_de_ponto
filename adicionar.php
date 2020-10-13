<?php
//header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light" style="text-align:center">Cadastro de Funcionário</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="mail">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="password" name="senha" id="senha">
                <label for="senha">Senha</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="status" id="status">
                <label for="status">Status</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn">Salvar</button>
            <a href="index.php" class="btn">Voltar</a>
        </form>
    </div>
</div>
<?php
//footer
include_once 'includes/footer.php'; 
?>