<?php
$conectar = mysql_connect("localhost","root", "") or die ("Erro de conexão");
mysql_select_db("info3_2022") or die ("Banco de dados não existe");

if($conectar) {
        //echo"Conectado com sucesso!</P>";
}else{

}
?>

<?php
$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = '';
$dbName = "info3_2022";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);