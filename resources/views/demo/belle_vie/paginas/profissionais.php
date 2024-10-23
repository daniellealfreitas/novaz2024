        <?php include('../includes/header_internas.php')?>
        <section id="conteudo">
        	<article id="box_verde_cinza">
                <div class="wrap">
                    <!-- Menu Principal -->
                    <ul class="tabs" id="primario_profissionais">
                    	<?php
						  $sql = 'SELECT * FROM `categorias_profissionais`';
						  $resultado = mysql_query($sql)
						  or die ("Não foi possível realizar a consulta.");
						  while ($linha=mysql_fetch_array($resultado))
						  {
							  echo '<li><a href="#">'.$linha['nome'].'</a></li>';
						  }
                		?>
                    </ul>    
                    <?php
					  $sql = 'SELECT c.texto, f.nome_foto FROM conteudo_profissionais as c INNER JOIN fotos_conteudo_profissionais as f ON f.id_subcategoria = c.id_subcategoria';
					  $resultado = mysql_query($sql)
					  or die ("Não foi possível realizar a consulta.");
					  while ($linha=mysql_fetch_array($resultado))
					  {
						  	echo '<div class="pane"> ';
							echo '<div class="pane" id="conteudo_profissionais">';
							echo '<img src="../images/profissionais/'.$linha['nome_foto'].'" />';
							echo $linha['texto'];
							echo '</div>';
							echo '</div><!-- /pane -->';

					  }
					?> 
                </div><!--wrap-->
            </article><!--box_verde-->
            <article id="wrap_fotos">
            	<ul>
                	<?php
						  $sql = 'SELECT * FROM fotos_profissionais LIMIT 0,4';
						  $resultado = mysql_query($sql)
						  or die ("Não foi possível realizar a consulta.");
						  while ($linha=mysql_fetch_array($resultado))
						  {
							  echo '<li><a href="'.$linha['link'].'"><img src="../images/profissionais/'.$linha['nome_thumb'].'" width="220px" heigth="225px"></a></li>';
						  }
                	?>
                </ul>
            </article><!--wrap_fotos-->
            <!-- Java Script que ativa as tabs -->
			<script>
            $(function() {
                $("ul.tabs").tabs("> .pane");
            });
            </script>
            <?php include('../includes/footer_internas.php')?>