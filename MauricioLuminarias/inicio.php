<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="estilo.css">
    
    <title>Maurício Luminárias</title>

  </head>

  <body>

    <div class="container-fluid">
      <!-- Início do Topo -->
      <img class="img-fluid float-left" id="logo"src="imagens/logo.png"> <!-- LOGO -->
      <div class="row mt-2 d-flex">
        <div class="col-8 d-flex justify-content-center hidden" ><!-- GIF -->
          <img src="imagens/lampada_gif.gif" id="lamp">
        </div>

        <div class="col-4 d-flex justify-content-end"><!-- CADASTRE-SE -->
          <ul class="nav">
            <li class="nav-item ml-auto">
              <a href="" class="btn btn-outline-dark font-weight-bold text-dark0">Cadastre-Se</a>
              <a href="login.php" class="nav-link font-weight-bold" id="Entre">Entre<i class="fas fa-sign-in-alt ml-2"></i></a>
            </li>
          </ul>
        </div>
      </div><!-- Fim do Top -->

      
      <div class="container-fluid float-left">

        <!-- Início do Cabeçalho  -->
        <nav class="navbar navbar-expand-sm navbar-dark d-flex">

          <!-- Menu Hamburguer -->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
          <span class="navbar-toggler-icon"></span>
          </button><!-- Fim Menu Hamburguer -->

          <!-- Inicio Navegação -->
          <div class="collapse navbar-collapse" id="navegacao"> 
            <ul class="navbar-nav">

              <li class="nav-item">
                <a href="" class="nav-link">Início</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Produtos</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Contato</a>
              </li>
              <li class="nav-item" >
                <a href="" class="nav-link">Sobre Nós</a>
              </li>

              <div class="nav-item" id="linha">
                <span>_</span>
              </div>

              <li class="nav-item" id="carrinho">
                <a href="" class="nav-link"> <i class="fas fa-cart-arrow-down fa-2x mt-1 ml-1"></i></a>
              </li>

            </ul>
          </div>

          <div class="d-flex justify-content-end" id="divDoCarrinho">
              <a href="" class="nav-link" id="carrinhoPrincipal"> <i class="fas fa-cart-arrow-down fa-2x"></i></a>
          </div>
          <!------ Fim Navegação ----->

        </nav><!-- Fim do Cabeçalho  -->

        <!------ Início Conteúdo ----->
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="img"><img class="d-block img-fluid" src="imagens/ML/DSC_0501Copia.jpg" alt="First slide"></div>
            </div>
            <div class="carousel-item">
              <div class="img"><img class="d-block img-fluid" src="imagens/ML/DSC_0529Copia.jpg" alt="Second slide"></div>
            </div>
            <div class="carousel-item">
              <div class="img"><img class="d-block img-fluid" src="imagens/ML/DSC_04689.jpg" alt="Third slide"></div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!------ Fim Conteúdo ----->
      
        <!------ Início Rodapé ----->
        <footer class="d-flex justify-content-around" id="rodape">
        
          <div class="">
            <img src="imagens/logo.png" id="logo" style="width:200px; margin-top: -10px;">
          </div>

          <div class="">
            <ul class="navbar-nav"> 
              <li>
                <a class="nav-link" href=""><img src="imagens/placedark.png" style="margin-right:6px; width:40px;">  Av. Amaral Peixoto 395 - RJ </a>
              </li>
            </ul>
          </div>

          <div class="">
            <ul class="navbar-nav"> 
              <li>
                <a class="nav-link" href="https://www.facebook.com/mauricio.luminarias.5"><img src="imagens/facedark.png" style="margin-right: 6px;">/MaurícioLuminárias </a>
              </li>
              <li>
                <a class="nav-link" href=""><img src="imagens/wppdark.png"> +55 (22) 98846-5242</a>
              </li>
 
              
            </ul>
          </div>
        
        </footer><!------ Fim Rodapé ----->

      </div>
      

      

    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="efeitos.jsp"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>