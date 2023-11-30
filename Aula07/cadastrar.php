<?php
require_once 'conexao.php';
$pdo = null;
echo 'CADASTRO', PHP_EOL;
$descricao = readline( 'Descrição: ' );
$feita = readline( 'Feita (S/N): ' ) === 'S' ? 1 : 0;
try {
    $pdo = conectar();
    // $ps = $pdo->prepare( 'INSERT INTO tarefa ( descricao, feita )
    //     VALUES ( ?, ? )' );
    // $ps->execute( [ $descricao, $feita ] );
    $ps = $pdo->prepare( 'INSERT INTO tarefa ( descricao, feita )
        VALUES ( :descricao, :feita )' );
    $ps->execute( [
        'descricao' => $descricao, 'feita' => $feita ] );
    echo 'Inserido com sucesso.';
} catch ( PDOException $e ) {
    die( 'Erro: ' . $e->getMessage() );
}
?>