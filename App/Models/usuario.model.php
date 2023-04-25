<?php

class Usuario {
	private $id;
	private $usuario;
	private $senha;
	private $cpf;
	private $cargo;
	private $data_cadastro;
	private $email;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>