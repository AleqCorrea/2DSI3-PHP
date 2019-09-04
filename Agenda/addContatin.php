<?php  

include('conn.php');

if ($_POST) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];

	$sql = 'INSERT INTO agenda (nome, telefone, email) VALUES (
	"'.$nome.'",
	"'.$telefone.'",
	"'.$email.'")';
	$consulta = $GLOBALS['conn']->query($sql);

	if($consulta){
		echo '<script>
			alert("cadastrado!")
			window.location = "index.html";
		</script>';
	}else{
		echo "deu ruim";
	}
}

?>