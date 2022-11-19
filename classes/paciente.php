<?php
include_once('conexao.php');
class paciente extends Conexao{

	public function listar_paciente(){
		//chama função da classe pai
		//CONEXAO
		$conexao = Conexao::conectar();
		//CONSULTA
		$sql = 'Select * from paciente ORDER BY id asc';
		//REALIZA A CONSULTA
		$resultado = mysqli_query(
			$conexao,$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$paciente[] = $valores;
		}
		return $paciente;
	}
	
    function adicionar_pacientes($nome, $data_nascimento, $CPF, $RG, $nome_responsavel, $CPF_responsavel, $RG_responsavel,
     $endereco, $numero, $bairro, $estado, $cidade, $telefone){
		$conexao = Conexao::conectar();
		$sql = "INSERT INTO paciente (nome, data_nascimento, CPF, RG, nome_responsavel, CPF_responsavel, RG_responsavel, 
        endereco, numero, bairro, estado, cidade, telefone)
				VALUES ('".$nome."','".$data_nascimento."','".$CPF."','".$RG."','".$nome_responsavel."',
                '".$CPF_responsavel."', '".$RG_responsavel."','".$endereco."','".$numero."','".$bairro."',
                '".$estado."','".$cidade."','".$telefone."')";
			mysqli_query($conexao, $sql) or die ("Nao foi possivel inserir");
		echo "
			<script type='text/javascript'>
				alert('paciente cadastrado com sucesso');
				window.location = '../crud_paciente/consultar_paciente.php';
			</script>
		";
	}  
	function paciente_por_id($id){
		$conexao = Conexao::conectar();
		//cria a consulta do banco de dados		
		$sql = 'Select * from paciente WHERE id='.$id;
		$resultado = mysqli_query(
			$conexao,
			$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$paciente[] = $valores;
		}
		return $paciente;
	}
	//EDICAO
    function editar_paciente($id, $nome, $data_nascimento, $CPF, $RG, $nome_responsavel, $CPF_responsavel, 
     $RG_responsavel, $endereco, $numero,  $bairro, $estado, $cidade, $telefone){
		$conexao = Conexao::conectar();
		$sql = "UPDATE paciente SET 
        nome = '".$nome."',
        data_nascimento = '".$data_nascimento."', 
        CPF='".$CPF."',
        RG='".$RG."',
        nome_responsavel='".$nome_responsavel."',
        CPF_responsavel='".$CPF_responsavel."',
        RG_responsavel='".$RG_responsavel."',
        endereco='".$endereco."',
        numero='".$numero."',
        bairro='".$bairro."',
        estado='".$estado."',
        cidade='".$cidade."',
        telefone='".$telefone."'
	    WHERE id = ".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Editar");
		echo "
			<script type='text/javascript'>
				alert('Paciente editado com sucesso');
				window.location = '../crud_paciente/consultar_paciente.php';
			</script>
		";
	}
	
	function deletar_paciente($id){
		$conexao = Conexao::conectar();
		//SQL
		$sql = "DELETE FROM paciente WHERE id=".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Deletar");
		echo "
			<script type='text/javascript'>
				alert('Paciente deletado com sucesso');
				window.location = 'consultar_paciente.php';
			</script>
		";
	}	
}
