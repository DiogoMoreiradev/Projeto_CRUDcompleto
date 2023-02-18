<html lang="pt-bt">
<!--cabeçalho-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, inital-scale=1">
		<meta name="pagina de acesso" content="Bem Vindo!">
		<meta name="author" content="Diogo Sistemas">
		<link rel="icon" href="imagens/icon_70af72fb46d5677fd2b845069b0ced1f.ico">
		<title>...::: BEM VINDO :::...</title>
	</head>
    <!-- ESTILO DO CARREGAMENTO -->
	<style>
	body{
    animation: degrade 5s ease alternate infinite;
    background-color: #064663;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
.container {
    display: flex;
    height: 100%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    color: #fff;
}
.container h2 {
    font-size: 40px;
}
.container span {
    position: relative;
}
span::after {
    content: '';
    width: 300px;
    height: 300px;
    background-color:  #064663;
    position: absolute;
    animation: Pontos 2s  steps(4) infinite;
}
@keyframes Pontos {
    0% {
        left: 0;
    }
    100% {
        left: 100%;
    }
}    
.c-loader {
    animation: is-rotating 1s infinite;
    border: 6px solid #fff;
    border-top-color: #50aeca;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    margin-top: 80px;
}



@keyframes is-rotating {
    to {
    transform: rotate(1turn)
    }
}
</style>


	
	
	

	<!--js para o redirecionamento-->
	<script type="text/javascript">
	function redirectTime() {
	//window.location = "manutencao.php" // caso o sistema esteja em manutenção
	window.location = "login_2.php"
	}
	</script>
	<!------------------>
	
	<!--conteúdo da página-->

	<body onload="setTimeout('redirectTime()', 4000)">
	
	<html>
        <div class="container">
            <h2>Seja bem vindo, Aguarde<span>....</span></h2>
              <div class="c-loader"></div>
        </div>      



   



					</html>