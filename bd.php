<?php
$conexao = Null;
function obterConexao(){
	global $conexao;
	if ($conexao == Null){
		$conexao = mysqli_connect("localhost", "root", "aluno", "arquivo");
	}
	return $conexao;
}

function salvarFuncionario(string $nome, string $foto_end){
    $conexao = obterConexao();

	$comandoSQL = "INSERT INTO FUNCIONARIO (NOME, FOTO_ENDERECO) VALUES (?, ?)";
	$stmt = mysqli_prepare($conexao, $comandoSQL);
	mysqli_stmt_bind_param($stmt, "ss", $nome, $foto_end);
	mysqli_stmt_execute($stmt);
}

function pesquisarTodosFuncionarios() {
    $conexao = obterConexao();
    $comandoSQL = "SELECT * FROM FUNCIONARIO";
                    
    $query = mysqli_query($conexao, $comandoSQL);
    $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $resultado;
}