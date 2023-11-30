<?php
$bebidas = [ 'Guaraná Friburgo', 'Coca-cola', 'Pepsi', 'Guaraná Jesus' ];

for ( $i = 0, $max = count( $bebidas ); $i < $max; $i++ ) {
    echo $i, ' => ', $bebidas[ $i ], PHP_EOL;
}
?>