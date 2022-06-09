<? require_once "validador_acesso.php" ?>

<html lang="pt">
  <head>
    <meta charset="utf-8" />
    <title>NGKPI - Indicadores de Processo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    
    <link rel="shortcut icon" href="logoaba.png" type="image/x-icon">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.pt-BR.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">


    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }

      /* Firefox */
      input[type=number] {
      -moz-appearance: textfield;
      }
      
      /*Configurações Padrões*/
      ul.menu, .menu li, .menu a {
        margin:0;
        padding:0;
        list-style: none;
        text-decoration:none;
      }

      ul.menu ul{
        position:absolute;
        display:none;
        box-shadow:3px 3px 2px #333;
      }
       
      /* Configurações nivel 1*/
      ul.menu {
        float:left;
        font-family:Verdana, Geneva, sans-serif;
        font-size:15px;
        border-radius:5px;
        padding:0 5px;
      }

      .menu li {
        float:left;
        width:auto;
        position:relative;
      }
      
      .menu li a {
        display:block;
        padding:0 20px;
        line-height:45px;
        height:45px;
        float:left;
        transition:all 0.1s linear;
      }
       
      /* Configurações nivel 2*/
      .menu li:hover > ul.submenu-1 {
        display:block;
        top:45px;
        left:0;
        padding:5px;
        width:165px;
        border-radius:0 0 5px 5px;
      }

      .menu ul.submenu-1 a {
        width:160px;
        padding:0 20px;
        border-radius:5px;
      }
       
      /* Configurações nivel 2*/
      .menu li:hover > ul.submenu-2 {
        display:block;
        top:0;
        left:140px;
        padding:5px;
        width:165px;
        border-radius: 0 5px 5px 5px;
      }
      .menu ul.submenu-2 a {
        width:160px;
        padding:0 20px;
        border-radius:5px;
      }
       
      /* Configurações nivel 3*/
      .menu li:hover > ul.submenu-3 {
        display:block;
        top:0;
        left:140px;
        padding:5px;
        width:165px;
        border-radius: 0 5px 5px 5px;
      }
      .menu ul.submenu-3 a {
        width:160px;
        padding:0 20px;
        border-radius:5px;
      }

      /*Configurações de cores*/
 
