<?php
class Produto {
    // Atributos privados
    private $nome;
    private $preco;
    private $quantidade;

    // Construtor
    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Métodos getters e setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    // Métodos de estoque
    public function adicionarEstoque($qtd) {
        $this->quantidade += $qtd;
    }

    public function removerEstoque($qtd) {
        $this->quantidade -= $qtd;
    }

    // Método para mostrar os detalhes do produto
    public function mostrarDetalhes() {
        echo "Produto: " . $this->nome . "<br>";
        echo "Preço: R$" . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "Quantidade em estoque: " . $this->quantidade . "<br>";
    }
}

// Exemplo de uso
$produto = new Produto("Mouse", 150.00, 10);
$produto->adicionarEstoque(5);
$produto->removerEstoque(3);
$produto->mostrarDetalhes();
?>
