<?php
$servidor = 'localhost';
$usuario = 'novazcom_dbleal';
$senha = '99651927';
$banco = 'novazcom_belle_vie';
$link = mysql_connect($servidor, $usuario, $senha)
or die('Não foi possivel conectar: ' . mysql_error());
mysql_select_db($banco) or die('Não pude selecionar o banco de dados');
?>