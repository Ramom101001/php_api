<?php
$pdo = null;
try {
    $pdo = new PDO( // PDOException
        'mysql:dbname=aula06;host=localhost;charset=utf8',
        'root',
        '',
        [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
    );
    echo 'Conectado', PHP_EOL;

    // EXERCICIO: modifique o código abaixo para mostrar
    // a descrição do produto e seu inventário (preço de
    // compra multiplicado pelo estoque).

    $ps = $pdo->query( 'SELECT descricao, preco_compra * estoque AS inventario FROM produto' );
    foreach ( $ps as $produto ) {
        echo $produto[ 'descricao' ], ' ', $produto[ 'inventario' ], PHP_EOL;
    }

    // EXERCICIO 2: Exiba o somatório do inventário dos
    // produtos após a listagem.
    $ps = $pdo->query( 'SELECT SUM( preco_compra * estoque ) AS inventario FROM produto' );
    foreach ( $ps as $produto ) {
        echo 'Total: ', $produto[ 'inventario' ], PHP_EOL;
    }
} catch ( Exception $e ) {
    die( 'Erro: ' . $e->getMessage() );
}

?>