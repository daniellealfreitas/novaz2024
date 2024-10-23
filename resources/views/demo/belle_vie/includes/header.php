<?php include('conexao.php')?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Belle Vie - Estética preventiva e terapêutica</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/geral.css" rel="stylesheet" type="text/css">
<link href="css/easy-slider.css" rel="stylesheet" type="text/css">
<link type="text/css" href="css/smoothness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
<!--EASY SLIDER-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easySlider1.7.js"></script>
<script type="text/javascript">
	$(document).ready(function(){	
		$("#slider").easySlider({
			auto: true, 
			continuous: true,
			numeric: true
		});
	});	
</script>

</head>

<body>
	<div id="wrap_tudo">
    	<header id="wrap_topo">
            <div id="logotipo">
                <h1>Belle Vie - Estética preventiva e terapêutica</h1>
                <a href="index.php">
                <img src="images/logotipo.png" width="235" height="105" alt="Belle Vie - Estética preventiva e terapêutica" title="Belle Vie - Página Principal">
                </a>
            </div><!--logotipo-->
            <nav id="menu_principal">
            	<ul>
                	<li><a href="paginas/empresa.php">Empresa</a></li>
                    <li><a href="paginas/servicos.php">Serviços</a></li>
                    <li><a href="paginas/profissionais.php">Profissionais</a></li>
                    <li><a href="paginas/depoimentos.php">Depoimentos</a></li>
                </ul>
            </nav><!--menu_principal-->
        </header><!--wrap_topo-->