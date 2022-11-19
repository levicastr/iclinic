<?php
include_once('conexao.php');
class prontuario extends Conexao{

	public function listar_prontuario(){
		//chama função da classe pai
		//CONEXAO
		$conexao = Conexao::conectar();
		//CONSULTA
		$sql = 'Select * from prontuario ORDER BY id asc';
		//REALIZA A CONSULTA
		$resultado = mysqli_query(
			$conexao,$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$prontuario[] = $valores;
		}
		return $prontuario;
	}
	
    function adicionar_prontuario($nome, $data_nascimento, $CPF, $RG, $data_registro, $sintomas, $historico_saude, $uso_medicacoes,
     $alergico_medicacao, $prescricao_medica, $exames_indicados, $estado_paciente){
		$conexao = Conexao::conectar();
		$sql = "INSERT INTO prontuario (nome, data_nascimento, CPF, RG, data_registro, sintomas, historico_saude,
         uso_medicacoes, alergico_medicacao, prescricao_medica, exames_indicados, estado_paciente )
				VALUES ('".$nome."','".$data_nascimento."','".$CPF."','".$RG."','".$data_registro."', '".$sintomas."', 
                '".$historico_saude."','".$uso_medicacoes."','".$alergico_medicacoes."','".$prescicao_medica."',
                '".$exames_indicados."','".$estado_paciente."',)";
			mysqli_query($conexao, $sql) or die ("Nao foi possivel inserir");
		echo "
			<script type='text/javascript'>
				alert('prontuario cadastrado com sucesso');
				window.location = 'consulta_prontuario.php';
			</script>
		";
	}  
	function paciente_por_id($id){
		$conexao = Conexao::conectar();
		//cria a consulta do banco de dados		
		$sql = 'Select * from prontuario WHERE id='.$id;
		$resultado = mysqli
			$sql_query(
			$conexao,
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$prontuario[] = $valores;
		}
		return $prontuario;
	}
	//EDICAO
    function editar_prontuario($id, $nome, $data_nascimento, $CPF, $RG, $data_registro, $sintomas, $historico_saude,
     $uso_medicacoes, $alergico_medicacao, $prescricao_medica, $exames_indicados, $estado_paciente ){
		$conexao = Conexao::conectar();
		$sql = "UPDATE prontuario SET 
        nome = '".$nome."',
        data_nascimento = '".$data_nascimento."', 
        CPF='".$CPF."'
        RG='".$RG."'
        data_registro ='".$data_registro."'
        sintomas ='".$sintomas."'
        historico_saude='".$historico_saude."'
        RG_responsavel='".$uso_medicacoes."'
        endereco='".$alergico_medicacao."'
        numero='".$prescricao_medica."'
        bairro='".$exames_indicados."'
        estado='".$estado_paciente."'
	    WHERE id = ".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Editar");
		echo "
			<script type='text/javascript'>
				alert('Prontuario editado com sucesso');
				window.location = 'consulta_paciente.php';
			</script>
		";
	}
	
	function deletar_prontuario($id){
		$conexao = Conexao::conectar();
		//SQL
		$sql = "DELETE FROM prontuario WHERE id=".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Deletar");
		echo "
			<script type='text/javascript'>
				alert('Prontuario deletado com sucesso');
				window.location = 'consulta_paciente.php';
			</script>
		";
	}	
}
