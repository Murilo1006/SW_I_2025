<?php
    include_once 'Pessoa.class.php';

    //Instanciar um objeto (Nova pessoa!!!)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;


    //Atribuir alguns valores
    $pessoa1->Nome = 'João';
    $pessoa1->Peso = 85.3;
    $pessoa1->Altura = 1.82;

    $pessoa2->Nome = 'Gael';
    $pessoa2->Peso = 85.3;
    $pessoa2->Altura = 1.82;
    
    //Chamando um método de classe pessoa
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();
?>