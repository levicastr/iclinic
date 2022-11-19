<?php
include_once('conexao.php');
class leito_clinico extends Conexao{

	public function listar_leito_clinico(){
		//chama função da classe pai
		//CONEXAO
		$conexao = Conexao::conectar();
		//CONSULTA
		$sql = 'Select * from leito_clinico ORDER BY id asc';
		//REALIZA A CONSULTA
		$resultado = mysqli_query(
			$conexao,$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$leito[] = $valores;
		}
		return $leito;
	}
	
    function adicionar_leito_clinico($nome, $CPF, $RG, $data_entrada, $data_saida){
		$conexao = Conexao::conectar();
		$sql = "INSERT INTO leito_clinico (nome, CPF, RG, data_entrada, data_saida)
				VALUES ('".$nome."','".$CPF."','".$RG."','".$data_entrada."','".$data_saida."')";
			mysqli_query($conexao, $sql) or die ("Nao foi possivel inserir");
		echo "
			<script type='text/javascript'>
				alert('Paciente editado no leito com sucesso');
				window.location = '../crud_leito_cli/consultar_leito_clinico.php';
			</script>
		";
	}  
	function leito_clinico_por_id($id){
		$conexao = Conexao::conectar();
		//cria a consulta do banco de dados		
		$sql = 'Select * from leito_clinico WHERE id='.$id;
		$resultado = mysqli_query(
			$conexao,
			$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$leito[] = $valores;
		}
		return $leito;
	}
	//EDICAO
	function editar_leito_clinico($id,$nome, $CPF, $RG, $data_entrada, $data_saida){
		$conexao = Conexao::conectar();
		$sql = "UPDATE leito_clinico SET 
        nome = '".$nome."', 
        CPF='".$CPF."',
        RG='".$RG."',
        data_entrada='".$data_entrada."',
        data_saida='".$data_saida."'
	    WHERE id =".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Editar");
		echo "
			<script type='text/javascript'>
				alert('Paciente editado no leito com sucesso');
				window.location = '../crud_leito_cli/consultar_leito_clinico.php';
			</script>
		";
	}
}