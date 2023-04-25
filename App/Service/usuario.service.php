<?php


//CRUD
class UsuarioService {

	private $conexao;
	private $usuario;

	public function __construct(Conexao $conexao, Usuario $usuario) {
		$this->conexao = $conexao->conectar();
		$this->usuario = $usuario;
	}

	public function inserir() { //create
		/* $query = 'insert into tb_usuarios(usuario)values(:usuario)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':usuario', $this->usuario->__get('usuario'));
		$stmt->execute(); */
		$query = 'INSERT INTO tb_usuarios(usuario, email, senha, cpf, cargo) VALUES (:usuario, :email, :senha, :cpf, :cargo)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':usuario', $this->usuario->__get('usuario'));
		$stmt->bindValue(':email', $this->usuario->__get('email'));
		$stmt->bindValue(':senha', $this->usuario->__get('senha'));
		$stmt->bindValue(':cpf', $this->usuario->__get('cpf'));
		$stmt->bindValue(':cargo', $this->usuario->__get('cargo'));
		$stmt->execute();
	}

	public function recuperar() { //read
		$query = '
			select 
				* 
			from 
				tb_usuarios
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function atualizar() { //update

		$query = "update tb_usuarios set usuario = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->usuario->__get('usuario'));
		$stmt->bindValue(2, $this->usuario->__get('id'));
		return $stmt->execute(); 
	}

	public function remover() { //delete

		$query = 'delete from tb_usuarios where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->usuario->__get('id'));
		$stmt->execute();
	}

	public function marcarRealizada() { //update

		$query = "update tb_usuarios set id_status = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->usuario->__get('id_status'));
		$stmt->bindValue(2, $this->usuario->__get('id'));
		return $stmt->execute(); 
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
		$stmt->bindValue(':id_status', $this->usuario->__get('id_status'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}

?>