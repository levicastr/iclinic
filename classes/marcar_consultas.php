<?php
include_once('conexao.php');
class marcar_consultas extends Conexao{

	public function listar_marcar_consultas(){
		//chama função da classe pai
		//CONEXAO
		$conexao = Conexao::conectar();
		//CONSULTA
		$sql = 'Select * from marcar_consultas ORDER BY id asc';
		//REALIZA A CONSULTA
		$resultado = mysqli_query(
			$conexao,$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$consultas[] = $valores;
		}
		return $consultas;
	}
	
    function adicionar_consultas($nome, $data_nascimento, $CPF, $RG, $data_consulta, $tipo){
		$conexao = Conexao::conectar();
		$sql = "INSERT INTO marcar_consultas(nome, data_nascimento, CPF, RG, data_consulta, tipo)
				VALUES ('".$nome."','".$data_nascimento."','".$CPF."','".$RG."','".$data_consulta."','".$tipo."')";
			mysqli_query($conexao, $sql) or die ("Nao foi possivel inserir");
		echo "
			<script type='text/javascript'>
				alert('consulta cadastrada com sucesso');
				window.location = '../crud_marcar_cons/consultar_consulta.php';
			</script>
		";
	}  
	function marcar_consultas_por_id($id){
		$conexao = Conexao::conectar();
		//cria a consulta do banco de dados		
		$sql = 'Select * from marcar_consultas WHERE id='.$id;
		$resultado = mysqli_query(
			$conexao,
			$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$consultas[] = $valores;
		}
		return $consultas;
	}
	//EDICAO
	function editar_marcar_consultas($id, $nome, $data_nascimento, $CPF, $RG, $data_consulta, $tipo){
		$conexao = Conexao::conectar();
		$sql = "UPDATE marcar_consultas SET 
        nome = '".$nome."',
        data_nascimento = '".$data_nascimento."', 
        CPF='".$CPF."',
        RG='".$RG."',
        data_consulta='".$data_consulta."',
        tipo='".$tipo."'
	    WHERE id = ".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Editar");
		echo "
			<script type='text/javascript'>
				alert('consulta editada com sucesso');
				window.location = 'consultar_consulta.php';
			</script>
		";
	}
	
	function deletar_marcar_consultas($id){
		$conexao = Conexao::conectar();
		//SQL
		$sql = "DELETE FROM marcar_consultas WHERE id=".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Deletar");
		echo "
			<script type='text/javascript'>
				alert('Consulta deletada com sucesso');
				window.location = 'consultar_consulta.php';
			</script>
		";
	}	
}