/*nivel 1*/
.menu{background:#53a1b8; }
.menu a{ color:#000;}
.menu li:hover > a{ background:#999;  color:#fff;}
 
/*nivel 2*/
.submenu-1{ background:#999;}
.submenu-1 a{color:#fff;}
.submenu-1 li:hover > a{ background:#666; }
 
/*nivel 3*/
.submenu-2{ background:#666;}
.submenu-2 a{color:#fff;}
.submenu-2 li:hover > a{ background:#333; }
 
/*nivel 3*/
.submenu-3{ background:#333;}
.submenu-3 a{color:#fff;}
.submenu-3 li:hover > a{ background:#000; }

    </style>
    
    


  </head>

  <body>
  
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo1.png" width="30" height="30" class="d-inline-block align-top ml-3" alt="">
        NGKPI - Indicadores de Processo
      </a>
      <ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
        <li><a href="#">CASTELO</a>
          <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                <li><a href="#">DECA-0</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">COLD FORMER</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">CF1</a></li>
                                                <li><a href="#">CF2</a></li>
                                                <li><a href="#">CF3</a></li>
                                                <li><a href="#">CF4</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECA-1</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">FORMAX</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">FORMAX</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECA-2</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">TORNO CM</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">CM 15 LINHA A</a></li>
                                                <li><a href="#">CM 8 LINHA B</a></li>
                                                <li><a href="#">CM 11R LINHA C</a></li>
                                                <li><a href="#">CM 2R LINHA D</a></li>
                                                <li><a href="#">CM 3 LINHA E</a></li>
                                                <li><a href="#">CM 13R LINHA F</a></li>
                                                <li><a href="#">CM 6R LINHA G</a></li>
                                                <li><a href="#">CM 14R LINHA H</a></li>
                                                <li><a href="#">CM 7 LINHA J</a></li>
                                                <li><a href="#">CM 12R LINHA K</a></li>
                                                <li><a href="#">CM 10R LINHA M</a></li>
                                                <li><a href="#">CM 4 LINHA N</a></li>
                                                <li><a href="#">CM 1 LINHA O</a></li>
                                                <li><a href="#">CM 16 LINHA P</a></li>
                                                <li><a href="#">CM 17 LINHA Q</a></li>
                                                <li><a href="#">CM 9R LINHA R</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECA-3</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">SOLDA/ACAB.</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">LINHA N</a></li>
                                                <li><a href="#">LINHA O</a></li>
                                                <li><a href="#">LINHA P</a></li>
                                                <li><a href="#">LINHA D</a></li>
                                                <li><a href="#">LINHA Q</a></li>
                                                <li><a href="#">LINHA RE</a></li>
                                                <li><a href="#">LINHA F</a></li>
                                                <li><a href="#">LINHA G</a></li>
                                                <li><a href="#">LINHA H</a></li>
                                                <li><a href="#">LINHA I</a></li>
                                                <li><a href="#">LINHA J</a></li>
                                                <li><a href="#">LINHA K</a></li>
                                                <li><a href="#">LINHA L</a></li>
                                                <li><a href="#">LINHA M</a></li>
                                                <li><a href="#">LINHA RB</a></li>
                                                <li><a href="#">LINHA T</a></li>
                                                <li><a href="#">LINHA R</a></li>
                                                <li><a href="#">LINHA S</a></li>
                                                <li><a href="#">LINHA U</a></li>
                                                <li><a href="#">LINHA RA</a></li>
                                                <li><a href="#">LINHA MURAK</a></li>
                                                <li><a href="#">LINHA SOLD MAN</a></li>
                                                <li><a href="#">LINHA ROSK MAN</a></li>
                                                <li><a href="#">LINHA RG</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECA-4</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">DOBRA/PERF.</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">DP</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECA-5</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">ZINCAGEM</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">LINHA A</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECA-7</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">NIQUELAÇÃO</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">LINHA A</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
          </ul>
        </li>
        <li><a href="#">ISOLADOR</a>
            <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                <li><a href="#">DEMP</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">DEMP</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">SD-6</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECE-1</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">DESBASTE</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">LINHA A</a></li>
                                                <li><a href="#">LINHA B</a></li>
                                                <li><a href="#">LINHA C</a></li>
                                                <li><a href="#">LINHA D</a></li>
                                                <li><a href="#">LINHA E</a></li>
                                                <li><a href="#">LINHA F</a></li>
                                                <li><a href="#">LINHA G</a></li>
                                                <li><a href="#">LINHA H</a></li>
                                                <li><a href="#">LINHA I</a></li>
                                                <li><a href="#">LINHA J</a></li>
                                                <li><a href="#">LINHA L</a></li>
                                                <li><a href="#">LINHA M</a></li>
                                                <li><a href="#">LINHA N</a></li>
                                                <li><a href="#">LINHA O</a></li>
                                                <li><a href="#">LINHA P</a></li>
                                                <li><a href="#">LINHA Q</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECE-2</a>
                  <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">FORNO</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                                <li><a href="#">VT-5</a></li>
                                                <li><a href="#">VT-8</a></li>
                                                <li><a href="#">VT-9</a></li>
                              </ul>
                            </li>
                  </ul>
                </li>
                <li><a href="#">DECE-3</a>
                        <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                            <li><a href="#">VERNIZ</a>
                              <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                                  <li><a href="#">LINHA J</a></li>
                                  <li><a href="#">LINHA L</a></li>
                                  <li><a href="#">LINHA M</a></li>
                                  <li><a href="#">LINHA N</a></li>
                                  <li><a href="#">LINHA O</a></li>
                                  <li><a href="#">LINHA P</a></li>
                                  <li><a href="#">LINHA Q</a></li>
                              </ul>
                            </li>
                        </ul>
                 </li>
            </ul>
        </li>
        <li><a href="#">ELETRODO</a>
          <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="#">DEPE-1</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                  <li><a href="#">CONJUGADAS</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                      <li><a href="#">LINHA D</a></li>
                      <li><a href="#">LINHA E</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
            <li><a href="#">DEPE-2</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                  <li><a href="#">FURADEIRA</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                    </ul>
                  </li>
                  <li><a href="#">REBARBADEIRA</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                    </ul>
                  </li>
                  <li><a href="#">REBITADEIRA</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                    </ul>
                  </li>
                  <li><a href="#">ROSQUEADEIRA</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                      <li><a href="#">LINHA D</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
            <li><a href="#">DEPE-3</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                  <li><a href="#">ANEL</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                    </ul>
                  </li>
                  <li><a href="#">ARRUELA</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
            <li><a href="#">DEPE-4</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                  <li><a href="#">REB.COBRE</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                    </ul>
                  </li>
                  <li><a href="#">NICUP</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                      <li><a href="#">LINHA D</a></li>
                      <li><a href="#">LINHA E</a></li>
                    </ul>
                  </li>
                  <li><a href="#">KYORI</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                      <li><a href="#">LINHA D</a></li>
                      <li><a href="#">LINHA E</a></li>
                    </ul>
                  </li>
                  <li><a href="#">EXTRUSORA</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                      <li><a href="#">LINHA D</a></li>
                      <li><a href="#">LINHA E</a></li>
                      <li><a href="#">LINHA F</a></li>
                      <li><a href="#">LINHA G</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">JUNÇÃO</a>
          <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="#">DEMO-1</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                  <li><a href="#">GS</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">GS A</a></li>
                      <li><a href="#">GS B</a></li>
                      <li><a href="#">GS C</a></li>
                      <li><a href="#">GS D</a></li>
                      <li><a href="#">GS E</a></li>
                      <li><a href="#">GS F</a></li>
                      <li><a href="#">GS G</a></li>
                      <li><a href="#">GS H</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
            <li><a href="#">DEMO-2</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                  <li><a href="#">CONVENCIONAL</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
          </ul>

        </li>

        <li><a href="#">MONTAGEM</a>
          <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="#">DEMO-3</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                  <li><a href="#">TALCO</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                      <li><a href="#">LINHA D</a></li>
                      <li><a href="#">LINHA E</a></li>
                      <li><a href="#">LINHA F</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
            <li><a href="#">DEMO-4</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                  <li><a href="#">FIXAÇÃO</a>
                    <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                      <li><a href="#">LINHA A</a></li>
                      <li><a href="#">LINHA B</a></li>
                      <li><a href="#">LINHA C</a></li>
                      <li><a href="#">LINHA D</a></li>
                      <li><a href="#">LINHA E</a></li>
                      <li><a href="#">LINHA F</a></li>
                      <li><a href="#">LINHA G</a></li>
                      <li><a href="#">LINHA H</a></li>
                      <li><a href="#">LINHA I</a></li>
                      <li><a href="#">LINHA J</a></li>
                      <li><a href="#">LINHA K</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">CABOS</a>
          <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="#">CABOS</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                <li><a href="#">CABOS</a>
                  <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                    <li><a href="#">LINHA GM</a></li>
                    <li><a href="#">LINHA FIAT</a></li>
                    <li><a href="#">LINHA WV</a></li>
                    <li><a href="#">EMPACOTADEIRA</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">PASTILHAS</a>
          <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="#">PRENSA</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                <li><a href="#">PRENSA</a>
                  <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                    <li><a href="#">GOTO</a></li>
                    <li><a href="#">SITI</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">DECOL</a>
              <ul class="submenu-2"> <!-- Esse é o 3 nivel ou o Segundo Drop Down -->
                <li><a href="#">DECOL</a>
                  <ul class="submenu-3"> <!-- Esse é o 4 nivel ou o Terceiro Drop Down -->
                    <li><a href="#">EMEC</a></li>
                    <li><a href="#">TECNEMA</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link text-info" href="home.php">VOLTAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col-12 card-home">
          <div class="card">
            <div class="card-header">
              <span class="h4">RENDIMENTO PRODUTIVO</span>
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
              <span class="h4">ÍNDICE DE FUNCIONAMENTO</span>
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
              <span class="h4">CAPACIDADE PRODUTIVA</span>
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
             <span class="h4">PPM</span>
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
              <span class="h4">REPROVADOS</span>
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
  </body>
</html>
