<? 
  require_once "validador_acesso.php";
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>NGKPI - Indicadores de Processo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/logoaba.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="estilo.css">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
 
    </style>
  
  </head>

  <body>
  
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo1.png" width="30" height="30" class="d-inline-block align-top ml-3" alt="">
        NGKPI - Indicadores de Processo
      </a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <div class="dropdown">
            <a href="lancar_dados.php"><button class="dropbtn" style="border-radius: 5px 0 0 5px">LANÇAMENTO DE DADOS</button></a>
              <!--<div class="dropdown-content">
                <a href="#">VELAS</a>
                <a href="#">CABOS</a>
                <a href="#">PASTILHA</a>
              </div>-->
            </div>
        </li>
        
        <li class="nav-item">
          <div class="dropdown">
            <a href="consultar_rendimento.php"><button class="dropbtn" style="border-radius: 0 5px 5px 0" >ANÁLISE DE DADOS</button></a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">

      <div class="row mt-4" >
        <span class="text-center display-4">INDICADORES DE PROCESSO DA NGK DO BRASIL (RP / PPM)</span>
      </div>   

      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              <span class="h4">VELAS</span>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <img src="img/graficoexemplo.png">
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header">
             <span class="h4">CABOS</span>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <img src="img/graficoexemplo.png">
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header">
              <span class="h4">PASTILHAS</span>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <img src="img/graficoexemplo.png">
                </div>
              </div>
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