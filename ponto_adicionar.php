<?php
//header
include_once 'ponto_header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light" style="text-align:center">Cadastro de Entrada</h3>
        <form action="ponto_create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="mail">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="date" name="data" id="data">
                <label for="data">Data</label>
            </div>
            <div class="input-field col s12">
                <input type="time" name="hora" id="hora">
                <label for="hora">Hora</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn">Salvar</button>
            <a href="menu.php" class="btn">Voltar</a>
        </form>
    </div>
</div>
<?php
//footer
include_once 'ponto_footer.php';
?>


