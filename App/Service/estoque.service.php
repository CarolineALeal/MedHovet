<?php


//CRUD
class EstoqueService {

	private $conexao;
	private $estoque;

	public function __construct(Conexao $conexao, Estoque $estoque) {
		$this->conexao = $conexao->conectar();
		$this->estoque = $estoque;
	}

	public function inserir() { //create
		$query = 'INSERT INTO tb_estoque(local, quantidade, validade, unidade, item) VALUES (:local, :quantidade, :validade, :unidade, :item)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':local', $this->estoque->__get('local'));
		$stmt->bindValue(':quantidade', $this->estoque->__get('quantidade'));
		$stmt->bindValue(':validade', $this->estoque->__get('validade'));
		$stmt->bindValue(':unidade', $this->estoque->__get('unidade'));
		$stmt->bindValue(':item', $this->estoque->__get('item'));
		$stmt->execute();
	}

	public function recuperar() { //read
		$query = '
			select 
				* 
			from 
				tb_estoque
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function atualizar() { //update
        $query = 'UPDATE tb_estoque SET item = :item, local = :local, quantidade = :quantidade, validade = :validade, unidade = :unidade WHERE id = :id';

        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(':item', $this->estoque->__get('item'));
        $stmt->bindValue(':local', $this->estoque->__get('local'));
        $stmt->bindValue(':quantidade', $this->estoque->__get('quantidade'));
        $stmt->bindValue(':validade', $this->estoque->__get('validade'));
        $stmt->bindValue(':unidade', $this->estoque->__get('unidade'));
        $stmt->bindValue(':id', $this->estoque->__get('id'));

        return $stmt->execute();
    }

	public function remover() { //delete

		$query = 'delete from tb_estoque where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->estoque->__get('id'));
		$stmt->execute();
	}

/* 
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
		$stmt->bindValue(':id_status', $this->esto->__get('id_status'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	} */
}

?>