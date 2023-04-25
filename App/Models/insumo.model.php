<?php

class Insumo {
	private $id;
	private $insumo;
	private $unidade;
	private $n_lote;
	private $dta_fabricacao;
	private $armazenamento;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>