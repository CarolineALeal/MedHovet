<?php

	require "projeto_medhovet/paciente.model.php";
	require "projeto_medhovet/paciente.service.php";
	require "projeto_medhovet/conexao.php";


	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir' ) {
		$paciente = new Paciente();
		$paciente->__set('nome', $_POST['nome']);
		$paciente->__set('especie', $_POST['especie']);
		$paciente->__set('raca', $_POST['raca']);
		$paciente->__set('idade', $_POST['idade']);
		$paciente->__set('genero', $_POST['genero']);
		$paciente->__set('peso', $_POST['peso']);
		$paciente->__set('altura', $_POST['altura']);
		$paciente->__set('historico_medico', $_POST['historico_medico']);
		$paciente->__set('vacinacao', $_POST['vacinacao']);
		$paciente->__set('proprietario_nome', $_POST['proprietario_nome']);
		$paciente->__set('proprietario_telefone', $_POST['proprietario_telefone']);
		$paciente->__set('proprietario_endereco', $_POST['proprietario_endereco']);
		$paciente->__set('observacoes_adicionais', $_POST['observacoes_adicionais']);
		$paciente->__set('veterinario_responsavel', $_POST['veterinario_responsavel']);
		$paciente->__set('diagnostico', $_POST['diagnostico']);
		$paciente->__set('plano_tratamento', $_POST['plano_tratamento']);
		$paciente->__set('custos', $_POST['custos']);
		$paciente->__set('forma_pagamento', $_POST['forma_pagamento']);
		$paciente->__set('medicamentos_prescritos', $_POST['medicamentos_prescritos']);

		$conexao = new Conexao();

		$pacienteService = new pacienteService($conexao, $paciente);
		$pacienteService->inserir();

		header('Location: novo_paciente.php?inclusao=1');
	
	} else if($acao == 'recuperar') {
		
		$paciente = new Paciente();
		$conexao = new Conexao();

		$pacienteService = new PacienteService($conexao, $paciente);
		$pacientes = $pacienteService->recuperar();
	
	} else if($acao == 'atualizar') {

		$paciente = new Paciente();
		$paciente->__set('id', $_POST['id'])
			->__set('nome', $_POST['nome']);

		$conexao = new Conexao();

		$pacienteService = new PacienteService($conexao, $paciente);
		if($pacienteService->atualizar()) {
			
			if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
				header('location: index.php');	
			} else {
				header('location: todos_pacientes.php');
			}
		}


	} else if($acao == 'remover') {

		$paciente = new Paciente();
		$paciente->__set('id', $_GET['id']);

		$conexao = new Conexao();

		$pacienteService = new PacienteService($conexao, $paciente);
		$pacienteService->remover();

		if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
			header('location: index.php');	
		} else {
			header('location: todos_pacientes.php');
		}
	
	} 

?>