<?php
require_once 'maior-de-dois.php';

function maiorDeTres( $n1, $n2, $n3 ) {
    return maiorDeDois( maiorDeDois( $n1, $n2 ), $n3 );
    // $maiorDosPrimeiros = maiorDeDois( $n1, $n2 );
    // return $maiorDosPrimeiros > $n3 ? $maiorDosPrimeiros : $n3;
}

?>