<?php

	require "projeto_medhovet/usuario.model.php";
	require "projeto_medhovet/usuario.service.php";
	require "projeto_medhovet/conexao.php";


	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir' ) {
		$usuario = new Usuario();
		$usuario->__set('usuario', $_POST['usuario']);
		$usuario->__set('email', $_POST['email']);
		$usuario->__set('senha', $_POST['senha']);
		$usuario->__set('cpf', $_POST['cpf']);
		$usuario->__set('cargo', $_POST['cargo']);

		$conexao = new Conexao();

		$usuarioService = new usuarioService($conexao, $usuario);
		$usuarioService->inserir();

		header('Location: novo_usuario.php?inclusao=1');
	
	} else if($acao == 'recuperar') {
		
		$usuario = new Usuario();
		$conexao = new Conexao();

		$usuarioService = new UsuarioService($conexao, $usuario);
		$usuarios = $usuarioService->recuperar();
	
	} else if($acao == 'atualizar') {

		$usuario = new Usuario();
		$usuario->__set('id', $_POST['id'])
			->__set('usuario', $_POST['usuario']);

		$conexao = new Conexao();

		$usuarioService = new UsuarioService($conexao, $usuario);
		if($usuarioService->atualizar()) {
			
			if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
				header('location: index.php');	
			} else {
				header('location: todos_usuarios.php');
			}
		}


	} else if($acao == 'remover') {

		$usuario = new Usuario();
		$usuario->__set('id', $_GET['id']);

		$conexao = new Conexao();

		$usuarioService = new UsuarioService($conexao, $usuario);
		$usuarioService->remover();

		if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
			header('location: index.php');	
		} else {
			header('location: todos_usuarios.php');
		}
	
	} 

?>