<?php

	require "projeto_medhovet/estoque.model.php";
	require "projeto_medhovet/estoque.service.php";
	require "projeto_medhovet/conexao.php";


	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir' ) {
		$estoque = new Estoque();
		$estoque->__set('item', $_POST['item']);
		$estoque->__set('local', $_POST['local']);
		$estoque->__set('quantidade', $_POST['quantidade']);
		$estoque->__set('validade', $_POST['validade']);
		$estoque->__set('unidade', $_POST['unidade']);

		$conexao = new Conexao();

		$estoqueService = new estoqueService($conexao, $estoque);
		$estoqueService->inserir();

		header('Location: novo_estoque.php?inclusao=1');
	
	} else if($acao == 'recuperar') {
		
		$estoque = new Estoque();
		$conexao = new Conexao();

		$estoqueService = new EstoqueService($conexao, $estoque);
		$estoques = $estoqueService->recuperar();
	
	} else if ($acao == 'atualizar') {

		$estoque = new Estoque();
		$estoque->__set('id', $_POST['id']);
		$estoque->__set('item', $_POST['item']);
		$estoque->__set('local', $_POST['local']);
		$estoque->__set('quantidade', $_POST['quantidade']);
		$estoque->__set('validade', $_POST['validade']);
		$estoque->__set('unidade', $_POST['unidade']);
	
		$conexao = new Conexao();
	
		$estoqueService = new EstoqueService($conexao, $estoque);
		if($estoqueService->atualizar()) {
			header('Location: atualizar_estoque.php?atualizacao=1');
		} else {
			echo "Erro ao atualizar o item.";
		}
	
	} else if($acao == 'remover') {

		$estoque = new Estoque();
		$estoque->__set('id', $_GET['id']);
		$conexao = new Conexao();

		$estoqueService = new EstoqueService($conexao, $estoque);
		$estoqueService->remover();

		if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
			header('location: index.php');	
		} else {
			header('location: todos_estoques.php');
		}
	
	} 

?>