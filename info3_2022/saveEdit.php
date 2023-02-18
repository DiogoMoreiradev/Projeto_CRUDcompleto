<?php
include_once("conexao.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nivel_de_acesso = $_POST['nivel_de_acesso'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome',email='$email',usuario='$usuario',senha='$senha',nivel_de_acesso='$nivel_de_acesso'
    WHERE id='$id'";
    

    $result = $conexao->query($sqlUpdate);

}
header("Location: administrativo.php?link=3");


?>