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
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<!--o código input a baixo de fundo serve para editar o autocomplete do navegador, fazendo com que a cor se pareça mais com o form-box-->
	<style>
	.fundo{
				background-image: url(imagens/fundo_login.png);
				background-repeat: no repeat;
				background-size: 100%;
				
		
			}	
			input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
    -webkit-text-fill-color: white;
    -webkit-box-shadow: 0 0 20px 2px rgba(0,0,0,0.5) inset;
}
			input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
  border: none;
  -webkit-box-shadow:0 0 20px 2px rgba(0,0,0,0.5) inset;
  transition: background-color 5000s ease-in-out 0s;
}
.form-box{
		background: #000000cc;
		color: #fff;
		box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 600px;
		height: 460px;
		border-radius:6px;
	}
	h1{
		text-align: center;
		margin-bottom: 40px;
	}
	.input-box{
		margin: 31px auto;
		width: 80%;
		border-bottom: 1px solid #fff;
		padding-top: 10px;
		padding-bottom: 5px;
	}
	.input-box input{
		width: 90%;
		border: none;
		outline: none;
		background: transparent;
		color:#fff;
	}
	#logoy{
		margin-bottom:40px;
		margin-left: 220px;
		margin-top: 40px;
	}
	
	
	</style>
	<body class="fundo">

	<?php
	// destrói a váriavel de sessão 'acesso' removendo assim suas credenciais de acesso

	unset ($_SESSION['acesso']);

	?>




	<form method="POST" action="valida_login.php">
	<div  class="form-box">
		<div ><img src="imagens/cadeado-login.png" alt="login" width="150"
					height="90" id="logoy">
	<div class="input-box">
		<i class="fa fa-user-circle"></i>
		<input type="text" name="usuario"  placeholder="Usuário"    required autofocus>
	</div>
	<div class="input-box">
		<i class="fa fa-key"></i>
		<input type="password" name="senha"  placeholder="Senha" id="myInput" required>
		<span class="eye" onclick="myFunction()">
			<i id="hide1" class="fa fa-eye"></i>
			<i id="hide2" class="fa fa-eye-slash"></i>
		</span>
	</div>
	<div>
		<button type="submit" class="Login-btn">Entrar</button>
	</div>
	<!-- Resposta de usuário ou senha inválido-->
	<p>
		<?php
		if(isset($_SESSION['loginErro'])){ //verifica se a váriavel de sessão existe?>


			<!-- imprime a váriavel de sessão dentro da div-->
			<div class='alert alert-danger text-center' role='alert'>
			<?php echo $_SESSION['loginErro']?>
			</div>
			<?php
			unset ($_SESSION['loginErro']); // destrói a váriavel de sessão
			header ('Refresh: 3; url=login_2.php'); // Vai recarregar a página depois de 3 segundos
		}
	?>
	</p>
	</form>
	</div>
	<script>
	function myFunction(){ // função para realizar o mostrar senha
		var x = document.getElementById("myInput"); // vai alternar entre os dois icons, o olho com corte(esconde senha) e o olho aberto(mostra senha)
		var y = document.getElementById("hide1");
		var z = document.getElementById("hide2");
						 
		if(x.type === 'password'){ // se for do tipo senha faça: 
			x.type = "text";
			y.style.display = "block";
			z.style.display = "none";
		} 			
		else{
			x.type = "password"; // se receber senha faça:
			y.style.display = "none";
			z.style.display = "block";
		}
	}
	</script>
	</body>
</html>