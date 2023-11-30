<?php
const OPCAO_SAIR = '0';
const OPCAO_LISTAR = '1';
const OPCAO_CADASTRAR = '2';
const OPCAO_REMOVER = '3';
const OPCAO_ALTERAR = '4';

function listar( $frutas ) {
    echo 'FRUTAS', PHP_EOL;
    print_r( $frutas );
}

function cadastrar( &$frutas ) {
    $fruta = readline( 'Fruta: ' );
    // array_unshift( $frutas, $fruta );
    // array_push( $frutas, $fruta );
    $frutas []= $fruta;
}

function remover( &$frutas ) {
    $fruta = readline( 'Fruta: ' );
    $indice = array_search( $fruta, $frutas );
    if ( $indice === false ) {
        echo 'Não encontrado.';
        return;
    }
    unset( $frutas[ $indice ] );
}

function alterar( &$frutas ) {
    $fruta = readline( 'Fruta existente: ' );
    $indice = array_search( $fruta, $frutas );
    if ( $indice === false ) {
        echo 'Não encontrado.';
        return;
    }
    $nova = readline( 'Nova fruta: ' );
    $frutas[ $indice ] = $nova;
}

$frutas = [];
do {
    echo 'MENU', PHP_EOL;
    echo '0) Sair', PHP_EOL;
    echo '1) Listar', PHP_EOL;
    echo '2) Cadastrar', PHP_EOL;
    echo '3) Remover', PHP_EOL;
    echo '4) Alterar', PHP_EOL;
    $opcao = readline( 'Opção: ' );
    switch ( $opcao ) {
        case OPCAO_LISTAR: listar( $frutas ); break;
        case OPCAO_CADASTRAR: cadastrar( $frutas ); break;
        case OPCAO_REMOVER: remover( $frutas ); break;
        case OPCAO_ALTERAR: alterar( $frutas ); break;
    }
} while ( $opcao != OPCAO_SAIR );

?>
