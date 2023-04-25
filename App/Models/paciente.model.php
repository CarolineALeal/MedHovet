<?php

class Paciente {
	private $id;
	private $nome;
	private $especie;
	private $raca;
	private $idade;
	private $genero;
	private $peso;
	private $altura;
	private $historico_medico;
	private $vacinacao;
	private $proprietario_nome;
	private $proprietario_telefone;
	private $proprietario_endereco;
	private $observacoes_adicionais;
	private $data_cadastro;
	private $veterinario_responsavel;
	private $diagnostico;
	private $plano_tratamento;
	private $custos;
	private $forma_pagamento;
	private $medicamentos_prescritos;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>