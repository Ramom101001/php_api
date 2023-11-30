<?php

class Produto {
    private $descricao = '';
    private $estoque = 0;
    private $precoCompra = 0.00;
    private $markup = 0.00;
    private static $instancias = 0;

    public function __construct(
        $descricao = '',
        $estoque = 0,
        $precoCompra = 0.00,
        $markup = 0.00
    ) {
        $this->setDescricao( $descricao );
        $this->setEstoque( $estoque );
        $this->setPrecoCompra( $precoCompra );
        $this->setMarkup( $markup );
        self::$instancias++;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao( $valor ) {
        $this->descricao = $valor;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque( $valor ) {
        $this->estoque = $valor;
    }

    public function getPrecoCompra() {
        return $this->precoCompra;
    }

    public function setPrecoCompra( $valor ) {
        $this->precoCompra = $valor;
    }

    public function getMarkup() {
        return $this->markup;
    }

    public function setMarkup( $valor ) {
        $this->markup = $valor;
    }

    public function precoVenda() {
        return $this->getPrecoCompra() +
            ( $this->getPrecoCompra() * ( $this->getMarkup() / 100 ) );
    }

    public static function instancias() {
        return self::$instancias;
    }

}

// $p1 = new Produto();
// echo Produto::instancias(), PHP_EOL;
// $p2 = new Produto();
// echo Produto::instancias(), PHP_EOL;

// $p2->setPrecoCompra( 10.00 );
// $p2->setMarkup( 10.00 );
// echo $p2->precoVenda();