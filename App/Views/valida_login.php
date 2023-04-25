<?php 

$usuario_autenticado = false;

$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
);

/* echo print_r($usuarios_app); */

foreach($usuarios_app as $rs){
    if($rs['email'] == $_POST['email'] && $rs['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    header('Location: tela_inicial.php');
}else{
    header('Location: login.php?erro=1');;
}

?>