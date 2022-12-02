<?php
//inicia a sessão
session_start();

//incluindo a conexão com o banco de dados
include("conexao.php");

//recebendo os dados do form login via POST(enviar) para váriaveis locais
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//mostrando váriaveis locais
echo $usuario;
echo "<br>";
echo $senha;

//consultando se o usuário existe no banco de dados
$select_usuario = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'");/// selecione o usuario recebe mysql faça: selecione todos da tabela  usuarios onde usuario recebe variavel usuario e senha recebe variavel senha
echo "</p>";
echo($select_usuario);

    //organizando os dados da consulta e mostrando os dados d usuário
    $usuario = mysql_fetch_assoc($select_usuario); //usuario recebe mysql organize a váriavel $select_usuario
    echo "</p>";
    var_dump($usuario); //exiba a váriavel usuário

    //verifica o nível de acesso do usuário para ele redirecionar...
    if($usuario['nivel_de_acesso'] == 2){ //se a váriavel usuário na coluna nivel de acesso tiver o valor de 2 faça: váriavel session na coluna acesso recebe 2
    $_SESSION['acesso'] = 2;
    //redireciona para o arquivo administrativo.php
    header("Location: administrativo.php?link=0");
    }else if($usuario['nivel_de_acesso'] == 1){
        $_SESSION['acesso'] = 1;
        header("Location: usuario.php?link=0");
    }else if($usuario['nivel_de_acesso'] == 3){
        $_SESSION['acesso'] = 3;
        header("Location: cliente.php?link=0");

    }else{
        //mensagem de erro
        $_SESSION['loginErro'] = " Usuário ou senha inválido! ";

        //redireciona para a página de login
        header("Location: login_2.php");
    }

?>
