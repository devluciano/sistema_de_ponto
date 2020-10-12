<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'ponto_header.php';
//select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM entradas WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Entrada</h3>
        <form action="ponto_update.php" method="POST">
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
                <input type="text" name="data_hora" id="data_hora" value="<?php echo $dados['data_hora']; ?>">
                <label for="data_hora">Data/Hora</label>
            </div>
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="ponto_list.php" class="btn green">Lista de Entradas</a>
        </form>
    </div>
</div>
<?php
//footer
include_once 'ponto_footer.php';
?>