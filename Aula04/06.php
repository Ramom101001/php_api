<?php
$frase = readline( 'Frase: ' );
echo mb_strtoupper( $frase ), PHP_EOL;
echo mb_strtolower( $frase ), PHP_EOL;
echo mb_convert_case( $frase, MB_CASE_TITLE ), PHP_EOL;
// Ver outros modos em:
// https://www.php.net/manual/pt_BR/function.mb-convert-case.php
?>