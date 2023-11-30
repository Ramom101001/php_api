<?php
require_once '01.php'; // inverter
function palindromos( $texto1, $texto2 ) {
    return mb_strlen( $texto1 ) ===
        mb_strlen( inverter( $texto2 ) );
}

$frase = 'Socorram me em Marrocos';
echo palindromos( $frase, $frase ) ? 'Sim' : 'Não';
?>