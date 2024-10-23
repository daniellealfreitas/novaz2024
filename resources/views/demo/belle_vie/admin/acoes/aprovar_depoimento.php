<?php
require("conexao.php");

$id= $_GET['id'];
$query = "UPDATE `depoimentos` SET `display` = '1' WHERE `depoimentos`.`id` = ".$id."";
$inserir = mysql_query($query);
if ($inserir) {
echo "Depoimento aprovado com suscesso!";
} else {
echo "Não foi possível aprovar o depoimento, tente novamente.";
// Exibe dados sobre o erro:
echo "<br />Dados sobre o erro:" . mysql_error();
}
?>
<script type="text/javascript">setTimeout("javascript:history.go(-1);",1250);</script>