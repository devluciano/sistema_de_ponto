<?php
//conexão
include_once 'php_action/db_connect.php';
//sessão
session_start();
//botão enviar.
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo Email/Senha precisa ser preenchido</li>";
    else:
        $sql = "SELECT email FROM funcionarios WHERE email = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $sql = "SELECT * FROM funcionarios WHERE email = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            //aqui
            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: ponto.php');
            else:
                $erros[] = "<li> Usuário e Senha não conferem </li>";
            endif;

        else:
            $erros[] = "<li> Usuário inexistente </li>";
        endif;

    endif;

endif;
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
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light" style="text-align:center">Login Funcionário</h3>
            <?php
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                Email: <input type="text" name="email"><br>
                Senha: <input type="password" name="senha"><br>
                <button type="submit" name="btn-entrar" class="btn">Entrar</button>
                <a href="index.php" class="btn">Voltar</a>
                <a href="adicionar.php" class="btn  blue lighten-2 material-icons right">Cadastre-se</a>
            </form>
        </div>
    </div>
</body>
</html>

