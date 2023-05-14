<?php

	require "projeto_medhovet/categoria.model.php";
	require "projeto_medhovet/categoria.service.php";
	require "projeto_medhovet/conexao.php";


	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'recuperar') {
		
		$categoria = new Categoria();
		$conexao = new Conexao();

		$categoriaService = new CategoriaService($conexao, $categoria);
		$categorias = $categoriaService->recuperar();
	
	}

?>