<?php 
$user = 'root';
$pass = 'usbw';
$banco = 'evento';
$servidor = 'localhost';

$c = new mysqli($servidor,$user,$pass,$banco);

if(!$c){
	echo "Problemas com a conexão.";
}
?>