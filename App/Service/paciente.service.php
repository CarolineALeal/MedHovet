<?php


//CRUD
class PacienteService {

	private $conexao;
	private $paciente;

	public function __construct(Conexao $conexao, Paciente $paciente) {
		$this->conexao = $conexao->conectar();
		$this->paciente = $paciente;
	}

	public function inserir() { //create
		$query = 'INSERT INTO pacientes(nome, especie, raca, idade, genero, peso, altura, historico_medico, vacinacao, proprietario_nome, proprietario_telefone, proprietario_endereco, observacoes_adicionais, veterinario_responsavel, diagnostico, plano_tratamento, custos, forma_pagamento, medicamentos_prescritos) VALUES (:nome, :especie, :raca, :idade, :genero, :peso, :altura, :historico_medico, :vacinacao, :proprietario_nome, :proprietario_telefone, :proprietario_endereco, :observacoes_adicionais, :veterinario_responsavel, :diagnostico, :plano_tratamento, :custos, :forma_pagamento, :medicamentos_prescritos)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->paciente->__get('nome'));
		$stmt->bindValue(':especie', $this->paciente->__get('especie'));
		$stmt->bindValue(':raca', $this->paciente->__get('raca'));
		$stmt->bindValue(':idade', $this->paciente->__get('idade'));
		$stmt->bindValue(':genero', $this->paciente->__get('genero'));
        $stmt->bindValue(':peso', $this->paciente->__get('peso'));
        $stmt->bindValue(':altura', $this->paciente->__get('altura'));
        $stmt->bindValue(':historico_medico', $this->paciente->__get('historico_medico'));
        $stmt->bindValue(':vacinacao', $this->paciente->__get('vacinacao'));
        $stmt->bindValue(':proprietario_nome', $this->paciente->__get('proprietario_nome'));
        $stmt->bindValue(':proprietario_telefone', $this->paciente->__get('proprietario_telefone'));
        $stmt->bindValue(':proprietario_endereco', $this->paciente->__get('proprietario_endereco'));
        $stmt->bindValue(':observacoes_adicionais', $this->paciente->__get('observacoes_adicionais'));
        $stmt->bindValue(':veterinario_responsavel', $this->paciente->__get('veterinario_responsavel'));
        $stmt->bindValue(':diagnostico', $this->paciente->__get('diagnostico'));
        $stmt->bindValue(':plano_tratamento', $this->paciente->__get('plano_tratamento'));
        $stmt->bindValue(':custos', $this->paciente->__get('custos'));
        $stmt->bindValue(':forma_pagamento', $this->paciente->__get('forma_pagamento'));
        $stmt->bindValue(':medicamentos_prescritos', $this->paciente->__get('medicamentos_prescritos'));
		$stmt->execute();
	}

	public function recuperar() { //read
		$query = '
			select 
				* 
			from 
				pacientes
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function atualizar() { //update

		$query = "update pacientes set id = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->paciente->__get('nome'));
		$stmt->bindValue(2, $this->paciente->__get('id'));
		return $stmt->execute(); 
	}

	public function remover() { //delete

		$query = 'delete from pacientes where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->paciente->__get('id'));
		$stmt->execute();
	}


	public function recuperarUsuarios() {
		$query = '
			select 
				t.id, s.status, t.tarefa 
			from 
				tb_tarefas as t
				left join tb_status as s on (t.id_status = s.id)
			where
				t.id_status = :id_status
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', $this->paciente->__get('id_status'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}

?>