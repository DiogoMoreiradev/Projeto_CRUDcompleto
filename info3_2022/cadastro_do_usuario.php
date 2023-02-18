<!-- <form class="form-horizontal" method="POST" action="actions/cadastro_do_usuario.php">
    Nome Email usuario senha -->
    <?php
session_start();
?>


<html lang="pt-br">
<!--cabeçalho-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, inital-scale=1">
		<meta name="pagina de acesso" content="Página de acesso!">
		<meta name="Diogo Sistemas" content="Diogo Moreira">
		<link rel="icon" href="imagens/icon_70af72fb46d5677fd2b845069b0ced1f.ico">
		<title>Acesso ao Sistema</title>
		<link rel="stylesheet" href="css/responsivo.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" rel="stylesheet">
	</head>
	<body class="fundo">

	<?php
	// destrói a váriavel de sessão 'acesso' removendo assim suas credenciais de acesso

	unset ($_SESSION['acesso']);

	?>
    <style>
        .header {
            margin-bottom: 0;
        }
</style>



	<form method="POST" action="actions/cadastro_do_usuario.php">
		<div class="container">
			<div  class="form-box">
				
				<div class="header">
					<h4 style="color: #205295;">Cadastro</h4><img src="imagens/login_escudo.png" alt="login" width="80" height="80"id="logo_key">
				</div>
			<div class="inputs">
				
				<div class="input-box">
                <i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="nome"  placeholder="Nome"    required autofocus>
				</div>
				<div class="input-box">
                <i class="fa fa-envelope" aria-hidden="true"></i>
					<input type="text" name="email"  placeholder="Email"    required autofocus>
				</div>
				<div class="input-box">
					<i class="fa fa-user-circle"></i>
					<input type="text" name="usuario"  placeholder="Usuário"    required autofocus>
				</div>
				<div class="input-box">
					<i class="fa fa-key"></i>
					<input type="password" name="senha"  placeholder="Senha" id="" required>
				</div>
			</div>
			<div>
				<button type="submit" class="Login-btn">Criar conta</button>
			</div>
			<a class="cadLink" href="login_2.php">Já tenho uma conta</a>

</form>
</div>
	</div>
	</body>
</html>
