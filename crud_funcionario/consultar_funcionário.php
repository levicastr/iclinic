<?php
	include_once('classes/paciente.php');
	//CRIANDO UM OBJETO	
	$a = new funcionario();
	//
	$todos = $a->listar_funcionários();
	
?>
<h3>Lista de Funcionários</h3>
<a href="cadastar_funcionário.php">Cadastrar</a>

<table width="900">
	<tr>
		<th>id</th>
		<th>nome</th>
		<th>data_nascimento</th>
		<th>CPF</th>
		<th>RG</th>
		<th>endereco</th>
		<th>numero</th>
		<th>bairro</th>
		<th>estado</th>
        <th>cidade</th>       
        <th>telefone</th>       
        <th>email</th>
        <th>senha</th>
        
	</tr>
	<?php		foreach($todos as $funcionarios){
			echo "
				<tr>
					<td>".$funcionarios['id']."</td>
					<td>".$funcionarios['nome']."</td>
					<td>".$funcionarios['data_nascimento']."</td>
					<td>".$funcionarios['CPF']."</td>
					<td>".$funcionarios['RG']."</td>
					<td>".$funcionarios['endereco']."</td>
					<td>".$funcionarios['numero']."</td>
					<td>".$funcionarios['bairro']."</td>
                    <td>".$funcionarios['estado']."</td>
                    <td>".$funcionarios['cidade']."</td>
					<td>".$funcionarios['telefone']."</td>
                    <td>".$funcionarios['email']."</td>
                    <td>".$funcionarios['senha']."</td>
					<td>
						<a href='editar_funcionário.php?id=".$funcionarios['id']."'>editar</a>
                        <a href='deletar_funcionário.php?id=".$funcionarios['id']."'>excluir</a>
                        <a href='consultar_funcionário.php?id=".$funcionarios['id']."'>consultar</a>
                        <a href='cadastrar_funcionário.php?id=".$funcionarios['id']."'>cadastrar</a>
					</td>
				</tr>
			";
		}
		
	?>
</table>
	