<?php

class Estoque {
	private $id;
	private $local;
	private $quantidade;
	private $validade;
	private $unidade;
	private $item;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>