
    <style>
     
     /* O contêiner <div> é necessário para posicionar o conteúdo suspenso*/
     .dropdown {
       position: relative;
       display: inline-block;
     }
     
     /* Dropdown Content (quando está oculto por padrão) */
     .dropdown-content {
       display: none;
       position: absolute;
       background-color: #f1f1f1;
       min-width: 160px;
       box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
       z-index: 1;
     }
     
     /* links dentro do dropdown */
     .dropdown-content a {
       color: black;
       padding: 12px 16px;
       text-decoration: none;
       display: block;
     }
     .navbar-right{
       margin-bottom: -50px;
     }
     
     .navbar {
       background-color: #333;
     }
     
     .navbar a {
       float: left;
       font-size: 16px;
       color: white;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
     }
     .fundo{
             background-image: url(imagens/fundo_login.png);
             background-repeat: no-repeat;
             background-size: cover;
         
           }	
     /* mostra o menu suspenso (use JS para adicionar esta classe ao contêiner .dropdown-content quando o usuário clicar no botão suspenso) */
     .show {display:block;}
         </style>
         <body class="fundo">
         <nav class ="navbar">
           <div class="container-fluid">
                 <div class="navbar-header">
                     <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']."?link=0"?>">Painel do Usuário</a>
         </div>
               <div class="collapse navbar-collapse" id="bs-example-navbar-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                         <a href="#" onclick="myFunction2()" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-apple"></span> Produtos <span class="caret" ></span>
                         </a>
                             <ul id="myDropdown2" class="dropdown-menu">
                             <li><a href="<?php echo $_SERVER['PHP_SELF']."?link=1"?>">Cadastrar</a></li>
                              <li><a href="<?php echo $_SERVER['PHP_SELF']."?link=2"?>">Listar</a></li>
                           </ul>
                     </li>
         </ul>
         
         
                     
                 
                 <ul class="nav navbar-nav navbar-right" id="Sair">
                     <li><a href="#" onclick="Sair()"><span class="fa-solid fa-arrow-right-from-bracket"  aria-hidden="true"></span> Sair</a></li>
                 </ul>
             </div>
         </div>
       </nav>
       <script>
        /* Quando o usuário clicar no botão vai
     alternar entre ocultar e mostrar o conteúdo suspenso */
     function myFunction() {
       document.getElementById("myDropdown").classList.toggle("show");
     }
     
     /* Fecha a lista suspensa se o usuário clicar fora dela */
     window.onclick = function(e) { 
       if (!e.target.matches('.dropdown-toggle')) {
       var myDropdown = document.getElementById("myDropdown", "myDropdown2");
         if (myDropdown.classList.contains('show')) {
           myDropdown.classList.remove('show');
         }
       }
     }
     </script>
     <script>
     function Sair() {
       $('#confirm-sair').modal({show: true});
     }
    </script>
     
       <div class="modal fade" id="confirm-sair" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
       <div class="modal-content">
       <div class="modal-header bg-danger">
               <h4 class="modal-title"><span class="fa-solid fa-triangle-exclamation" aria-hidden="true"></span> Sair</h4>
       </div>
           <div class="modal-body">
             Tem certeza de que deseja sair?
          </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-success" data-dismiss="modal">
                   <span class="fa-solid fa-xmark" aria-hidden="true"></span> Cancelar
               </button>
               <a href="login_2.php" class="btn btn-danger text-white">
           <span class="fa-solid fa-check" arian-hidden="true"></span> Sair
               </a>
           </div>
     </div>
     </div>
     </div>
    </body>