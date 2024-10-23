        <?php include('../includes/header_depoimentos.php')?>
        <section id="conteudo">
        	<article id="box_verde">
            	<h2>Clientes falam sobre a Belle Vie</h2>
                <div class="slider1"><div class="indicator"></div></div>
                <div class="container">
                <div class="content">
                	<?php
						  $sql = 'SELECT * FROM `conteudo_depoimentos`';
						  $resultado = mysql_query($sql)
						  or die ("Não foi possível realizar a consulta.");
						  while ($linha=mysql_fetch_array($resultado))
						  {
							  echo '<div class="post_depoimento">';
							  echo '<h3>'.$linha['autor'].'</h3>';
							  echo '<p>'.$linha['texto'].'</p>';
							  echo '</div><!--post_depoimento-->';
						  }
                	?>
                    </div><!--content-->
                </div><!--container-->
            </article>
            <article id="wrap_fotos">
            	<ul>
                	<?php
						  $sql = 'SELECT * FROM fotos_depoimentos LIMIT 0,4';
						  $resultado = mysql_query($sql)
						  or die ("Não foi possível realizar a consulta.");
						  while ($linha=mysql_fetch_array($resultado))
						  {
							  echo '<li><a href="'.$linha['link'].'"><img src="../images/depoimentos/'.$linha['nome_thumb'].'" width="223px" heigth="225px"></a></li>';
						  }
                	?>
                </ul>
            </article><!--wrap_fotos-->
            <?php include('../includes/footer_internas.php')?>