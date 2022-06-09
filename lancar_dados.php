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


    <style>x
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
            <button class="dropbtn">Setor 1</button>
              <div class="dropdown-content">
                <a href="#">Maq 1</a>
                <a href="#">Maq 2</a>
                <a href="#">Maq 3</a>
              </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <button class="dropbtn">Setor 2</button>
              <div class="dropdown-content">
                <a href="#">Maq 1</a>
                <a href="#">Maq 2</a>
                <a href="#">Maq 3</a>
              </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <button class="dropbtn">Setor 3</button>
              <div class="dropdown-content">
                <a href="#">Maq 1</a>
                <a href="#">Maq 2</a>
                <a href="#">Maq 3</a>
              </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="home.php">VOLTAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">
        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header text-info">
              <h2>Lançamento de Produção e Reprovados</h2>
            </div>
          <div class="card-body">
            <form method="post" action="registra_chamado.php">
              <div class="form-row">
                <div class="col-sm-4">
                  <div class="input-group mb-3">
                    <input class="form-control" id="datepicker" class="form-control" placeholder="Informe a data" aria-describedby="basic-addon1" autocomplete="off">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-calendar" aria-hidden="true" style="align-self: stretch"></i>
                      </span>
                      <script>
                        $('#datepicker').datepicker({
                        format: "dd/mm/yyyy",
                        language: "pt-BR",
                        });
                      </script>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <select class="custom-select" id="inlineFormCustomSelectPref">
                    <option selected>Turno...</option>
                    <option value="1">1º turno</option>
                    <option value="2">2º turno</option>
                    <option value="3">3º turno</option>
                    <option value="4">Semana Inglesa</option>
                    <option value="5">Horário Normal</option>
                    <option value="6">Letra</option>
                  </select>

                </div>

                <div class="col-sm-4">
                  <select class="custom-select" id="inlineFormCustomSelectPref">
                    <option selected>Piece Time...</option>
                    <option value="1">1,0</option>
                    <option value="2">2,0</option>
                    <option value="3">3,0</option>
                    <option value="4">4,0</option>
                    <option value="5">5,0</option>
                    <option value="6">Outro valor...</option>
                  </select>
                  
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-3">
                  <div class="input-group">
                      <input name="codigoTipo" type="number" min="0" class="form-control" placeholder="Código do Item">
                  </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                      <input name="descricaoTipo" type="text" class="form-control" placeholder="Descrição do tipo" disabled>
                    </div>
                </div>
              </div>
              <div>

              <div class="form-row">
                <div class="col-md-6">
                  <div class="input-group">
                      <input name="producaoTipo" type="number" min="0" class="form-control" placeholder="Produção por tipo">
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <input name="reprovadoTipo" type="number" min="0" class="form-control" placeholder="Reprovado por tipo">
                    </div>
                </div>
              </div>
              <div>


                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active text-info" id="perdaA-tab" data-toggle="tab" href="#perdaA" role="tab">
                      Perda A
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-info" id="perdaB-tab" data-toggle="tab" href="#perdaB" role="tab">
                      Perda B</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-info" id="perdaC-tab" data-toggle="tab" href="#perdaC" role="tab">
                      Perda C
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-info" id="perdaD-tab" data-toggle="tab" href="#perdaD" role="tab">
                      Perda D
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-info" id="perdaE-tab" data-toggle="tab" href="#perdaE" role="tab">
                      Perda E
                    </a>
                  </li>
                </ul>
              </div>

              <div class="tab-content">
                <div class="tab-pane container active" id="perdaA" role="tabpanel">
                  <div class="form-group row mt-4">
                    <label for="perdaA1" class="col-sm-3 col-form-label text-right">Falta de Programação</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA1">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaA2" class="col-sm-3 col-form-label text-right">Sem Programação</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA2">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaA3" class="col-sm-3 col-form-label text-right">Teste / Desenv. Produto</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA3">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaA4" class="col-sm-3 col-form-label text-right">Falta de Energia</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA4">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaA5" class="col-sm-3 col-form-label text-right">Balanço Previsto</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA5">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaA6" class="col-sm-3 col-form-label text-right">Limpeza Prevista</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA6">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaA7" class="col-sm-3 col-form-label text-right">Falta de Mão-de-obra</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA7">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaA8" class="col-sm-3 col-form-label text-right">Falta de Matéria-prima</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA8">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaA9" class="col-sm-3 col-form-label text-right">Falta de Material1</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA9">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaA10" class="col-sm-3 col-form-label text-right">Falta de Material2</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA10">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaA11" class="col-sm-3 col-form-label text-right">Falta de Material3</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA11">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaA12" class="col-sm-3 col-form-label text-right">Falta de Material4</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA12">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaA13" class="col-sm-3 col-form-label text-right">Falta de Material5</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA13">
                    </div>
                    <div class="col-sm-2"></div>
                  </div>
                </div>
                
                <div class="tab-pane container fade mt-4" id="perdaB" role="tabpanel"">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-header text-info text-center">
                          Perda B Mecânica                          
                        </div>
                        <div class="card-body">
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica1</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec1">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica2</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec2">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica3</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec3">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica4</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec4">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica5</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec5">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica6</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec6">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica7</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec7">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica8</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec8">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica9</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec9">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica10</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec10">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica11</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec11">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica12</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec12">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="bmecanica" class="col-sm-8 col-form-label text-right">B-mecanica13</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBmec13">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-header text-info text-center">
                          Perda B Elétrica                          
                        </div>
                        <div class="card-body">
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica1</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet1">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica2</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet2">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica3</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet3">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica4</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet4">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica5</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet5">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica6</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet6">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica7</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet7">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica8</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet8">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica9</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet9">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica10</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet10">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica11</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet11">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica12</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet12">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="beletrica" class="col-sm-8 col-form-label text-right">B-eletrica13</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaBelet13">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                  
                
                <div class="tab-pane container fade mt-4" id="perdaC" role="tabpanel">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-header text-info text-center">
                          Perda C Mecânica                          
                        </div>
                        <div class="card-body">
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica1</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec1">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica2</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec2">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica3</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec3">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica4</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec4">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica5</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec5">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica6</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec6">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica7</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec7">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica8</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec8">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica9</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec9">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica10</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec10">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica11</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec11">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica12</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec12">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="cmecanica" class="col-sm-8 col-form-label text-right">C-mecanica13</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCmec13">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-header text-info text-center">
                          Perda C Elétrica                          
                        </div>
                        <div class="card-body">
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica1</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet1">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica2</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet2">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica3</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet3">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica4</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet4">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica5</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet5">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica6</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet6">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica7</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet7">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica8</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet8">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica9</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet9">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica10</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet10">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica11</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet11">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica12</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet12">
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                              <label for="celetrica" class="col-sm-8 col-form-label text-right">C-eletrica13</label>
                            <div class="col-sm-4">
                              <input type="number" min="0" class="form-control" id="perdaCelet13">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane container fade" id="perdaD" role="tabpanel">
                  <div class="form-group row mt-4">
                    <label for="perdaD1" class="col-sm-3 col-form-label text-right">Refeição</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaD1">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaD2" class="col-sm-3 col-form-label text-right">Reunião</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaD2">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaD3" class="col-sm-3 col-form-label text-right">Treinamento</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaD3">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaD4" class="col-sm-3 col-form-label text-right">Evacuação do Prédio</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaD4">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaD5" class="col-sm-3 col-form-label text-right">Emergência</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaD5">
                    </div>
                    <div class="col-sm-2"></div>
                    
                  </div>
                </div>
                
                <div class="tab-pane container fade" id="perdaE" role="tabpanel">
                  <div class="form-group row mt-4">
                    <label for="perdaE1" class="col-sm-3 col-form-label text-right">PerdaE1</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaA1">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaE2" class="col-sm-3 col-form-label text-right">PerdaE2</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE2">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaE3" class="col-sm-3 col-form-label text-right">PerdaE3</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE3">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaE4" class="col-sm-3 col-form-label text-right">PerdaE4</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE4">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaE5" class="col-sm-3 col-form-label text-right">PerdaE5</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE5">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaE6" class="col-sm-3 col-form-label text-right">PerdaE6</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE6">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaE7" class="col-sm-3 col-form-label text-right">PerdaE7</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE7">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaE8" class="col-sm-3 col-form-label text-right">PerdaE8</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE8">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaE9" class="col-sm-3 col-form-label text-right">PerdaE9</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE9">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaE10" class="col-sm-3 col-form-label text-right">PerdaE10</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE10">
                    </div>
                  </div>
                  <div class="form-group row mt-4">
                    <label for="perdaE11" class="col-sm-3 col-form-label text-right">PerdaE11</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE11">
                    </div>
                    <div class="col-sm-2"></div>
                    <label for="perdaE12" class="col-sm-3 col-form-label text-right">PerdaE12</label>
                    <div class="col-sm-2">
                      <input type="number" min="0" class="form-control" id="perdaE12">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row mt-4">
                    <div class="col-lg-12 text-right">
                        <a class="btn btn-info btn-lg mr-2" href="home.php">Voltar</a>
                        <button class="btn btn-info btn-lg">Enviar</button>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
 </body>
</html>