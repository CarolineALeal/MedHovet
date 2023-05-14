<?php 
session_start();
$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2 => 'Estoque', 3 => 'Veterinario');

	//usuarios do sistema
	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'estoque@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 3, 'email' => 'med_vet@teste.com.br', 'senha' => '1234', 'perfil_id' => 3),
	);

/* $usuario_autenticado = false;

$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
); */

//echo print_r($usuarios_app); 

/* foreach($usuarios_app as $rs){
    if($rs['email'] == $_POST['email'] && $rs['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
} */
foreach($usuarios_app as $user) {

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }

}
//echo print_r($usuarios_app); 


if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
   header('Location: tela_inicial.php');
}else{
   header('Location: login.php?erro=1');;
}

?>