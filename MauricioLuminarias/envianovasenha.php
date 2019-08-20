<?php

    //Função envia email
    function enviaemail($senha, $chave){
        //Envia email com link para redefinir a senha
        require_once "Mail.php";
        
        //Remetente e destinatário
        $from = "luminariasmauricio@gmail.com";
        $to = 'joaodabete@gmail.com';

        $host = "ssl://smtp.gmail.com";
        $port = "465";
        $username = 'luminariasmauricio@gmail.com';
        $password = 'lumi1234';
        
        $contenttype = 'text/html; charset=iso-8859-1;';
        
        //Assunto e corpo do email
        $subject = "Link para redefinição de senha";
        $body = 'Senha nova: '.$senha.' <br>Clique no link a seguir para redefinir sua senha: <a href="http://localhost/MauricioLuminarias/redefinirsenha.php?chave='.$chave.'">http://localhost/MauricioLuminarias/redefinirsenha.php?chave='.$chave.'</a>';

        $headers = array ('From' => $from, 'To' => $to,'Subject' => $subject, 'Content-type' => $contenttype);
        $smtp = Mail::factory('smtp',
        array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

        $mail = $smtp->send($to, $headers, $body);

        //If der erro ao enviar o email, informa o erro, senão, exibe um alerta informando que o email foi enviado com sucesso
        if (PEAR::isError($mail)) {
            echo($mail->getMessage());
        } else {
            echo"<script language='javascript' type='text/javascript'>
            alert('Email enviado');window.location
            .href='http://localhost/MauricioLuminarias/login.php';</script>";
        }
    }
    
    //Gerador de senha
    function geradorsenha($qtyCaraceters = 8){
        //Letras minúsculas embaralhadas
        $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

        //Letras maiúsculas embaralhadas
        $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

        //Números aleatórios
        $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
        $numbers .= 1234567890;

        //Caracteres Especiais
        $specialCharacters = str_shuffle('!@#$%*-');

        //Junta tudo
        $characters = $capitalLetters.$smallLetters.$numbers.$specialCharacters;

        //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
        $password = substr(str_shuffle($characters), 0, $qtyCaraceters);

        //Retorna a senha
        return $password;
    }

    //Gerador de chave
    function geradorchave($qtyCaraceters = 20){
        //Letras minúsculas embaralhadas
        $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

        //Letras maiúsculas embaralhadas
        $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

        //Números aleatórios
        $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
        $numbers .= 1234567890;

        //Junta tudo
        $characters = $capitalLetters.$smallLetters.$numbers;

        //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
        $key = substr(str_shuffle($characters), 0, $qtyCaraceters);

        //Retorna a chave
        return $key;
    }
    
    $email = $_POST["email"];
    $btnenviaremail = $_POST["btnenviaremail"];
    $date = date('Y-m-d H:i:s', time()+30*60);

    $con = mysqli_connect("localhost", "root", "", "mauricioluminarias");
    $conn = mysqli_connect("localhost", "root", "", "link");
    
    if (isset($btnenviaremail)) {
           
        $verifica = mysqli_query($con, "SELECT * FROM cadastro WHERE email = '$email'") or die("erro ao selecionar");
        
        //se a variável $verifica foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico, o seu valor será igual a 1, então é gerada uma chave e enviado o email de redefinição para o usuário
        if (mysqli_num_rows($verifica) == 1){
            //Gera uma chave
            $chave = geradorchave();
            
            //Guarda a senha gerada na função geradorsenha dentro da variável senha
            $senha = geradorsenha();
            
            //Coloca a chave gerada no banco de dados
            mysqli_query($conn, "INSERT INTO expiracao VALUES('{$chave}', '{$date}')") or die("erro ao selecionar");
            
            //Coloca a senha gerada no banco de dados
            
            mysqli_query($con, "UPDATE cadastro SET senha = '$senha' WHERE email = '$email'") or die("erro ao selecionar");
            
            //Chama a função de enviar email passando como parametros a senha e a chave geradas
            enviaemail($senha, $chave);
            
        //se a variável $verifica não foi bem sucedida, ou seja se ela não estiver encontrado algum registro idêntico, o seu valor será igual a 0, então é exibido um alerta informando que o email informado não foi encontrado
        }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Email não encontrado');window.location
            .href='http://localhost/MauricioLuminarias/login.php';</script>";
            die();
        }
    }



?>