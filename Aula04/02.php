<?php
$frase = readline( 'Digite uma frase:' );
$trecho = readline( 'Digite um trecho a substituir:' );
$novo = readline( 'Digite pelo quê quer substituir:' );
echo str_ireplace( $trecho, $novo, $frase );
?>