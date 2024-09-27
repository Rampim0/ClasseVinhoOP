<?php

class Vinho{
    private $nome;
    private $tipo;
    private $preco;
    private $safra;

    public function __construct($nome, $tipo, $preco, $safra) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->preco = $preco;
        $this->safra = $safra;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getSafra() {
        return $this->safra;
    }

    public function setSafra($safra) {
        $this->safra = $safra;
    }

    public function mostrarVinho() {
        return "Nome: {$this->nome}, Tipo: {$this->tipo}, Preço: R$ {$this->preco}, Safra: {$this->safra}";
    }

    public function verificarPreco($preco) {
        return $preco < 25;
    }
}

?>
