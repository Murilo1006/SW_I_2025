<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'aluno@email.com' && $senha == '1234'){
            //SEGUE PARA PÁGINA privada.php
            $nome = "Aluno";
            header('Location: privada.php?nome='.$nome);
    }else{
            //SEGUE PARA PÁGINA erro.php
            header('Location: erro.php');

    }
?>