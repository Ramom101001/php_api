<?php
function inverter( $texto ) {
    $nova = '';
    for ( $i = mb_strlen( $texto ) - 1; $i >= 0; $i-- ) {
        $nova .= $texto[ $i ];
    }
    return $nova;
}
// echo inverter( 'CEFET' );
?>