<?php
include_once('conexao.php');
class pagamento extends Conexao{

	public function listar_pagamento(){
		//chama função da classe pai
		//CONEXAO
		$conexao = Conexao::conectar();
		//CONSULTA
		$sql = 'Select * from pagamento ORDER BY id asc';
		//REALIZA A CONSULTA
		$resultado = mysqli_query(
			$conexao,$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$pagamento[] = $valores;
		}
		return $pagamento;
	}
	
    function adicionar_pagamento($nome, $data_nascimento, $CPF, $RG, $data_pagamento, $valor){
		$conexao = Conexao::conectar();
		$sql = "INSERT INTO pagamento (nome, data_nascimento, CPF, RG, data_pagamento, valor)
				VALUES ('".$nome."','".$data_nascimento."','".$CPF."','".$RG."','".$data_pagamento."','".$valor."')";
			mysqli_query($conexao, $sql) or die ("Nao foi possivel inserir");
		echo "
			<script type='text/javascript'>
				alert('Pagamento cadastrado com sucesso');
				window.location = '../crud_pagamento/consultas_pagamento.php';
			</script>
		";
	}  
	function pagamento_por_id($id){
		$conexao = Conexao::conectar();
		//cria a consulta do banco de dados		
		$sql = 'Select * from pagamento WHERE id='.$id;
		$resultado = mysqli_query(
			$conexao,
			$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$pagamento[] = $valores;
		}
		return $pagamento;
	}
	//EDICAO
	function editar_pagamento($id, $nome, $data_nascimento, $CPF, $RG, $data_pagamento, $valor){
		$conexao = Conexao::conectar();
		$sql = "UPDATE pagamento SET 
        nome = '".$nome."',
        data_nascimento = '".$data_nascimento."', 
        CPF ='".$CPF."',
        RG ='".$RG."',
		data_pagamento = '".$data_pagamento."',
        valor='".$valor."'
	    WHERE id = ".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Editar");
		echo "
			<script type='text/javascript'>
				alert('Pagamento editado com sucesso');
				window.location = '../crud_pagamento/consultas_pagamento.php';
			</script>
		";
	}
}