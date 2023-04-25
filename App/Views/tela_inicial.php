<style>
body {
	background: #20B2AA;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #20B2AA, #E0FFFF);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #20B2AA, #E0FFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	border: none;
}

.titulo {
	font-size: large;
	text-align: center;
	margin: 10px;
}

#login {
	margin-top: 20px;
	display: flex;
	align-items: center;
	justify-content: center;
	color: white;
	border: none;
}

#painel-login {
	background-color: #66CDAA;
	border: none;
	border-radius: 2rem;
       
}

#logar, #painel {
	background-color: #008080;
	color: white;
	border-radius: 2rem;
	border: none;
    justify-content: center;
}

#logar {
	margin-top: 40px;
	transition-duration: 0.5s;
}

#logar:hover {
	transition-duration: 0.5s;
	background-color: #fff;
	color: #000;
	transform: scale(1.05);
	translate: 0 2px 20px;
}

#painel {
	width: 100%;
    margin-top: 50px;
    
}

.card-login {
padding: 30px 0 0 0;
width: 350px;
margin-top: 50px;
margin-left: 400;
}
.logo-ufra {
    display: flex;
	align-items: center;
	justify-content: center;
    gap: 30px;
    margin-top: 80px;
    
}
.logo-bsi {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-top: -120px;
    margin-left: 260;
    
  
}
.logo-hovet {
    align-self: center;
    margin-top: 20px;
    margin-left: 500px;
}


h1 {
    border: none;
	color: white;
}


.footer-fixed {
	background: #536976;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #292E49, #536976);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #292E49, #536976); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */	
	color: white;
}

#painel {
    padding-top: 5px;
	background-color: #008080;
	border: none;
	border-radius: 2rem;
}

#forment {
	background-color: #20B2AA;
	color: white;
	border-radius: 2rem;
	border: none;
}

#forment:hover {
	transform: scaleX(1.04);
}

#titulo {
	margin-left: 20px;
	color: white;
    margin-left: 410px;
    margin-top: 10px;
}

#painel-principal {
	border: none;
	background-color:#008080 ;
	color: white;
	border-radius: 2rem;
    margin-left: 400px;
    margin-right: -100px;
    margin-top: -40px;
}

</style>
<script>
  function redirecionar() {
    var opcoes = document.getElementById("opcoes");
    var valorSelecionado = opcoes.options[opcoes.selectedIndex].value;
    if (valorSelecionado !== "") {
      location.href = valorSelecionado;
    }
  }
</script>

<div class="row">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></div>
<div class="logo-hovet">
        <img src="img/hovet.png" width="400" height="200">
    </div>
	<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

		<form id="form" class="form-horizontal" role="form" action="index/index" method="post">
			<h3 id="titulo">Menus</h3>
			<div class="panel panel-default" id="painel-principal">
          		<div class="panel-body" id="painel">
			    	<div class="form-group">
			     		<div class="col-md-12">
							<select id="opcoes" name="opcoes" class="form-control validate[required]" style="border-radius: 1rem;margin-top:10px;" onchange="location = this.options[this.selectedIndex].value;">
								<option value="">Selecione</option>
								<option value="">Adm - Area Administrativa</option>
								<option value="todos_usuarios.php">Usuários</option>
								<option value="todos_pacientes.php">Registro de Pacientes</option>
								<option value="todos_insumos.php">Insumos</option>
								<option value="todos_estoques.php">Estoque</option>
								<option value="">Solicitações</option>
								<option value="">Movimentação</option>
							</select>
						</div>
			     	</div>
			     	<div class="form-group">
	                	<div class="col-md-1">
	                  		<button id="forment" type="submit" class="btn btn-lg btn-default" onclick="redirecionar">Entrar</button>
	                	</div>
              		</div>
         	 	</div>
        	</div>
    	</form>
	</div>
    <div class="logo-ufra" width="100" height="50">
        <img src="img/ufra.png">
    </div>
    <div class="logo-bsi">
        <img src="img/bsi.png">
    </div> 
</div>