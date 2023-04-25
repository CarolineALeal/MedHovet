<script type="text/javascript">
function capslock(ev) {
	var e = ev || window.event;
	codigo_tecla = e.keyCode?e.keyCode:e.which;
	tecla_shift = e.shiftKey?e.shiftKey:((codigo_tecla == 16)?true:false);
	if(((codigo_tecla >= 65 && codigo_tecla <= 90) && !tecla_shift) || ((codigo_tecla >= 97 && codigo_tecla <= 122) && tecla_shift)) {
		document.getElementById('aviso_capslock').style.visibility = 'visible';
	}
	else {
		document.getElementById('aviso_capslock').style.visibility = 'hidden';
	}
}
</script>
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
    margin-top: 30px;
    margin-left: 440;
}
.logo-bsi {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
}
.logo-hovet {
    align-self: center;
    margin-top: 10px;
    margin-left: 590px;
}
</style>
<?php if (isset($_GET['erro']) && $_GET['erro'] == 1) { ?>
        <div class="alert alert-danger" role="alert">
  		Erro na autenticação do usuário! Usuário ou senha incorretos.
		</div>
    <?php } ?>
<div class="logo-hovet">
        <img src="img/hovet.png" width="200" height="100">
    </div>
<div class="row">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></div>
    <div class="container">    
      <div class="row">
	  
        <div class="card-login"  id="login" name="login">
        <div class="panel-body" id="painel-login">
		    	<h1 class="text-center login-title">MedHovet</h1>
		        <div class="account-wall">
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="E-mail" onkeypress="capslock(event)">
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Senha" onkeypress="capslock(event)">
                </div>
                <div class="form-group">
		            <button type="submit" class="btn btn-lg btn-default btn-block" name="logar" id="logar">Entrar</button>
		        </div>
              </form>
              <div class="text-center text-danger" role="alert" id="aviso_capslock" style="visibility: hidden">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						<span class="sr-only center">Error:</span>
						CAPS LOCK ATIVADO
			</div>
            </div>
          </div>
        </div>
    </div>
    <!-- <div class="" id="logo-bsi">
        </div> -->
    </body>
      
    <div class="logo-ufra" width="100" height="50">
        <img src="img/ufra.png">
    </div>
    <div class="logo-bsi">
        <img src="img/bsi.png">
    </div>
</html> 