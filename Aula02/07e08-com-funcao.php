<?php

function remover( &$frutas, $nome ) {
    $encontrado = false;
    foreach ( $frutas as $indice => $valor ) {
        if ( $nome == $valor ) {
            $encontrado = true;
            unset( $frutas[ $indice ] );
            echo 'Removido do índice\n', $indice;
            break;
        }
    }
    return $encontrado;
}

$frutas = [ 'Banana', 'Maçã', 'Abacate', 'Abacaxi', 'Pêra' ];
$nome = readline( 'Fruta a remover: ' );
$encontrado = remover( $frutas, $nome );
// if ( $encontrado == false ) {
if ( ! $encontrado ) {
    echo 'Não encontrado';
}
print_r( $frutas );
?>