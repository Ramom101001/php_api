<?php
require_once 'produtos.php';

$codigoOuDescricao = readline( 'Código ou Descrição: ' );
$achou = false;
foreach ( $produtos as $p ) {
    if ( $codigoOuDescricao == $p[ 'codigo' ] ||
        $codigoOuDescricao == $p[ 'descricao' ]
    ) {
        $achou = true;
        echo 'Preço R$: ', $p['preco'],
            ' Estoque: ', $p['estoque'], PHP_EOL;
        break;
    }
}
if ( ! $achou ) {
    echo 'Produto não encontrado.';
}
?>