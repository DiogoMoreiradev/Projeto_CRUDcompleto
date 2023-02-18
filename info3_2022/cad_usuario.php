    <style>
      
        .form-control{
            width: 880px;
           
        }
        .cotainer{
            position: fixed;
        }
        h1, label {
        color: #fff;
      }
        
    </style>

    <div class="cotainer theme-showcase" 
    role="main">
        <div class="page-header">
            <h1>Cadastro de Usuários</h2>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="actions/cad_usuario.php">

                <div class="form-group">
                    <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" placeholder="" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                <label for="inputE-mail" class="col-sm-2 control-label" >E-mail:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="" required>
                        <div id="msgemail"></div>
                    </div>
                </div>

                <div class="form-group">
                <label for="inputUser" class="col-sm-2 control-label">Usuário:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="usuario" placeholder="" required>
                    </div>
                </div>
                <div class="form-group">
                <label for="inputSenha" class="col-sm-2 control-label">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="senha" placeholder="" required>
                    </div>
                </div>
                <div class="form-group">
                <label for="inputNivel" class="col-sm-2 control-label">Nível de Acesso:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="nivel_de_acesso" required>
                            <option></option>
                            <option value="2">Administrador</option>
                            <option value="1">Usuário</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info">Salvar</button>
                        <a href='administrativo.php?link=0&id=<?php echo $resultado['id']; ?>'>
                            <button type="reset" class='btn btn-danger'>Cancelar</button></a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
