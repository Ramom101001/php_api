<?php
$frutas = [ 'Banana', 'Maçã', 'Abacate', 'Abacaxi', 'Pêra' ];
$nome = readline( 'Fruta: ' );
$encontrado = false;
foreach ( $frutas as $indice => $valor ) {
    if ( $nome == $valor ) {
        $encontrado = true;
        echo 'Encontrado no índice ', $indice;
        break;
    }
}
// if ( $encontrado == false ) {
if ( ! $encontrado ) {
    echo 'Não encontrado';
}