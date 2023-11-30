<?php
namespace acme;

class Fornecedor {
    public int $id = 0;
    public string $codigo = '';
    public string $nome = '';
    public string $cnpj = '';
    public string $email = '';
    public string $telefone = '';

    public function __construct(array $dados = []) {
        $this->id = isset($dados['id']) ? (int)$dados['id'] : null;
        $this->codigo = $this->valor($dados, 'codigo', '');
        $this->nome = $this->valor($dados, 'nome', '');
        $this->cnpj = $this->valor($dados, 'cnpj', '');
        $this->email = $this->valor($dados, 'email', '');
        $this->telefone = $this->valor($dados, 'telefone', '');
    }

    private function valor(array $a, $chave, $default) {
        return htmlspecialchars(isset($a[$chave]) ? $a[$chave] : $default);
    }
}