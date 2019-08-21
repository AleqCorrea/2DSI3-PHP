<meta charset="utf-8">
<form action="index.php" method="post">
	Data de Nascimento
	<input type="date" name="dataNsc">
	<br>
	<br>
	Valor da Compra:
	<input type="text" name="compra">
	<br>
	<br>
	Forma:
	<SELECT name="forma">
		<option value="avista">DINHEIRO / DÉBITO</option>
		<option value="master">CRÉDITO / MASTERCARD</option>
		<option value="visa">CRÉDITO / VISA</option>
		<option value="elo">CRÉDITO / ELO</option>
	</SELECT>
	<input type="submit" value="Calcular">
</form>
<?php
date_default_timezone_set('America/Sao_Paulo');
if ($_POST) {
	$dataAtual = date_create(date('Y-m-d'));
    $dataNsc = date_create($_POST['dataNsc']);
    $idade = date_diff($dataNsc,$dataAtual)->format('%y');
    $compra = $_POST['compra'];
    $forma = $_POST['forma'];
	if ($idade < 18) {
		if ($forma == 'avista') {
		$porcentagem = $compra / 100 * 10;
		$valor = $compra - $porcentagem;
		echo 'R$'.$valor.' no total';
		}
		else if($forma == 'master'){
			echo "Menor de idade apenas em DINHEIRO / DEBITO";
		}
		else if($forma == 'visa'){
			echo "Menor de idade apenas em DINHEIRO / DEBITO";
		}
		else if($forma == 'elo'){
			echo "Menor de idade apenas em DINHEIRO / DEBITO";
		}
	}else if ($idade >= 18){
		if ($forma == 'avista') {
		$porcentagem = $compra / 100 * 10;
		$valor = $compra - $porcentagem;
		echo 'R$'.$valor.' no total';
		}
		else if($forma == 'master'){
			$porcentagem = $compra / 100 * 05;
			$valor = $compra + $porcentagem;
			echo 'R$'.$valor.' no total';
		}
		else if($forma == 'visa'){
			$porcentagem = $compra / 100 * 10;
			$valor = $compra + $porcentagem;
			echo 'R$'.$valor.' no total';
		}
		else if($forma == 'elo'){
			$porcentagem = $compra / 100 * 20;
			$valor = $compra + $porcentagem;
			echo 'R$'.$valor.' no total';
		}
	}
}

/*
if($_POST){
	$nascimento = $_POST ['nascimento'];
	$compra = $_POST['compra'];
	$forma = $_POST['forma'];
	$hoje = time();
	if ($forma == 'avista') {
		$porcentagem = $compra / 100 * 10;
		$valor = $compra - $porcentagem;
		echo 'R$'.$valor.' no total';
	}
	else if($forma == 'master'){
		$porcentagem = $compra / 100 * 05;
		$valor = $compra + $porcentagem;
		echo 'R$'.$valor.' no total';
	}
	else if($forma == 'visa'){
		$porcentagem = $compra / 100 * 10;
		$valor = $compra + $porcentagem;
		echo 'R$'.$valor.' no total';
	}
	else if($forma == 'elo'){
		$porcentagem = $compra / 100 * 20;
		$valor = $compra + $porcentagem;
		echo 'R$'.$valor.' no total';
	}
}
*/
?>
