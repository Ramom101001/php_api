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

function remover( &$produtos ) {
    $codigoOuDescricao = readline( 'Código ou Descrição: ' );
    $indiceEncontrado = -1;
    foreach ( $produtos as $indice => $p ) {
        if ( $codigoOuDescricao == $p[ 'codigo' ] ||
            $codigoOuDescricao == $p[ 'descricao' ]
        ) {
            $indiceEncontrado = $indice;
            unset( $produtos[ $indice ] );
            echo 'Removido da posição ', $indice, PHP_EOL;
            break;
        }
    }
    if ( $indiceEncontrado < 0 ) {
        echo 'Não encontrado.';
    }
}

const OPCAO_SAIR = '0';
const OPCAO_PESQUISAR = '1';
const OPCAO_LISTAR = '2';
const OPCAO_CADASTRAR = '3';
const OPCAO_REMOVER = '4';

function menu( $produtos ) {
    do {
        echo 'MENU:', PHP_EOL;
        echo '0) Sair', PHP_EOL;
        echo '1) Pesquisar', PHP_EOL;
        echo '2) Listar', PHP_EOL;
        echo '3) Cadastrar', PHP_EOL;
        echo '4) Remover', PHP_EOL;
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
            case OPCAO_REMOVER:
                remover( $produtos );
                break;
        }
    } while ( $opcao != OPCAO_SAIR );
}

menu( $produtos );
?>
