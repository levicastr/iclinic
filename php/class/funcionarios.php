<?php
include_once('conexao.php');
class funcionarios extends Conexao{

	public function listar_funcionarios(){
		//chama função da classe pai
		//CONEXAO
		$conexao = Conexao::conectar();
		//CONSULTA
		$sql = 'Select * from funcionarios ORDER BY id asc';
		//REALIZA A CONSULTA
		$resultado = mysqli_query(
			$conexao,$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$funcionarios[] = $valores;
		}
		return $funcionarios;
	}
	
    function adicionar_funcionarios($nome, $data_nascimento, $CPF, $RG, $endereco, $numero, 
    $bairro, $estado, $cidade, $telefone, $email, $senha){
		$conexao = Conexao::conectar();
		$sql = "INSERT INTO funcionarios (nome, data_nascimento, CPF, RG, endereco, numero, 
        bairro, cidade, telefone, email, senha)
				VALUES ('".$nome."','".$data_nascimento."','".$CPF."','".$RG."','".$endereco."','".$numero."',
                '".$bairro."','".$estado."','".$cidade."','".$telefone."','".$email."','".$senha."')";
			mysqli_query($conexao, $sql) or die ("Nao foi possivel inserir");
		echo "
			<script type='text/javascript'>
				alert('funcionario cadastrado com sucesso');
				window.location = 'consulta_funcionarios.php';
			</script>
		";
	}  
	function funcionario_por_id($id){
		$conexao = Conexao::conectar();
		//cria a consulta do banco de dados		
		$sql = 'Select * from funcionarios WHERE id='.$id;
		$resultado = mysqli_query(
			$conexao,
			$sql
		);
		while($valores = mysqli_fetch_assoc($resultado)){
			$funcionarios[] = $valores;
		}
		return $funcionarios;
	}
	//EDICAO
	function editar_funcionarios($id, $nome, $data_nascimento, $CPF, $RG, $endereco, $numero, 
    $bairro, $estado, $cidade, $telefone, $email, $senha ){
		$conexao = Conexao::conectar();
		$sql = "UPDATE funcionarios SET 
        nome = '".$nome."',
        data_nascimento = '".$data_nascimento."', 
        CPF='".$CPF."'
        RG='".$RG."'
        endereco='".$endereco."'
        numero='".$numero."'
        bairro='".$bairro."'
        estado='".$estado."'
        cidade='".$cidade."'
        telefone='".$telefone."'
        email='".$email."'
        senha='".$senha."'
	    WHERE id = ".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Editar");
		echo "
			<script type='text/javascript'>
				alert('Funcionarios editado com sucesso');
				window.location = 'consulta_funcionarios.php';
			</script>
		";
	}
	
	function deletar_funcionario($id){
		$conexao = Conexao::conectar();
		//SQL
		$sql = "DELETE FROM funcionarios WHERE id=".$id;
		mysqli_query($conexao, $sql) or die ("Nao foi possivel Deletar");
		echo "
			<script type='text/javascript'>
				alert('Funcionario deletado com sucesso');
				window.location = 'consulta_funcionarios.php';
			</script>
		";
	}	
}
