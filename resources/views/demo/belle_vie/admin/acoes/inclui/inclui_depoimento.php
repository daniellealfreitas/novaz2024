<?php
require("../conexao.php");
$autor = $_POST['autor'];
$texto = $_POST['texto'];
$query = "INSERT INTO `conteudo_depoimentos` (`id`, `autor`, `texto`) VALUES (NULL, '$autor', '$texto');";
$inserir = mysql_query($query);
if ($inserir) {
echo "Texto inserido com sucesso!";
} else {
echo "Não foi possível edita o depoimento, tente novamente.";
// Exibe dados sobre o erro:
echo "<br />Dados sobre o erro:" . mysql_error();
}
?>
<script type="text/javascript">setTimeout("javascript:history.go(-1);",1250);</script>