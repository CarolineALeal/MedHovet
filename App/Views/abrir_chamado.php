<script>
function criarCampos(elemento) {
  var opcaoSelecionada = elemento.value;
  var formulario = elemento.parentNode;
    // Verifica se a opção selecionada é "Requisição"

    if (opcaoSelecionada == "1") {
  // Cria os campos tipo, data e setor
  var divTipo = document.createElement("div");
  divTipo.className = "form-group campos-categoria";
  divTipo.style.display = "inline-block";
  divTipo.style.marginRight = "10px";
  divTipo.innerHTML = '<label>Tipo</label><input type="text" name="r_tipo" class="form-control">';

  var divData = document.createElement("div");
  divData.className = "form-group campos-categoria";
  divData.style.display = "inline-block";
  divData.style.marginRight = "10px";
  divData.innerHTML = '<label>Data</label><input type="date" name="r_data" class="form-control">';

  var divSetor = document.createElement("div");
  divSetor.className = "form-group campos-categoria";
  divSetor.style.display = "inline-block";
  divSetor.style.marginRight = "10px";
  divSetor.innerHTML = '<label>Setor</label><input type="text" name="r_setor" class="form-control">';

  // Adiciona os campos criados ao formulário
  formulario.appendChild(divTipo);
  formulario.appendChild(divData);
  formulario.appendChild(divSetor);
}
  // Verifica se a opção selecionada é "Movimentação"
  else if (opcaoSelecionada == "2") {
    // Cria os campos origem, destino, data e tipo
    var divOrigem = document.createElement("div");
    divOrigem.className = "form-group";
    divOrigem.style.display = "inline-block"; // adiciona o estilo inline-block
    divOrigem.style.marginRight = "10px"; // adiciona a margem à direita
    divOrigem.innerHTML = '<label>Origem</label><input type="text" name="m_origem" class="form-control">';
    
    var divDestino = document.createElement("div");
    divDestino.className = "form-group";
    divDestino.style.display = "inline-block"; // adiciona o estilo inline-block
    divDestino.style.marginRight = "10px"; // adiciona a margem à direita
    divDestino.innerHTML = '<label>Destino</label><input type="text" name="m_destino" class="form-control">';
    
    var divData = document.createElement("div");
    divData.className = "form-group";
    divData.style.display = "inline-block"; // adiciona o estilo inline-block
    divData.style.marginRight = "10px"; // adiciona a margem à direita
    divData.innerHTML = '<label>Data</label><input type="date" name="m_data" class="form-control">';
    
    var divTipo = document.createElement("div");
    divTipo.className = "form-group";
    divTipo.style.display = "inline-block"; // adiciona o estilo inline-block
    divTipo.style.marginRight = "10px"; // adiciona a margem à direita
    divTipo.innerHTML = '<label>Tipo</label><input type="text" name="m_tipo" class="form-control">';
    
    // Adiciona os campos criados ao formulário
    formulario.appendChild(divOrigem);
    formulario.appendChild(divDestino);
    formulario.appendChild(divData);
    formulario.appendChild(divTipo);
  }
}
</script>

<?php

	$acao = 'recuperar';
	require 'categoria_controller.php';

	/*
	echo '<pre>';
	print_r($tarefas);
	echo '</pre>';
	*/

?>

<html>
  <head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
  <nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
				MedHovet
			</a>
		</div>
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
	</nav>
   

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
               <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" onclick="criarCampos(this)" class="form-control">
                        <option value="">Selecione</option>
                        <option value="1">Requisição</option>
                        <option value="2">Movimentação</option>
                      </select>
                    </div> 
                    
                    <div class="form-group">
                      <label>Descrição (<span class="deslimite">0</span>/200)</label>
                      <textarea name="descricao" class="form-control" rows="4" placeholder="Digite a descrição" style="resize:none;background: RGBA(0, 0, 0, 0.16);border-radius:1rem;box-shadow: 2px 2px 2px 2px RGBA(0, 0, 0, 0.3);border-style:none;"></textarea>
                    </div>
                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="tela_inicial.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
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