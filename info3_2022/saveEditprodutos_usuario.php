<?php
include_once("conexao.php");

if(isset($_POST['update_produtos']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $tipo = $_POST['tipo'];

    $sqlUpdate = "UPDATE produtos SET nome='$nome',preco='$preco',tipo='$tipo'
    WHERE id='$id'";
    

    $result = $conexao->query($sqlUpdate);

}
header("Location: usuario.php?link=2");


?>