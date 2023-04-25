<?php

$acao = 'recuperar';
require 'usuario_controller.php';


?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MedHovet</title>

	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<script>
		function editar(id, txt_usuario) {

			//criar um form de edição
			let form = document.createElement('form')
			form.action = 'usuario_controller.php?acao=atualizar'
			form.method = 'post'
			form.className = 'row'

			//criar um input para entrada do texto
			let inputUsuario = document.createElement('input')
			inputUsuario.type = 'text'
			inputUsuario.name = 'usuario'
			inputUsuario.className = 'col-9 form-control'
			inputUsuario.value = txt_usuario

			//criar um input hidden para guardar o id da tarefa
			let inputId = document.createElement('input')
			inputId.type = 'hidden'
			inputId.name = 'id'
			inputId.value = id

			//criar um button para envio do form
			let button = document.createElement('button')
			button.type = 'submit'
			button.className = 'col-3 btn btn-info'
			button.innerHTML = 'Atualizar'

			//incluir inputTarefa no form
			form.appendChild(inputUsuario)

			//incluir inputId no form
			form.appendChild(inputId)

			//incluir button no form
			form.appendChild(button)

			//teste
			//console.log(form)

			//selecionar a div tarefa
			let usuario = document.getElementById('usuario_' + id)

			//limpar o texto da tarefa para inclusão do form
			usuario.innerHTML = ''

			//incluir form na página
			usuario.insertBefore(form, tarefa[0])

		}

		function remover(id) {
			location.href = 'todos_usuarios.php?acao=remover&id=' + id;
		}

		function marcarRealizada(id) {
			location.href = 'todos_usuarios.php?acao=marcarRealizada&id=' + id;
		}
	</script>
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
				MedHovet
			</a>
		</div>
	</nav>

	<div class="container app">
		<div class="row">
			<div class="col-sm-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="novo_usuario.php">Novo Usuário</a></li>
					<li class="list-group-item active"><a href="#">Usuários</a></li>
					<li class="list-group-item"><a href="tela_inicial.php">Tela Inicial</a></li>
				</ul>
			</div>

			<div class="col-sm-9">
				<div class="container pagina">
					<div class="row">
						<div class="col">
							<h4>Usuários</h4>
							<hr />
							<table class="table table">
								<thead>
									<thead>
										<tr>
											<th scope="col">ID</th>
											<th scope="col">Nome</th>
											<th scope="col">Email</th>
											<th scope="col">CPF</th>
											<th scope="col">Cargo</th>
											<th scope="col">Opções</th>
										</tr>
									</thead>
								<tbody>
									<?php foreach ($usuarios as $indice => $usuario) : ?>
										<tr>
											<th><?= $usuario->id ?></th>
											<td><?= $usuario->usuario ?></td>
											<td><?= $usuario->email ?></td>
											<td><?= $usuario->cpf ?></td>
											<td><?= $usuario->cargo ?></td>
											<td>
												<div class="d-flex">
													<i class="fas fa-trash-alt fa-lg text-danger mx-2" onclick="remover(<?= $usuario->id ?>)"></i>
													<i class="fas fa-edit fa-lg text-info mx-2" onclick="editar(<?= $usuario->id ?>, '<?= $usuario->usuario ?>')"></i>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
</body>

</div>
</div>
</div>
</div>
</div>
</div>
</body>

</html>