<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == "etec" && $senha == "informática") {
    echo "Login e senha certos!";
} else {
    echo "Login ou senha errado!.";
}
?>