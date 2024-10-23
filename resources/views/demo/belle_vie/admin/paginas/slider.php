<?php include('../acoes/conexao.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Slider -  Belle Vie</title>
    <link href="../css/resetcss.css"  rel="stylesheet" type="text/css">
    <link href="../css/geral.css"  rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	< ![endif]-->    
</head>

<body>
	<header>
    	<h1>Administrador - Slider</h1>
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
            <li><a href="slider.php">Slider</a></li>
        </ul>
    </div><!--breadcrumb-->
    <nav>
    	<ul>
            <li><a href="slider.php">Slider</a></li>
            <li><a href="incluir/inclui_slide.php">Incluir Slide</a></li>
        </ul>
    </nav>         
	<section id="conteudo">
        <aside>
    		<h3>Dicas</h3>
            <p>Aqui você adicionar slides na página principal</p>
    	</aside>
        <article>
        	<h2>Slides</h2>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><strong>Nome do Slide</strong></td>
                <td style="width:10px;"><strong>Editar</strong></td>
                <td style="width:10px;"><strong>Deletar</strong></td>
              </tr>
				  <?php
                  $sql = "SELECT * FROM slides ORDER BY id DESC";
                  $resultado = mysql_query($sql)
                  or die ("Não foi possível realizar a consulta.");
                  while ($linha=mysql_fetch_array($resultado))
                  {
                      echo '<tr>';
                      echo '<td>';
					  echo '<img src="../../images/slides/'.$linha['thumb_foto'].'"';
					  echo "</td>";
                      echo "<td><a href='editar/edita_slide.php?id={$linha['id']}'>";
					  echo '<img src="../images/icones/icone_editar.png"></a></td>';
                      echo "<td><a href='../acoes/exclui/exclui_slide.php?id={$linha['id']}'>";
					  echo '<img src="../images/icones/icone_deletar.png"></a></td>';
                      echo '</tr>';
                  }
                ?>	              
            </table>
        </article>
    </section>
    <footer>
    	<h4>Copyright - todos os direitos reservados - Desenvolvimento: <a href="http://www.novaz.com.br" target="_blank">Novaz - desenvolvendo o futuro da web</a> </h4>
    </footer>
</body>
</html>