<?php
function inverter($texto){
    $invertida = '';
    for($i = mb_strlen($texto) - 1; $i >= 0; $i-- ) {
        $invertida .= $texto[$i];
    }   
    return $invertida;
}

?>