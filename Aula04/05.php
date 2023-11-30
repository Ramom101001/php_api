<?php
$frase = readline( 'Digite uma frase:' );
$termo = readline( 'Digite um termo: ' );
$posicao = mb_strpos( $frase, $termo ); // Ou mb_stripos()
if ( $posicao === false ) {
    echo 'Não encontrou.';
} else {
    echo 'Encontrado na posição ', $posicao;
    echo PHP_EOL, 'Obtendo do trecho em diante: ';
    $pedaco = mb_substr( $frase, $posicao );
    echo $pedaco;
}
?>