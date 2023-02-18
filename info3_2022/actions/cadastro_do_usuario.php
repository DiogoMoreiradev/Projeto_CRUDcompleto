<?php

include_once("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel_de_acesso = 1;

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
            window.location = '../login_2.php';
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





















































