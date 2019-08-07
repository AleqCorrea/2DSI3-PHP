<meta charset="utf-8">

<?php

echo '<table border=1>
		<tr>
			<td>Cód.</td>
			<td>Nome</td>
			<td>Valor</td>
		<tr>';

for($i =1; $i<=50;$i++){

	echo '<tr id='.'><td>'.$i.'</td><td>'.'</td><td>'.'</td></tr>';

}

echo '</table>';
?>

<?php

echo '<table border=1>
		<tr>
			<td>Cód.</td>
			<td>Nome</td>
			<td>Valor</td>
		<tr>';

for($i =1; $i<=50;$i++){
	$cor = '';
	if($i%2==0){
		$cor = 'orange';
	}

	echo '<tr id='.$cor.'><td>'.$i.'</td><td>'.'</td><td>'.'</td></tr>';

}
echo '<br>';
echo '</table>';
?>
<style>
	#orange{
		background-color: orange;
	}
	#white{
		background-color: white;
	}
	#green{
		background-color: green;
	}
</style>

<?php

echo '<table border=1>
		<tr>
			<td>Cód.</td>
			<td>Nome</td>
			<td>Valor</td>
		<tr>';

for($i =1; $i<=50;$i++){
	$cor = '';
	if($i%5==0){
		$cor = 'orange';
	}
	if($i%2==0){
		$cor = 'green';
	}
	echo '<tr id='.$cor.'><td>'.$i.'</td><td>'.'</td><td>'.'</td></tr>';

}
echo '<br>';
echo '</table>';
?>

