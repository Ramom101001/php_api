<?php
function media( $x, $y, $z ) {
    return ( $x + $y + $z ) / 3;
}

$n1 = readline( 'Número 1: ' );
$n2 = readline( 'Número 2: ' );
$n3 = readline( 'Número 3: ' );
echo 'Média: ', media( $n1, $n2, $n3 );
?>