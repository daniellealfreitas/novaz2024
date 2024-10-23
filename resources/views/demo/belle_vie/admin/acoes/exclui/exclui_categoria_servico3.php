<style type="text/css">
/*** Alerta Verde ***/ 
	.alerta_verde{
		margin:20% auto;
		width:300px;
		height:auto;
		padding:10px;
		border:1px solid #060;
		background:#090;
		text-align:center;
	}
	.alerta_verde h1{
		color:white;
		font-family:Verdana, Geneva, sans-serif;
		font-size:12px;
	}
/*** Alerta Vermelho ***/ 
	.alerta_vermelho{
		margin:20% auto;
		width:300px;
		height:auto;
		padding:10px;
		border:1px solid #900;
		background: #F00;
		text-align:center;
	}
	.alerta_vermelho h1{
		color:white;
		font-family:Verdana, Geneva, sans-serif;
		font-size:12px;
	}	
	
</style>
<?php
require("../conexao.php");

$sql = "DELETE FROM categorias_servico3 WHERE id = ".$_GET['id'];

$resultado = mysql_query($sql)
or die ("
<div class='alerta_vermelho'>
	<h1>Erro ao remover Subcategoria</h1>
</div>
");

?>

<div class="alerta_verde">
	<h1>A Categoria foi excluida com exito!</h1>
</div>
<script type="text/javascript">setTimeout("javascript:history.go(-1);",2250);</script>
