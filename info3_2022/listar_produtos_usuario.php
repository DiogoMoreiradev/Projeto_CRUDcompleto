<?php
include_once('conexao.php');
if(!isset($_SESSION['acesso']) && (!isset($_SESSION['acesso']) == 1)) // se a váriavel SESSION que compôe a coluna acesso existe e ela nessa mesma coluna tiver o valor de 2 faça
{
    unset($_SESSION['acesso']);
   
    header("Location: login_2.php");
}



$sql = "SELECT * FROM produtos ORDER BY id ASC";

$result = $conexao->query($sql);
?>
<style>
    body {
	color: white;
    text-align:center;
}
    .table-bg{
        background: rgba(0,0,0,0.3);
        border-radius: 15px 15px 0 0;
    }
</style>
<html>
<head>
<link href="https:cdn.jsdeliver.net/npm/bootstrap@5.0.2/dist/css/boostrap.min.css" rel="stylesheet">
</head>
            <body>
                </div>
            <div class="m-5">
                <table  class="table table-bg">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Ações</th>
    
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($produto_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>".$produto_data['nome']."</td>";
                                echo "<td>".$produto_data['preco']."</td>";
                                echo "<td>".$produto_data['tipo']."</td>";
                                echo "<td>
                                    <a class='btn btn-sm btn-primary' href='edit_produtos_usuario.php?id=$produto_data[id]'>
                                    <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Editar</a>
                                    
                                
                                </td>";
                                echo "<td>
                                <a class='btn btn-sm btn-danger' href='delete_produtos_usuario.php?id=$produto_data[id]'>
                                <span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Deletar</a>
                                
                            
                            </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                    </table>
                    </div>
                        </body>
                        </html>
                               