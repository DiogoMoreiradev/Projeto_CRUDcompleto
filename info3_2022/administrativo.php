<?php
// inicia a sessão
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
?>



<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, inital-scale=1">
		<meta name="Sistema Web" content="Painel do Administrador">
		<meta name="Diogo Sistemas" content="Diogo Moreira">
		<link rel="icon" href="imagens/icon_70af72fb46d5677fd2b845069b0ced1f.ico">
		<title>...::: PAINEL DO ADMINISTRADOR :::...</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
       


	</head>	
    <body>

    <?php
        include_once("menu_admin.php");
        
        $link = $_GET["link"];

        $pag[0] = "administrativo.php";
        $pag[1] = "cad_usuario.php";
        $pag[2] = "cad_produto.php";
        $pag[3] = "listar_usuarios.php";
        $pag[4] = "listar_produtos.php";
       
        
        if(!empty($link)) {
            if(file_exists($pag[$link])) {
                include $pag[$link];
            }
        }
        ?>

    </body>

</html> 

