<?php


//CRUD
class InsumoService {

	private $conexao;
	private $insumo;

	public function __construct(Conexao $conexao, Insumo $insumo) {
		$this->conexao = $conexao->conectar();
		$this->insumo = $insumo;
	}

	public function inserir() { //create
		$query = 'INSERT INTO tb_insumos(insumo, unidade, n_lote, dta_fabricacao, armazenamento) VALUES (:insumo, :unidade, :n_lote, :dta_fabricacao, :armazenamento)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':insumo', $this->insumo->__get('insumo'));
		$stmt->bindValue(':unidade', $this->insumo->__get('unidade'));
		$stmt->bindValue(':n_lote', $this->insumo->__get('n_lote'));
		$stmt->bindValue(':dta_fabricacao', $this->insumo->__get('dta_fabricacao'));
		$stmt->bindValue(':armazenamento', $this->insumo->__get('armazenamento'));
		$stmt->execute();
	}

	public function recuperar() { //read
		$query = '
			select 
				* 
			from 
				tb_insumos
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function atualizar() { //update
        $query = 'UPDATE tb_insumos SET insumo = :insumo, unidade = :unidade, n_lote = :n_lote, dta_fabricacao = :dta_fabricacao, armazenamento = :armazenamento WHERE id = :id';

        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(':insumo', $this->insumo->__get('insumo'));
        $stmt->bindValue(':unidade', $this->insumo->__get('unidade'));
        $stmt->bindValue(':n_lote', $this->insumo->__get('n_lote'));
        $stmt->bindValue(':dta_fabricacao', $this->insumo->__get('dta_fabricacao'));
        $stmt->bindValue(':armazenamento', $this->insumo->__get('armazenamento'));
        $stmt->bindValue(':id', $this->insumo->__get('id'));

        return $stmt->execute();
    }

	public function remover() { //delete

		$query = 'delete from tb_insumos where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->insumo->__get('id'));
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
		$stmt->bindValue(':id_status', $this->insumo->__get('id_status'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}

?>