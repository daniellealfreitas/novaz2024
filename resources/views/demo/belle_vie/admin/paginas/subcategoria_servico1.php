<?php include('../acoes/conexao.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Facial -  Belle Vie</title>
    <link href="../css/resetcss.css"  rel="stylesheet" type="text/css">
    <link href="../css/geral.css"  rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	< ![endif]-->    
</head>

<body>
	<header>
    	<h1>Administrador - Facial</h1>
        <h2>Seja bem vindo, Administrador</h2>
    </header>
    <div class="nav_principal">
    	<ul>
        	<li><a href="../index.php">Principal</a></li>
            <li><a href="empresa.php">Empresa</a></li>
            <li><a href="servicos.php">Serviços</a></li>
            <li><a href="profissionais.php">Profissionais</a></li>
            <li><a href="depoimentos.php">Depoimentos</a></li>             
        </ul>
    </div>    
    <div id="breadcrumb">
    	<ul>
        	<li>Você está aqui:</li>
            <li><a href="servicos.php">Serviços</a></li>
        </ul>
    </div><!--breadcrumb-->
    <nav>
    	<ul>
            <li><a href="subcategoria_servico1.php">Facial</a></li>
            <li><a href="subcategoria_servico2.php">Corporal</a></li>
            <li><a href="subcategoria_servico3.php">Pele</a></li>
            <li><a href="subcategoria_servico4.php">Day Spa</a></li>
        </ul>
    </nav>         
	<section id="conteudo">
        <div id="wrap_menu_direito">
            <nav id="menu_direito">
                <ul>
                    <li class="odd"><a href="incluir/inclui_subcategoria_servico1.php">Incluir Sub Categoria</a></li>
                    <?php
						$sql = 'SELECT * FROM categorias_servico1';
						$resultado = mysql_query($sql)
						or die ("Não foi possível realizar a consulta.");
						while ($linha=mysql_fetch_array($resultado))
						{
						  echo '<li><a href="incluir/inclui_conteudo_servico1.php?id_subcategoria='.$linha['id'].'">'.$linha['nome'].'</a></li>';						  
						}
					?>	
                    
                </ul>
            </nav>
    	</div>
        <article>
        	<h2>Facial</h2>
            <p>Navegue no menu lateral Direito para adicionar ou editar serviços.</p>
        </article>
    </section>
    <footer>
    	<h4>Copyright - todos os direitos reservados - Desenvolvimento: <a href="http://www.novaz.com.br" target="_blank">Novaz - desenvolvendo o futuro da web</a> </h4>
    </footer>
</body>
</html>