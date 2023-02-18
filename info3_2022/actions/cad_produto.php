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

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$tipo = $_POST['tipo'];

$insert_usuario = mysql_query("INSERT INTO produtos (
id,
nome,
preco,
tipo)

VALUES (
'$id',
'$nome',
'$preco',
'$tipo')");

if(mysql_insert_id()) {
    echo
    "
    
        <script>
            alert('Produto cadastrado com sucesso!');
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















































