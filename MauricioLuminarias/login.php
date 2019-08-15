<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="LoginEstilo.css">
    
    <title>Maurício Luminárias</title>
  </head>

  <body>
    
    <div class="container-fluid">

      <div class="container-fluid float-left" id="main">

        <?php include 'topo.php'; ?>

        <!------ Início Conteúdo ----->
        <div class="d-flex justify-content-center h-100">
          <div class="card">
            <div class="card-header">
              <h3><img src="imagens/logo.png" style="width: 150px;" alt=""></h3>
              <div class="d-flex justify-content-end social_icon">
                <span><i class="fab fa-facebook"></i></span>
                <span><i class="fab fa-whatsapp"></i></span>
              </div>
            </div>

            <div class="card-body">
              <form>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Email">
                </div>

                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="senha">
                </div>

                <div class="row align-items-center remember">
                  <input type="checkbox">Lembrar-me
                </div>

                <div class="form-group">
                  <input type="submit" value="Entrar" class="btn float-right login_btn">
                </div>
              </form>
            </div>

            <div class="card-footers mb-2">
              <div class="d-flex justify-content-center links">
                Não possui conta?<a href="#">Cadastre-se</a>
              </div>
              <div class="d-flex justify-content-center">
                <a href="#">Esqueceu sua senha?</a>
              </div>
            </div>
          </div>
        </div>
        <!------ Fim Conteúdo ----->
          

      </div>
      
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- <script src="funçoesScript.jsp"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>