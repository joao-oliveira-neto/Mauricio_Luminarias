<?php
    
    $senhaantiga = $_POST["senhaantiga"];
    $senhanova = sha1($_POST["senhanova"]);
    $confirmasenhanova = sha1($_POST["confirmasenhanova"]);
    $btnredefinir = $_POST["btnredefinir"];

    $con = mysqli_connect("localhost", "root", "", "mauricioluminarias");
    
    //Guarda em $r verdadeiro ou falso pro caso das senhas serem iguais ou diferentes
    $r = $senhanova == $confirmasenhanova;
    
    if (isset($btnredefinir)) {
        
        $verifica = mysqli_query($con, "SELECT * FROM cadastro WHERE senha = '$senhaantiga'") or die("erro ao selecionar");
        
        //se a variável $verifica foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico, o seu valor será igual a 1, então é gerada uma chave e enviado o email de redefinição para o usuário
        if (mysqli_num_rows($verifica) == 1){
        
            //Verifica se as senhas são iguais
            if($r){

                //Grava a nova senha no banco de dados
                $alterasenha = "UPDATE cadastro SET senha = '$senhanova' WHERE senha = '$senhaantiga'";

                //se a variável $alterasenha foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico, o seu valor será igual a 1, então é exibido um alerta com a mensagem que a senha foi redefinida.
                if(mysqli_query($con, $alterasenha)){

                    echo"<script language='javascript' type='text/javascript'>
                    alert('Senha redefinida com sucesso');window.location
                    .href='http://localhost/MauricioLuminarias/login.php';</script>";

                //se a variável $alterasenha não foi bem sucedida, ou seja se ela não estiver encontrado algum registro idêntico, o seu valor será igual a 0, então é exibido um alerta informando que o houve um erro ao redefinir a senha
                }else{

                    echo"<script language='javascript' type='text/javascript'>
                    alert('Erro ao redefinir a senha');</script>";
                    die();
                }
            } else{

                echo"<script language='javascript' type='text/javascript'>
                alert('Senhas diferentes');</script>";

            }
            
        } else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Senha antiga é diferente');</script>";  
        }
        
    }



?>