<?php
require_once 'maior-de-dois.php';
require_once 'maior-de-tres.php';

const OPCAO_MAIOR_DE_DOIS = '1';
const OPCAO_MAIOR_DE_TRES = '2';
const OPCAO_SAIR = '3';

do {
    echo PHP_EOL, 'MENU:', PHP_EOL;
    echo '1) Maior de dois', PHP_EOL;
    echo '2) Maior de três', PHP_EOL;
    echo '3) Sair', PHP_EOL;
    $opcao = readline( 'Opção: ' );
    switch ( $opcao ) {
        case OPCAO_MAIOR_DE_DOIS: {
            $n1 = readline( 'Número 1: ' );
            $n2 = readline( 'Número 2: ' );
            $maior = maiorDeDois( (int) $n1, (int) $n2 );
            echo 'Maior: ', $maior;
            break;
        }
        case OPCAO_MAIOR_DE_TRES: {
            $n1 = readline( 'Número 1: ' );
            $n2 = readline( 'Número 2: ' );
            $n3 = readline( 'Número 3: ' );
            $maior = maiorDeTres( (int) $n1, (int) $n2, (int) $n3 );
            echo 'Maior: ', $maior;
            break;
        }
        // case OPCAO_SAIR: {
        //     die();
        // }
    }
} while ( $opcao != OPCAO_SAIR );


