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
    
    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value=(conteudo.logradouro);
                document.getElementById('bairro').value=(conteudo.bairro);
                document.getElementById('cidade').value=(conteudo.localidade);
                document.getElementById('uf').value=(conteudo.uf);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value="...";
                    document.getElementById('bairro').value="...";
                    document.getElementById('cidade').value="...";
                    document.getElementById('uf').value="...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
        
        function formatar(mascara, documento){
          var i = documento.value.length;
          var saida = mascara.substring(0,1);
          var texto = mascara.substring(i);

          if (texto.substring(0,1) != saida){
                    documento.value += texto.substring(0,1);
          }

        }
        
        
        
    </script>
    
  </head>

  <body>
    
    <div class="container-fluid">

      <div class="container-fluid float-left" id="main">

        <?php include 'topo.php'; ?>

        <!------ Início Conteúdo ----->
        <div class="row d-flex justify-content-center h-100">
          <div class="card h-50">

            <div class="card-body">
              <form action="gravar.php" method="post">
                
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" name="nome" class="form-control" placeholder="Nome" required="">
                </div>
                
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="Email" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
                
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required="" minlength="6" maxlength="8">
                  
                   
			
                </div>
                  
                  
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="confirmasenha" id="confirmasenha" class="form-control" placeholder="Confirmar Senha" required="" minlength="6" maxlength="8">
                  
                    
                </div>
                  
                <div class="form-row">
                    <div class="input-group form-group col-md-6">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input name="telefone" class="form-control" placeholder="Telefone" required="" maxlength="12" pattern="\[0-9]{2}\ [0-9]{3,6}-[0-9]{3,4}$" OnKeyPress="formatar('## ####-####', this)">
                    </div>
                    <div class="input-group form-group col-md-6">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                      </div>
                      <input name="celular" class="form-control" placeholder="Celular" required="" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                    </div>
                </div>
                  
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                  </div>
                  <input name="datadenascimento" class="form-control" placeholder="Data de Nascimento" required=""  maxlength="10" OnKeyPress="formatar('####-##-##', this)">
                </div>
                
                <div class="form-row">
                    <div class="input-group form-group col-md-7">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                      </div>
                      <input name="cep" id="cep" class="form-control" placeholder="CEP" maxlength="9" pattern="[0-9]{5,6}-[0-9]{3,4}$" OnKeyPress="formatar('#####-###', this)">
                    </div>
                    <div class="input-group form-group col-md-5">
                        <button id="btnpesquisar" type="button" class="btn btn-outline-warning" onclick="pesquisacep(cep.value);">Pesquisar</button>
                    </div>
                </div>
                
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-road"></i></span>
                  </div>
                  <input name="rua" id="rua" class="form-control" placeholder="Rua" required="" readonly="readonly">
                </div>
                
                <div class="form-row">
                    <div class="input-group form-group col-md-5">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                      </div>
                      <input name="numero" class="form-control" placeholder="Nº" required="">
                    </div>
                    <div class="input-group form-group col-md-7">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-door-closed"></i></span>
                      </div>
                      <input name="complemento" class="form-control" placeholder="Complemento" required="">
                    </div>
                </div>
                
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                  </div>
                  <input name="bairro" id="bairro" class="form-control" placeholder="Bairro" required="" readonly="readonly">
                </div>
                
                <div class="form-row">
                    <div class="input-group form-group col-md-8">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-signs"></i></span>
                      </div>
                      <input name="cidade" id="cidade" class="form-control" placeholder="Cidade" required="" readonly="readonly">
                    </div>
                    <div class="input-group form-group col-md-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                      </div>
                      <input name="uf" id="uf" class="form-control" placeholder="UF" required="" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                  <input id="btcadastrar" type="submit" value="Cadastrar" class="btn float-right login_btn">
                </div>
              </form>
            </div>

            <div class="card-footers mb-2">
              <div class="d-flex justify-content-center links">
                Já possui conta?<a href="login.php">Entrar</a>
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