<html>
  <head>
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="material.css">
    <script src="material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
    <body>
      
        
        
        <center> 
       <div class="logindiv"> 
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Login</h2>
          </div>
              <form action="validaUsuario.php" method="post">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="login" id="">
                    <label class="mdl-textfield__label" for="sample3">Login</label>
                  </div>
                  
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" name="senha" id="">
                    <label class="mdl-textfield__label" for="sample3">Senha</label>
                    </div> 
                    <div class="mdl-card__actions mdl-card--border">
                        <button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                          Entrar
                        </button>
                    </div>
                </form>
          </div>
        </div>
        </center>
  
    </body>       
</html>
