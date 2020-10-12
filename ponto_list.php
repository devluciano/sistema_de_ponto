<?php
//Conexão
include_once 'php_action/db_connect.php';
//header
include_once 'ponto_header.php';
//message
include_once 'ponto_message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light" style="text-align:center">Lista de Entradas </h3>
        <table class="striped">
            <thead>
                <tr>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Data/Hora:</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM entradas";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) > 0):
                    //Loop
                    while($dados = mysqli_fetch_array($resultado)):
                        ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['data_hora']; ?></td>
                            <td><a href="ponto_editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</td>
                            <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons"
                            >delete</i></a></td>
                            <!--Modal-->
                            <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                <div class="modal-content">
                                <h4>Opa!</h4>
                                <p>Tem certeza que deseja excluir esse funcionário?</p>
                                </div>
                                <div class="modal-footer">
                                <form action="ponto_delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                                </div>
                            </div>
                        </tr>
                        <?php endwhile;
                                else: ?>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <?php
                                 endif;
                                ?>
                                </tbody>
                        </table>
                        <br>
                        <a href="index.php" class="btn">Voltar</a>
                    </div>
                </div>
            <?php
            //footer
            include_once 'ponto_footer.php';
            ?>

