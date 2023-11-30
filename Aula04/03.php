<?php
$numero = readline( 'Digite um número: ' );
$codigo = str_pad( $numero, 6, '0', STR_PAD_LEFT );
echo 'O código com 6 caracteres é: ', $codigo, PHP_EOL;
echo str_repeat( '_', 50 ), PHP_EOL;
echo str_pad( '=[PHP]=', 50, '-', STR_PAD_BOTH ), PHP_EOL;
?>
