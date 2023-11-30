<?php
$produtos = [ 'Banana', 'Maçã', 'Abacate' ];
// foreach ( $produtos as $valor )
foreach ( $produtos as $indice => $valor ) {
    echo $indice, ' => ', $valor, PHP_EOL;
}
?>