<?php 

namespace App;

use PDO;
use PDOException;

class Conexao {

	private $host = 'localhost';
	private $dbname = 'php_com_pdo';
	private $user = 'root';
	private $pass = '';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch(PDOException $e){
            echo 'Erro: '.$e->getCode(). 'Mensagem '.$e->getMessage();
        }
	}
}

?>