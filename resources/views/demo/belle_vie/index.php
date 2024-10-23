        <?php include('includes/header.php')?>
        <section id="conteudo">
        	<div id="slider">
                <ul>
                	<?php
					  $sql = 'SELECT * FROM slides';
					  $resultado = mysql_query($sql)
					  or die ("Não foi possível realizar a consulta.");
					  while ($linha=mysql_fetch_array($resultado))
					  {
						  echo '<li><img src="images/slides/'.$linha['nome_foto'].'"></li>';
					  }
                ?>	
                 
                </ul>
			</div><!--slider-->
            <article id="wrap_fotos">
            	<ul>
                	<?php
						  $sql = 'SELECT * FROM fotos_principal LIMIT 0,4';
						  $resultado = mysql_query($sql)
						  or die ("Não foi possível realizar a consulta.");
						  while ($linha=mysql_fetch_array($resultado))
						  {
							  echo '<li><a href="'.$linha['link'].'"><img src="images/principal/'.$linha['nome_thumb'].'" width="220px" heigth="225px"></a></li>';
						  }
                	?>	
                </ul>
            </article><!--wrap_fotos-->
            <?php include('includes/footer.php')?>