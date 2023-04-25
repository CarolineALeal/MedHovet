<?php

	require "projeto_medhovet/insumo.model.php";
	require "projeto_medhovet/insumo.service.php";
	require "projeto_medhovet/conexao.php";


	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir' ) {
		$insumo = new Insumo();
		$insumo->__set('insumo', $_POST['insumo']);
		$insumo->__set('unidade', $_POST['n_lote']);
		$insumo->__set('n_lote', $_POST['n_lote']);
		$insumo->__set('dta_fabricacao', $_POST['dta_fabricacao']);
		$insumo->__set('armazenamento', $_POST['armazenamento']);

		$conexao = new Conexao();

		$insumoService = new insumoService($conexao, $insumo);
		$insumoService->inserir();

		header('Location: novo_insumo.php?inclusao=1');
	
	} else if($acao == 'recuperar') {
		
		$insumo = new Insumo();
		$conexao = new Conexao();

		$insumoService = new InsumoService($conexao, $insumo);
		$insumos = $insumoService->recuperar();
	
	} else if ($acao == 'atualizar') {

		$insumo = new Insumo();
		$insumo->__set('id', $_POST['id']);
		$insumo->__set('insumo', $_POST['insumo']);
		$insumo->__set('unidade', $_POST['unidade']);
		$insumo->__set('n_lote', $_POST['n_lote']);
		$insumo->__set('dta_fabricacao', $_POST['dta_fabricacao']);
		$insumo->__set('armazenamento', $_POST['armazenamento']);
	
		$conexao = new Conexao();
	
		$insumoService = new InsumoService($conexao, $insumo);
		if($insumoService->atualizar()) {
			header('Location: atualizar_insumo.php?atualizacao=1');
		} else {
			echo "Erro ao atualizar o insumo.";
		}
	
	}  else if($acao == 'remover') {

		$insumo = new Insumo();
		$insumo->__set('id', $_GET['id']);

		$conexao = new Conexao();

		$insumoService = new InsumoService($conexao, $insumo);
		$insumoService->remover();

		if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
			header('location: index.php');	
		} else {
			header('location: todos_insumos.php');
		}
	
	} 

?>