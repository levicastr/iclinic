<?php
	class Conexao{
		//inicia as variaveis para conexao
		private $host = '127.0.0.1:3308';
		private $user = 'root';
		private $senha = '';
		private $banco = 'iclinic';
		
		public function conectar(){
			//cria a conexao ou mata
			$conexao = mysqli_connect(
				$this->host, 
				$this->user, 
				$this->senha
			)or die ();
			//seleciona o banco de dados
			mysqli_select_db(
				$conexao, 
				$this->banco
			)or die ("Erro");
			
			return $conexao;
		}
		
		public function desconectar(){
			mysqli_close($this->conectar());
		}
	}