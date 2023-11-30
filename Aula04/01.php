<?php
$nome = readline( 'Digite seu nome: ' );
// empty() retorna true se vazia
echo empty( $nome ) ? 'Vazio' : 'Não vazio', PHP_EOL;
// mb_strlen() retorna o comprimento da string
echo 'Tamanho: ', mb_strlen( $nome ), PHP_EOL;
// trim() remove os espaços e tabulações ao redor da string
echo 'Tam. sem espaços ao redor: ', mb_strlen( trim( $nome ) ), PHP_EOL;
?>