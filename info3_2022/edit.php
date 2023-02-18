<?php

    if(!empty($_GET['id']))
        {


            include_once('conexao.php');

            $id = $_GET['id'];

            $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

            $result = $conexao->query($sqlSelect);

            if($result->num_rows > 0)
            {
                while($user_data = mysqli_fetch_assoc($result))
                {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $usuario = $user_data['usuario'];
                $senha = $user_data['senha'];
                $nivel_de_acesso = $user_data ['nivel_de_acesso'];
                }
            }
            else
            {
                header("Location: administrativo.php?link=3");
            }
        }
        
        
    

?>

<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, inital-scale=1">
		<title>Acesso ao Sistema</title>
        <style>
            body {
                font-family:Arial, Helvetica, sans-serif;
                background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            }
            .box{           /* código para deixar a box no melhor espaçamento */
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0,0,0,0.8);
                padding: 15px;
                border-radius: 15px;
                width: 20%;
                color:white;
            }
            fieldset{
                border: 3px solid dodgerblue;
            }
            legend{
                border: 1px solid dodgerblue;
                padding: 10px;
                text-align: center;
                background-color: dodgerblue;
                border-radius: 8px;
            }
            .inputBox{
                position: relative;
            }
            .inputUser{         /* CSS responsável por fazer a animação de subir o texto e deixar azul */
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size: 15px;
                width: 100%;
                letter-spacing: 2px;
            }
            .labelInput{
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }
            .inputUser:focus ~ .labelInput,
            .inputUser:valid ~ .labelInput{                 
                top: -20px;
                font-size: 15px;
                color: dodgerblue; 
            }
            #update{
                background-image: linear-gradient( to right, rgb(0,92,197), rgb(90,20,220));
                width:100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;
            }
        
            #update:hover{
                background-image: linear-gradient( to right, rgb(0,80,172), rgb(80,19,195));
            }
            #voltar{
                background:  rgba(19, 62, 183, 1);
                border: none;
                padding: 15px;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;
                color:rgba(34, 141, 197, 1);
                text-decoration: none;
            }
            #voltar:hover{
                background:rgba(57, 97, 211, 1);
            }
        </style>
		
	</head>
    <body>
<a href="administrativo.php?link=3"><button id="voltar"><b>Voltar</b></button></a>
        <div class="box">
            <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Edição</b></legend>
                <br>
                <div class="inputBox">
          
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" value="<?php echo $usuario?>" required>
                    <label for="usuario" class="labelInput">Usuário</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <p>Nivel de Acesso:</p>
                <input type="radio" id="administrador" name="nivel_de_acesso" value="2" <?php echo ($nivel_de_acesso == '2' ) ? 'checked' : '' ?> required>
                <label for="administrador">Administrador</label>
                <br>
                <input type="radio" id="usuario" name="nivel_de_acesso"  value="1" <?php echo ($nivel_de_acesso == '1') ? 'checked' : '' ?> required>
                <label for="usuario">Usuário</label>
                <br>
                <input type="radio" id="cliente" name="nivel_de_acesso"  value="3" <?php echo ($nivel_de_acesso == '3') ? 'checked' : '' ?> required>
                <label for="cliente">Cliente</label>
                <br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <br>
                <input type="submit" name="update" id="update">

            </fieldset>
</form>
</div>
</body>
</html>
