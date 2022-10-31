<?php

	class Leitura{
		private $id;
		private $valor;

		function setId($id){
			$this->id=$id;
		}
		
		function getId(){
			return $this->id;
		}
		
		function setValor($valor){
			$this->valor=$valor;
		}
		
		function getValor(){
			return $this->valor;
		}
		
	}

?>
