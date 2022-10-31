<?php
	require_once "../Control/ConexaoControl.php";
	
	class LeituraDao{
		
		public $con;
		
		public function __construct() {
			$this->con=Conexao::conectar();
		}
		
		public function listAll(){
			$consulta = $this->con->query("SELECT * FROM `Leitura`;");
			$dados = $consulta->fetchAll(PDO::FETCH_OBJ);
			return $dados;
		}
		
	}

?>
