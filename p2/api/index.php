<?php
require_once 'src/operacoes.php';
require_once 'RepositorioFornecedor.php';

$repositorio = new RepositorioException(conectar());

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'GET' && preg_match('/^\/fornecedores\/?$/i', $url)) {
    $filtro = isset($_GET['filtro']) ? $_GET['filtro'] : '';
    retornarEmJson($repositorio->todos($filtro));
} elseif ($metodo === 'POST' && preg_match('/^\/fornecedores\/?$/i', $url)) {
    cadastrarFornecedor($_POST, $repositorio);
} elseif ($metodo === 'PUT' && preg_match('/^\/fornecedores\/\d+\/?$/i', $url)) {
    $id = intval(basename($url));
    $dados = file_get_contents('php://input');
    atualizarFornecedor($id, $dados, $repositorio);
} elseif ($metodo === 'DELETE' && preg_match('/^\/fornecedores\/\S+\/?$/i', $url)) {
    $idOuCodigo = basename($url);
    removerFornecedor($idOuCodigo, $repositorio);
} else {
    http_response_code(405); // Método não permitido
}
?>