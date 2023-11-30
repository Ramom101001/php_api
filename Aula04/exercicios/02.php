<?php
// Ana de Souza -> de Souza, Ana
function sobrenomePrimeiro( $nomeCompleto ) {
    $indice = mb_strpos( $nomeCompleto, ' ' );
    if ( $indice === false ) { // Não encontrou
        return $nomeCompleto;
    }
    $primeiroNome = mb_substr( $nomeCompleto, 0, $indice );
    $restante = mb_substr( $nomeCompleto, $indice + 1 );
    return $restante . ', ' . $primeiroNome;
}
// echo sobrenomePrimeiro( 'Ana da Silva' );
?>