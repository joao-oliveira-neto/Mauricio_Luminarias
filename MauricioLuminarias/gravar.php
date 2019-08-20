<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = sha1($_POST["senha"]);
    $confirmasenha = sha1($_POST["confirmasenha"]);
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $datadenascimento = $_POST["datadenascimento"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

    $con = mysqli_connect("localhost", "root", "", "mauricioluminarias"); //1 - onde o banco está, 2 - usuário, 3 - senha, 4 - nome do banco
    mysqli_set_charset($con, "utf8");
    
    $r = $senha == $confirmasenha;

    $sql = "INSERT INTO cadastro VALUES('{$nome}', '{$email}', '{$senha}', '{$telefone}', '{$celular}', '{$datadenascimento}', '{$cep}', '{$rua}', '{$numero}', '{$complemento}', '{$bairro}', '{$cidade}', '{$uf}')";
    
    if($r){
        if(mysqli_query($con, $sql)){
        echo "Gravado com sucesso";
        } else {
            echo "Erro ao gravar";
        }
    }else{
        echo "Senhas diferentes";
    }

?>