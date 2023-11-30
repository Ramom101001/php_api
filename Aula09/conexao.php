<?php
function conectar() {
    return new PDO(
        'mysql:dbname=exemplo;host=localhost;charset=utf8',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
}

// $pdo = conectar();
// $ps = $pdo->prepare(
//     'SELECT id, descricao, feita FROM tarefa' );
// // $ps->setFetchMode( PDO::FETCH_ASSOC );
// $ps->execute();

// $resultado = $ps->fetchAll();
// print_r( $resultado );


?>