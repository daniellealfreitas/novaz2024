<?php include('conexao.php')?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Belle Vie - Estética preventiva e terapêutica</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link href="../css/geral.css" rel="stylesheet" type="text/css">
<link href="../css/easy-slider.css" rel="stylesheet" type="text/css">
<!--SCROLL-->
<script src="../js/jquery_scrool.js" type="text/javascript"></script>
<script src="../js/scroll.js" type="text/javascript"></script>
<script type="text/javascript">
	var ocontainer;
	var ocontent;
	var spaceToScroll;
	$(document).ready(
		function () 
		{
			ocontainer = $('div.container');
			ocontent = $('div.content');
			
			containerSize = jQuery.iUtil.getSize(ocontainer.get(0));
			containerPosition = jQuery.iUtil.getPosition(ocontainer.get(0));
			containerInner = jQuery.iUtil.getClient(ocontainer.get(0));
			
			contentSize = jQuery.iUtil.getSize(ocontent.get(0));
			
			$('div.slider1')
				.css('top', containerPosition.y + 'px')
				.css('left', containerPosition.x + containerSize.wb + 'px')
				.css('height', containerSize.hb + 'px');
			
			spaceToScroll = contentSize.hb - containerInner.h;
			
			$('div.indicator')
				.css('height', containerInner.h * containerSize.hb / contentSize.hb + 'px')
			
			$('.slider1').Slider(
				{
					accept : '.indicator',
					onSlide : function( cordx, cordy, x , y)
					{
						ocontent
							.css('top', - spaceToScroll * cordy / 100 + 'px');
					}
				}
			);
		}
	);
</script>
		<script language="JavaScript" type="text/javascript">var client_id = 1;</script>
		<script language="JavaScript" src="http://stats.byspirit.ro/track.js" type="text/javascript"></script>
		<noscript>
		<p><img alt="" src="http://stats.byspirit.ro/image.php?client_id=1" width="1" height="1" /></p>
		</noscript>
<style type="text/css">
.slider1
{
	width: 16px;
	height: 300px;
	background-color: #33CC33;
	position: absolute;
}
.indicator
{
	width: 16px;
	height: 16px;
	background-color: #FFF;
	position: absolute;
	font-size: 1px;
	overflow: hidden;
}
.container
{
	width: 850px;
	height: 210px;
	padding: 10px;
	overflow: hidden;
	position: relative;
	background-color: #eee;
}
.content
{
	position: absolute;
}

</style>        
</head>

<body>
	<div id="wrap_tudo">
    	<header id="wrap_topo">
            <div id="logotipo">
                <h1>Belle Vie - Estética preventiva e terapêutica</h1>
                <a href="../index.php">
                <img src="../images/logotipo.png" width="235" height="105" alt="Belle Vie - Estética preventiva e terapêutica" title="Belle Vie - Página Principal">
                </a>
            </div><!--logotipo-->
            <nav id="menu_principal">
            	<ul>
                	<li><a href="empresa.php">Empresa</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="profissionais.php">Profissionais</a></li>
                    <li><a href="depoimentos.php">Depoimentos</a></li>
                </ul>
            </nav><!--menu_principal-->
        </header><!--wrap_topo-->