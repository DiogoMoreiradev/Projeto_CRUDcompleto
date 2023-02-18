<?php
session_start();
// verifica as credenciais de acesso
if(isset($_SESSION['acesso']) && ($_SESSION['acesso'] == 2)) { // se a váriavel SESSION que compôe a coluna acesso existe e ela nessa mesma coluna tiver o valor de 2 faça

}else{
    //Mensagem de erro
    $_SESSION['loginErro'] = " Acesso inválido! ";
    //Redireciona para a página de login
    header("Location: login_2.php");
    // encerra a execução
    exit();
}

include_once("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel_de_acesso = $_POST['nivel_de_acesso'];

$insert_usuario = mysql_query("INSERT INTO usuarios (
nome,
email,
usuario,
senha,
nivel_de_acesso)

VALUES (
'$nome',
'$email',
'$usuario',
'$senha',
'$nivel_de_acesso')");

if(mysql_insert_id()) {
    echo
    "
    
        <script>
            alert('Usuario cadastrado com sucesso!');
            window.location = '../administrativo.php?link=0';
        </script>
    ";
}else{
    echo
    "
    <script>
        alert('Erro no processamento!');
        window.location = '../administrativo.php?link=0';
    </script>

    ";
}
?>





















































