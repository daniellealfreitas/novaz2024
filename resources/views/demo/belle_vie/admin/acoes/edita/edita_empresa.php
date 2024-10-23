<?php
require("../conexao.php");
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$query = "UPDATE `empresa` SET `titulo` = '$titulo', `texto` = '$texto' WHERE `id` = 1;";
$inserir = mysql_query($query);
if ($inserir) {
echo "Texto editado com sucesso!";
} else {
echo "Não foi possível edita a categoria, tente novamente.";
// Exibe dados sobre o erro:
echo "<br />Dados sobre o erro:" . mysql_error();
}
?>
<script type="text/javascript">setTimeout("javascript:history.go(-1);",1250);</script>