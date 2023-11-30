<?php
require_once 'Produto.php';

final class ProdutoTributado extends Produto {

    private $imposto = 0.00;

    public function __construct(
        $descricao = '',
        $estoque = 0,
        $precoCompra = 0.00,
        $markup = 0.00,
        $imposto = 0.00
    ) {
        parent::__construct( $descricao, $estoque, $precoCompra, $markup );
        $this->setImposto( $imposto );
    }

    public function getImposto() {
        return $this->imposto;
    }

    public function setImposto( $valor ) {
        $this->imposto = $valor;
    }

    public function precoVenda() {
        $precoVenda = parent::precoVenda();
        return $precoVenda +
            ( $precoVenda * ( $this->getImposto() / 100 ) );
    }

}

// $pt = new ProdutoTributado( '', 0, 10.00, 10.00, 10.00 );
// echo $pt->precoVenda();