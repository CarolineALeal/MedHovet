<?php

$acao = 'recuperar';
require 'insumo_controller.php';
?>
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

    <?php if (isset($_GET['atualizacao']) && $_GET['atualizacao'] == 1) { ?>
        <div class="bg-success pt-2 text-white d-flex justify-content-center">
            <h5>Insumo atualizado com sucesso!</h5>
        </div>
    <?php } ?>

    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
                    <li class="list-group-item active"><a href="#">Atualizar Insumo</a></li>
                    <li class="list-group-item"><a href="todos_insumos.php">Insumos</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Atualizar Insumo</h4>
                            <hr />
                            <form method="post" action="insumo_controller.php?acao=atualizar">
                                <?php foreach ($insumos as $indice => $insumo) : ?>
                                    <div class="row">
									<div class="col-xs-12 col-md-4">
										<div class="form-group">
											<label>Nome:</label>
											<input type="text" class="form-control" name="insumo" value="<?php echo $insumo->insumo;?>">
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="form-group">
											<label>Unidade:</label>
											<input type="number" class="form-control" name="unidade" value="<?php echo $insumo->unidade;?>">
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="form-group">
											<label>Nº de Lote:</label>
											<input type="number" class="form-control" name="n_lote" value="<?php echo $insumo->n_lote;?>">
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="form-group">
											<label>Data de Fabricação:</label>
											<input type="text" class="form-control" name="dta_fabricacao" value="<?php echo $insumo->dta_fabricacao;?>">
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="form-group">
											<label>Armazenamento:</label>
											<input type="text" class="form-control" name="armazenamento" value="<?php echo $insumo->armazenamento;?>">
										</div>
									</div>
								</div>
                                <?php endforeach; ?>
                                <button type="submit" class="btn btn-success">Atualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>