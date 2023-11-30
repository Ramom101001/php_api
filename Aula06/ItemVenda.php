<?php
require_once 'Produto.php';

class ItemVenda {

    private $quantidade = 0;
    private $produto = null;

    public function __construct( $quantidade, Produto $produto ) {
        $this->setQuantidade( $quantidade );
        $this->setProduto( $produto );
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade( $valor ) {
        $this->quantidade = $valor;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setProduto( Produto $p ) {
        $this->produto = $p;
    }

    public function subtotal() {
        return $this->getProduto()->precoVenda()
            * $this->getQuantidade();
    }
}

// $p = new Produto( 'Guaraná', 10, 10.00, 10.00 );
// $iv = new ItemVenda( 5, $p );
// echo $iv->subtotal();