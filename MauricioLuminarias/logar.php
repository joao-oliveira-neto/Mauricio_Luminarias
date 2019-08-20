<?php

    $email = $_POST["email"];
    $senha = sha1($_POST["senha"]);
    $btnlogar = $_POST["btnlogar"];

    $con = mysqli_connect("localhost", "root", "", "mauricioluminarias");
    
    if(isset($btnlogar)){
           
        $verifica = mysqli_query($con, "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
        
        //se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0
        if(mysqli_num_rows($verifica)==1){
            
            //setcookie("login",$login);
            //header("Location:http://localhost/MauricioLuminarias/inicio.php");
            echo"<script language='javascript' type='text/javascript'>
            alert('Login correto');</script>";
            
        }else{
            
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='http://localhost/MauricioLuminarias/login.php';</script>";
            die();
        }
    }



?>