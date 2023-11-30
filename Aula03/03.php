<?php
require_once 'produtos.php';

function pesquisar( $produtos ) {
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
}

function listar( $produtos ) {
    $somaEstoque = 0;
    $somaPreco = 0;
    foreach ( $produtos as $p ) {
        $somaEstoque += $p['estoque'];
        $somaPreco += $p['preco'];
        echo 'Código: ', $p['codigo'],
            ' Descrição: ', $p['descricao'],
            ' Preço R$: ', $p['preco'],
            ' Estoque: ', $p['estoque'], PHP_EOL;
    }
    echo str_repeat( '-', 40 ), PHP_EOL;
    echo 'TOTAL - Estoque: ', $somaEstoque,
        ' Preço R$', $somaPreco, PHP_EOL;
}

function solicitarProduto() {
    echo 'PRODUTO', PHP_EOL;
    $codigo = readline( 'Código: ' );
    $descricao = readline( 'Descrição: ' );
    $estoque = intval( readline( 'Estoque: ' ) );
    $preco = floatval( readline( 'Preço: ' ) );
    $p = [
        'codigo' => $codigo,
        'descricao' => $descricao,
        'estoque' => $estoque,
        'preco' => $preco,
    ];
    return $p;
}

function cadastrar( &$produtos ) {
    $p = solicitarProduto();
    $produtos []= $p; // array_push( $produtos, $p );
}

const OPCAO_SAIR = '0';
const OPCAO_PESQUISAR = '1';
const OPCAO_LISTAR = '2';
const OPCAO_CADASTRAR = '3';

function menu( $produtos ) {
    do {
        echo 'MENU:', PHP_EOL;
        echo '0) Sair', PHP_EOL;
        echo '1) Pesquisar', PHP_EOL;
        echo '2) Listar', PHP_EOL;
        echo '3) Cadastrar', PHP_EOL;
        $opcao = readline( 'Opção: ' );
        switch ( $opcao ) {
            case OPCAO_PESQUISAR:
                pesquisar( $produtos );
                break;
            case OPCAO_LISTAR:
                listar( $produtos );
                break;
            case OPCAO_CADASTRAR:
                cadastrar( $produtos );
                break;
        }
    } while ( $opcao != OPCAO_SAIR );
}

menu( $produtos );
?>
