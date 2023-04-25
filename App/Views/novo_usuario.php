<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MedHovet</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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

		<?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Usuário cadastrado com sucesso!</h5>
			</div>
		<?php } ?>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<!-- <li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li> -->
						<li class="list-group-item active"><a href="#">Novo Usuário</a></li>
						<li class="list-group-item"><a href="todos_usuarios.php">Usuários</a></li>
						<li class="list-group-item"><a href="tela_inicial.php">Tela Inicial</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
							<div class="col">
								<h4>Novo Usuário</h4>
								<hr />
								<form method="post" action="usuario_controller.php?acao=inserir">
								<div class="row">
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<label>Nome:</label>
										<input type="text" class="form-control" name="usuario">
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<label>E-mail:</label>
										<input type="text" class="form-control" name="email">
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<label>Senha:</label>
										<input type="password" class="form-control" name="senha">
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<label>CPF:</label>
										<input type="text" class="form-control" name="cpf">
									</div>
								</div>
								<div class="col-xs-12 col-md-4">
									<div class="form-group">
										<label>Cargo:</label>
										<input type="text" class="form-control" name="cargo">
									</div>
								</div>
								</div>
									<button class="btn btn-success">Cadastrar</button>
								</form>
							</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>