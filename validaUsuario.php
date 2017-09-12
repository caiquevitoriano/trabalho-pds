<html>
  <head>
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="material.css">
    <script src="material.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
    <body>
      
                                <?php
                                // session_start inicia a sessão
                                  session_start();
                                  include("conexao.php"); 
                                  $db = mysqli_connect('localhost', 'root','', 'login');
                                  $login = $_POST['login'];
                                  $senha = $_POST['senha'];
                                  $result = mysqli_query($db, "SELECT * FROM usuario where login='$login' and senha='$senha'");
                                  if(mysqli_affected_rows($db) == 1){ 
                                    $_SESSION['login'] = $login;
                                    $_SESSION['senha'] = $senha;
                                    echo '<div class="alert alert-danger">
                                    <strong>sucesso</strong>foi possivel efetuar o login!
                                    <a href="index.php"><button type="button" class="btn btn-danger">ok</button>
                                    </div>';                                                             
                                }
                                else{
                                    echo '<div class="alert alert-danger">
                                    <strong>Error!</strong> Não foi possivel efetuar o login!
                                    <a href="login.php"><button type="button" class="btn btn-danger">ok</button>
                                    </div>';
                                    unset ($_SESSION['login']);
                                    unset ($_SESSION['senha']);                             
                                }
                                mysqli_close($db);
                                ?>  
  
    </body>       
</html>
