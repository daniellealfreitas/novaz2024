        <?php include('../includes/header_internas.php')?>
        <section id="conteudo">
        	<article id="box_verde">
				<?php
					  $sql = 'SELECT * FROM empresa WHERE id=1';
					  $resultado = mysql_query($sql)
					  or die ("Não foi possível realizar a consulta.");
					  while ($linha=mysql_fetch_array($resultado))
					  {
						  echo '<h2>'.$linha['titulo'].'</h2>';
						  echo '<br>';
						  echo '<p>'.$linha['texto'].'</p>';
					  }
                ?>	  
            </article>
            <article id="wrap_fotos">
            	<ul>
                	<?php
						  $sql = 'SELECT * FROM fotos_empresa LIMIT 0,4';
						  $resultado = mysql_query($sql)
						  or die ("Não foi possível realizar a consulta.");
						  while ($linha=mysql_fetch_array($resultado))
						  {
							  echo '<li><a href="'.$linha['link'].'"><img src="../images/empresa/'.$linha['thumb_foto'].'" width="220px" heigth="225px"></a></li>';
						  }
                	?>	 
                </ul>
            </article><!--wrap_fotos-->
            <?php include('../includes/footer_internas.php')?>