<?php

use acme\Fornecedor;

require_once 'Fornecedor.php';

class RepositorioException extends \RuntimeException {
    private $pdo = null;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function todos(string $filtro = "") {
        $ps = $this->pdo->prepare('SELECT * FROM fornecedor');
        $ps->setFetchMode(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            'acme\Fornecedor'
        );
        $ps->execute();
        return $ps->fetchAll();
    }

    public function cadastrar(Fornecedor $fornecedor) {
        $ps = $this->pdo->prepare('INSERT INTO fornecedor
            (codigo, nome, cnpj, email, telefone) VALUES
            (:codigo, :nome, :cnpj, :email, :telefone)');
        $ps->execute([
            'codigo'    => $fornecedor->codigo,
            'nome'      => $fornecedor->nome,
            'cnpj'      => $fornecedor->cnpj,
            'email'     => $fornecedor->email,
            'telefone'  => $fornecedor->telefone
        ]);
    }

    public function atualizar(Fornecedor $fornecedor) {
        $ps = $this->pdo->prepare('UPDATE fornecedor SET
            codigo = :codigo, nome = :nome,  
            cnpj = :cnpj, email = :email,
            telefone = :telefone
            WHERE 
            id = :id');
        $ps->execute([
            'codigo'    => $fornecedor->codigo,
            'nome'      => $fornecedor->nome,
            'cnpj'      => $fornecedor->cnpj,
            'email'     => $fornecedor->email,
            'telefone'  => $fornecedor->telefone,
            'id'        => $fornecedor->id
        ]);
    }

    public function remover(string $idOuCodigo) {
        $ps = $this->pdo->prepare('DELETE FROM fornecedor WHERE id = :id OR codigo = :codigo');
        $ps->execute(['id' => $idOuCodigo, 'codigo' => $idOuCodigo]);
        if ($ps->rowCount() < 1) {
            die('Fornecedor não encontrado.');
        }
        echo 'Removido com sucesso: ', $idOuCodigo, '<br />',
            '<a href="fornecedores.php" >Voltar</a>';
    }
}
?>