<?php
$conteudo = readline( 'Digite um texto: ' );
$hash = crc32( $conteudo );
echo 'CRC-32: ', $hash, ' ', mb_strlen( $hash ), ' caracteres.', PHP_EOL;
$hash = md5( $conteudo );
echo 'MD-5  : ', $hash, ' ', mb_strlen( $hash ), ' caracteres.', PHP_EOL;
$hash = sha1( $conteudo );
echo 'SHA-1: ', $hash, ' ', mb_strlen( $hash ), ' caracteres.', PHP_EOL;
$hash = hash( 'sha256', $conteudo );
echo 'SHA-256: ', $hash, ' ', mb_strlen( $hash ), ' caracteres.', PHP_EOL;
?>