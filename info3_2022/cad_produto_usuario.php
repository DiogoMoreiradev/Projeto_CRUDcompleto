<style>
      
      .form-control{
          width: 880px;
         
      }
      .cotainer{
          position: fixed;
      }
      
  </style>

  <div class="cotainer theme-showcase" role="main">
      <div class="page-header">
          <h1>Cadastro de Produtos</h2>
      </div>
     
      <div class="row">
          <div class="col-md-12">
              <form class="form-horizontal" method="POST" action="actions/cad_produto_usuario.php" enctype="multipart/form-data">

              <div class="form-group">
                  <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="nome" placeholder="" required autofocus>
                  </div>
              </div>

              <div class="form-group">
              <label for="inputE-mail" class="col-sm-2 control-label" >Preço:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="preco" placeholder="" required>
                      <div id="msgemail"></div>
                  </div>
              </div>

              <div class="form-group">
              <label for="inputUser" class="col-sm-2 control-label">Tipo:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="tipo" placeholder="" required>
                  </div>
                </div>

            


              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info">Salvar</button>
                      <a href='usuario.php?link=0&id=<?php echo $resultado['id']; ?>'>
                          <button type="reset" class='btn btn-danger'>Cancelar</button></a>
                  </div>
    </div>
          </form>
          </div>
      </div>
  </div>
</div>