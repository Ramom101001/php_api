<?php

use acme\Fornecedor;

require_once 'Fornecedor';
require_once 'RepositorioFornecedor';

require_once 'conexao.php';
require_once 'RepositorioFornecedor.php';

function validarDadosFornecedor($dados) {
    $erros = [];

    // Verificar limites mínimos e máximos
    $limites = [
        'nome' => ['min' => 1, 'max' => 100],
        'codigo' => ['min' => 1, 'max' => 8],
        'cnpj' => ['min' => 14, 'max' => 14],
        'email' => ['min' => 1, 'max' => 60],
        'telefone' => ['min' => 11, 'max' => 11],
    ];

    foreach ($limites as $campo => $info) {
        if (isset($dados[$campo])) {
            $tamanho = strlen($dados[$campo]);
            if ($tamanho < $info['min'] || $tamanho > $info['max']) {
                $erros[] = "O campo '{$campo}' deve ter entre {$info['min']} e {$info['max']} caracteres.";
            }
        }
    }
    // Validar o id
    if (isset($dados['id']) && (!ctype_digit($dados['id']) || intval($dados['id']) < 0)) {
        $erros[] = "O campo 'id' deve ser um número inteiro não negativo.";
    }
    // Validar o formato do código (duas letras maiúsculas, traço, dois números, ponto, duas letras minúsculas)
    if (isset($dados['codigo']) && !preg_match('/^[A-Z]{2}-\d{2}\.[a-z]{2}$/i', $dados['codigo'])) {
        $erros[] = "O campo 'codigo' deve ter o formato correto (ex. 'AB-12.cd').";
    }
    // Validar o CNPJ e telefone para conter apenas dígitos
    if (isset($dados['cnpj']) && !ctype_digit($dados['cnpj'])) {
        $erros[] = "O CNPJ deve conter apenas números.";
    }
    if (isset($dados['telefone']) && !ctype_digit($dados['telefone'])) {
        $erros[] = "O telefone deve conter apenas números.";
    }

    return $erros;
}

function retornarEmJson($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
}

function cadastrarFornecedor($dados, $repositorio) {
    $erros = validarDadosFornecedor($dados);

    if (!empty($erros)) {
        http_response_code(400); // Bad Request
        header('Content-Type: application/json');
        echo json_encode(['errors' => $erros]);
        exit;
    }

    $fornecedor = new Fornecedor($dados);
    $repositorio->cadastrar($fornecedor);
    http_response_code(201); // Criado
    echo 'Cadastrado';
}

function atualizarFornecedor($id, $dados, $repositorio) {
    validarDadosFornecedor(json_decode($dados, true));

    $fornecedor = new Fornecedor(json_decode($dados, true));
    $fornecedor->id = $id;

    $repositorio->atualizar($fornecedor);
    http_response_code(200); // OK
}

function removerFornecedor($idOuCodigo, $repositorio) {
    $repositorio->remover($idOuCodigo);
    http_response_code(204); // Sem conteúdo
}


?>