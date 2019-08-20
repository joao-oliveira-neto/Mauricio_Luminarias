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
   
    <?php
        $chave = "";
        
        $conn = mysqli_connect("localhost", "root", "", "link");
        
        //Verifica se a url tem a chave de acesso, se sim, verifca se o link e válido e dá acesso ao usuário, caso não contrário, diz que a página não foi encontrada
        if($_GET["chave"]){
            
            //Guarda na variável chave a chave que veio da url
            $chave = $_GET["chave"];
            
            //Verifica no banco se o link já foi expirado ou não
            $verifica = mysqli_query($conn, "SELECT * FROM expiracao WHERE chave = '$chave' AND datatempo>=NOW()") or die("erro ao selecionar");
            
            if (mysqli_num_rows($verifica) == 1){
                
                
      
    ?>
    
                <div class="container-fluid">

                  <div class="container-fluid float-left" id="main">

                    <?php include 'topo.php'; ?>

                    <!------ Início Conteúdo ----->
                    <div class="d-flex justify-content-center h-100">
                      <div class="card">
                        <br>
                        <label class="text-center" style="color:white">Digite sua nova senha</label>
                        <br>

                        <div class="card-body">
                          <form action="novasenha.php" method="post">
                          <input name="chave" type="hidden" value="<?php echo $chave ?>">
                            <div class="input-group form-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                              <input name="senhaantiga" type="password" class="form-control" placeholder="Senha antiga" required="">
                            </div>

                            <div class="input-group form-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                              <input name="senhanova" type="password" class="form-control" placeholder="Senha nova" required="" minlength="6" maxlength="8">
                            </div>

                            <div class="input-group form-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                              <input name="confirmasenhanova" type="password" class="form-control" placeholder="Confirmar Senha nova" required="" minlength="6" maxlength="8">
                            </div>
                            <br>
                            <div class="form-group">
                              <input id="btnredefinir" name="btnredefinir" type="submit" value="Redefinir" class="btn float-right login_btn">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!------ Fim Conteúdo ----->


                  </div>

                </div>
       
    <?php
            } else{
                echo "<script language='javascript' type='text/javascript'>
                alert('Link expirado');</script>";
            }
      
        } else{
            echo "<h1>Página não encontrada</h1>";
        }
    
    ?>
        
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- <script src="funçoesScript.jsp"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>