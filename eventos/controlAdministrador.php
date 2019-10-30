<?php  
include('administrador.php');

if($_POST){

	switch ($_POST['acao']) {
		case 'cadastrar':
			if (CadastrarAdministrador($_POST['nome'],$_POST['email'],$_POST['senha'])) {
				echo 'Cadastro com Sucesso';
			}else{
				echo 'Erro ao cadastrar';
			}
			break;
		
		case 'listar':
			if (ListarAdministrador($_POST['cd'])) {
				echo 'Listado com Sucesso';
			}else{
				echo 'Erro ao listar';
			}
			break;
		
		case 'editar':
			if (AtualizarAdministrador($_POST['cd'],$_POST['nome'],$_POST['email'],$_POST['senha'])) {
				echo 'Atualizado com Sucesso';
			}else{
				echo 'Erro ao atualizar';
			}
			break;
		
		case 'excluir':
			if (ExcluirAdministrador($_POST['cd'])) {
				echo 'Excluido com Sucesso';
			}else{
				echo 'Erro ao excluir';
			}
			break;
		
		default:

			break;
	}


}

?>