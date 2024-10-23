<?php include('../../acoes/conexao.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Inclui Slide -  Belle Vie</title>
    <link href="../../css/resetcss.css"  rel="stylesheet" type="text/css">
    <link href="../../css/geral.css"  rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	< ![endif]-->    
</head>

<body>
	<header>
    	<h1>Administrador - Inclui Slide</h1>
        <h2>Seja bem vindo, Administrador</h2>
    </header>
    <div class="nav_principal">
    	<ul>
        	<li><a href="../../index.php">Principal</a></li>
            <li><a href="../empresa.php">Empresa</a></li>
            <li><a href="../servicos.php">Serviços</a></li>
            <li><a href="../profissionais.php">Profissionais</a></li>
            <li><a href="../depoimentos.php">Depoimentos</a></li>            
        </ul>
    </div>    
    <div id="breadcrumb">
    	<ul>
        	<li>Você está aqui:</li>
            <li><a href="incluir/inclui_slide.php">Adicionar Slide</a></li>
        </ul>
    </div><!--breadcrumb-->
    <nav>
    	<ul>
            <li><a href="../slider.php">Slider</a></li>
            <li><a href="incluir/inclui_slide.php">Adicionar Slide</a></li>
        </ul>
    </nav>         
	<section id="conteudo">
        <aside>
    		<h3>Dicas</h3>
            <p>Aqui você adicionar slides na página principal</p>
    	</aside>
        <article>
        	<h2>Incluir Slide</h2>
            <form method="post"  action="../../acoes/inclui/upload_slide.php" enctype="multipart/form-data">              
                <label>Escolha o slide: (O tamanho ideal é 920x300px)</label><br>  
                <input type="file" name="arquivo"><br>
                <input type="submit" value="Enviar">                
            </form>

        </article>
    </section>
    <footer>
    	<h4>Copyright - todos os direitos reservados - Desenvolvimento: <a href="http://www.novaz.com.br" target="_blank">Novaz - desenvolvendo o futuro da web</a> </h4>
    </footer>
</body>
</html>