<?php


//CRUD
class CategoriaService {

	private $conexao;
	private $categoria;

	public function __construct(Conexao $conexao, Categoria $categoria) {
		$this->conexao = $conexao->conectar();
		$this->categoria = $categoria;
	}

	
    

	public function recuperar() { //read
		$query = '
			select 
				* 
			from 
				tb_categoria
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

}

?>