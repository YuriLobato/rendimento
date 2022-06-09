<html>
  <head>
    <meta charset="utf-8" />
    <title>NGKPI - Indicadores de Processo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/logoaba.png" type="image/x-icon">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark justify-content-center">
      <a class="navbar-brand" href="#">
        <img src="img/logo1.png" width="100" height="100" class="d-inline-block align-top ml-3" alt="">
        <span class="display-3 ml-3">NGKPI - Indicadores de Processo</span>
      </a>
    </nav>

    <div class="container">
      <div class="row">

        <div class="card-login" style="margin-top: 150">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                  <div class="text-danger">
                    Faça login antes de acessar as páginas protegidas
                  </div>
                  
                <?php } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="container-fluid bg-white" style="margin-top: 150">
      <nav class="navbar navbar-white bg-white justify-content-center">
        <a class="navbar-brand">
          <img src="img/logoNgk.png" height="100" class="d-inline-block align-top ml-3" alt=""> 
          <img src="img/logoReform.png" width="100" height="100" class="d-inline-block align-top ml-3" alt="">
          <p class="text-center text-dark mt-3">Divisão Estratégia da Produção - Reformulação da Produção</p>
          <small><p class="text-center text-dark">Copyright 2020 - Todos os Direitos Reservados</p></small>       
        </a>  
      </nav>
    </footer>
  </body>


  
  
</html>