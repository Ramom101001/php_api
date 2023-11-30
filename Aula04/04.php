<?php
$universidade = 'CEFET Nova Friburgo';
echo $universidade[ 0 ];
echo $universidade[ 1 ];
for ( $i = 2, $max = mb_strlen( $universidade ); $i < $max; $i++ ) {
    echo $universidade[ $i ];
}
echo PHP_EOL, str_repeat( '_', 50 ), PHP_EOL;
foreach ( $universidade as $s ) { // Erro !
    echo $s;
}
?>