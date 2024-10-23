        <?php include('../includes/header_internas.php')?>
        <section id="conteudo">
        	<article id="box_verde_cinza">
                <div class="wrap">
                    <!-- Menu Principal -->
                    <ul class="tabs" id="primario">
                        <li><a href="#">Facial</a></li>
                        <li><a href="#">Corporal</a></li>
                        <li><a href="#">Pele</a></li>
                        <li><a href="#">Day Spa</a></li>
                    </ul>    
                    <div class="pane">
                        <!-- FACIAL -->
                        <ul class="tabs" id="secundario">
							<?php
                                  $sql = 'SELECT * FROM categorias_servico1';
                                  $resultado = mysql_query($sql)
                                  or die ("Não foi possível realizar a consulta.");
                                  while ($linha=mysql_fetch_array($resultado))
                                  {
                                      echo '<li><a href="#">'.$linha['nome'].'</a></li>';
                                  }
                            ?>                        
                        </ul>       
                        <?php
                                  $sql = 'SELECT * FROM conteudo_servicos, fotos_conteudo_servicos';
                                  $resultado = mysql_query($sql)
                                  or die ("Não foi possível realizar a consulta.");
                                  while ($linha=mysql_fetch_array($resultado))
                                  {
                                      	echo '<div class="pane" id="conteudo_servicos">';
										echo '<img src="../images/servicos/'.$linha['nome_foto'].'"';
									 	echo '<p>'.$linha['texto'].'</p>';
									 	echo '</div>';
                                  }
						?> 
                    </div><!-- /pane -->        
                    <div class="pane">
                        <!-- CORPORAL -->
                        <ul class="tabs" id="secundario">
							<?php
                                  $sql = 'SELECT * FROM categorias_servico2';
                                  $resultado = mysql_query($sql)
                                  or die ("Não foi possível realizar a consulta.");
                                  while ($linha=mysql_fetch_array($resultado))
                                  {
                                      echo '<li><a href="#">'.$linha['nome'].'</a></li>';
                                  }
                            ?>                        
                        </ul>       
                        <?php
                                  $sql = 'SELECT * FROM conteudo_servicos2, fotos_conteudo_servicos2';
                                  $resultado = mysql_query($sql)
                                  or die ("Não foi possível realizar a consulta.");
                                  while ($linha=mysql_fetch_array($resultado))
                                  {
                                      	echo '<div class="pane" id="conteudo_servicos">';
										echo '<img src="../images/servicos/'.$linha['nome_foto'].'"';
									 	echo '<p>'.$linha['texto'].'</p>';
									 	echo '</div>';
                                  }
						?>
                    </div><!-- /pane -->                                      
                    <div class="pane">
                        <!-- PELE -->
                        <ul class="tabs" id="secundario">
							<?php
                                  $sql = 'SELECT * FROM categorias_servico3';
                                  $resultado = mysql_query($sql)
                                  or die ("Não foi possível realizar a consulta.");
                                  while ($linha=mysql_fetch_array($resultado))
                                  {
                                      echo '<li><a href="#">'.$linha['nome'].'</a></li>';
                                  }
                            ?>                        
                        </ul>       
                        <?php
                                  $sql = 'SELECT * FROM conteudo_servicos3, fotos_conteudo_servicos3';
                                  $resultado = mysql_query($sql)
                                  or die ("Não foi possível realizar a consulta.");
                                  while ($linha=mysql_fetch_array($resultado))
                                  {
                                      	echo '<div class="pane" id="conteudo_servicos">';
										echo '<img src="../images/servicos/'.$linha['nome_foto'].'"';
									 	echo '<p>'.$linha['texto'].'</p>';
									 	echo '</div>';
                                  }
						?>

                    </div><!-- /pane -->        
                    <div class="pane">
                        <!-- DaySpa -->
                        <ul class="tabs" id="secundario">
							<?php
                                  $sql = 'SELECT * FROM categorias_servico4';
                                  $resultado = mysql_query($sql)
                                  or die ("Não foi possível realizar a consulta.");
                                  while ($linha=mysql_fetch_array($resultado))
                                  {
                                      echo '<li><a href="#">'.$linha['nome'].'</a></li>';
                                  }
                            ?>                        
                        </ul>       
                        <?php
                                  $sql = 'SELECT * FROM conteudo_servicos4, fotos_conteudo_servicos4';
                                  $resultado = mysql_query($sql)
                                  or die ("Não foi possível realizar a consulta.");
                                  while ($linha=mysql_fetch_array($resultado))
                                  {
                                      	echo '<div class="pane" id="conteudo_servicos">';
										echo '<img src="../images/servicos/'.$linha['nome_foto'].'"';
									 	echo '<p>'.$linha['texto'].'</p>';
									 	echo '</div>';
                                  }
						?>
                    </div><!-- /pane -->      
                </div><!--wrap-->
            </article><!--box_verde-->
            <article id="wrap_fotos">
            	<ul>
                	<?php
						  $sql = 'SELECT * FROM fotos_servicos LIMIT 0,4';
						  $resultado = mysql_query($sql)
						  or die ("Não foi possível realizar a consulta.");
						  while ($linha=mysql_fetch_array($resultado))
						  {
							  echo '<li><a href="'.$linha['link'].'"><img src="../images/servicos/'.$linha['nome_thumb'].'" width="220px" heigth="225px"></a></li>';
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