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
				<h5>Paciente cadastrado com sucesso!</h5>
			</div>
		<?php } ?>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<!-- <li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li> -->
						<li class="list-group-item active"><a href="#">Novo Paciente</a></li>
						<li class="list-group-item"><a href="todos_pacientes.php">Pacientes</a></li>
						<li class="list-group-item"><a href="tela_inicial.php">Tela Inicial</a></li>
					</ul>
				</div>

                <div class="col-md-9">
    <div class="container pagina">
        <div class="row">
            <div class="col">
                <h4>Novo Paciente</h4>
                <hr />
                <form method="post" action="paciente_controller.php?acao=inserir">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Nome:</label>
                                    <input type="text" class="form-control" name="nome">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Especie:</label>
                                    <input type="text" class="form-control" name="especie">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label>Raça:</label>
                                    <input type="text" class="form-control" name="raca">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Idade:</label>
										<input type="text" class="form-control" name="idade">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Genêro:</label>
										<input type="text" class="form-control" name="genero">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Peso:</label>
										<input type="text" class="form-control" name="peso">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Altura:</label>
										<input type="text" class="form-control" name="altura">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Historico Médico:</label>
										<input type="text" class="form-control" name="historico_medico">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Vacinação:</label>
										<input type="text" class="form-control" name="vacinacao">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Nome do Proprietario:</label>
										<input type="text" class="form-control" name="proprietario_nome">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Telefone do Proprietario:</label>
										<input type="text" class="form-control" name="proprietario_telefone">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Endereço do Proprietario:</label>
										<input type="text" class="form-control" name="proprietario_endereco">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Veterinário Responsável:</label>
										<input type="text" class="form-control" name="veterinario_responsavel">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Diagnóstico:</label>
										<input type="text" class="form-control" name="diagnostico">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Plano de tratamento:</label>
										<input type="text" class="form-control" name="plano_tratamento">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Custos:</label>
										<input type="text" class="form-control" name="custos">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Forma de Pagamento:</label>
										<input type="text" class="form-control" name="forma_pagamento">
									</div>
                                </div>
                                <div class="col-xs-12 col-md-4">
				    	            <div class="form-group">
										<label>Medicamentos Prescritos:</label>
										<input type="text" class="form-control" name="medicamentos_prescritos">
									</div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label id='lab_descricao'>Observações (<span class="deslimite">0</span>/200)</label>
                                        <textarea id="observacoes_adicionais" name="observacoes_adicionais" rows="10" aria-hidden="true" class="form-control validate" maxlength="200" placeholder="Digite a observação..." style="resize:none;background: RGBA(0, 0, 0, 0.16);border-radius:1rem;box-shadow: 2px 2px 2px 2px RGBA(0, 0, 0, 0.3);border-style:none;"></textarea>
                                    </div>
				                </div>
                        </div>
                                <div>
									<button class="btn btn-success">Cadastrar</button>
                                </div>
								</form>
							</div>
						</div>
					</div>
				</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

			</div>
		</div>
	</body>
</html>