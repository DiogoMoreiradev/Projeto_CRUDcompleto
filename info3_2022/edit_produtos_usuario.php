<?php

    if(!empty($_GET['id']))
        {


            include_once('conexao.php');

            $id = $_GET['id'];

            $sqlSelect = "SELECT * FROM produtos WHERE id=$id";

            $result = $conexao->query($sqlSelect);

            if($result->num_rows > 0)
            {
                while($produto_data = mysqli_fetch_assoc($result))
                {
                $nome = $produto_data['nome'];
                $preco = $produto_data['preco'];
                $tipo = $produto_data['tipo'];
                }
               
            }
            else
            {
                header("Location: administrativo.php?link=4");
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
            .box{
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
            .inputUser{
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
            #update_produtos{
                background-image: linear-gradient( to right, rgb(0,92,197), rgb(90,20,220));
                width:100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;
            }
        
            #update_produtos:hover{
                background-image: linear-gradient( to right, rgb(0,80,172), rgb(80,19,195));
            }
            #voltar{
                background:  rgba(19, 62, 183, 1);
                border: none;
                padding: 10px;
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
   <a href="usuario.php?link=2"><button id="voltar"><b>Voltar</b></button></a>
        <div class="box">
            <form action="saveEditprodutos_usuario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Edição</b></legend>
                <br>
                <div class="inputBox">
          
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="preco" id="preco" class="inputUser" value="<?php echo $preco?>" required>
                    <label for="preco" class="labelInput">Preço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tipo" id="tipo" class="inputUser" value="<?php echo $tipo?>" required>
                    <label for="tipo" class="labelInput">Tipo</label>
                </div> 
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update_produtos" id="update_produtos">

            </fieldset>
</form>
</div>
</body>
</html>
