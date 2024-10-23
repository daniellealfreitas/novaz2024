<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'belle_vie';
$link = mysql_connect($servidor, $usuario, $senha)
or die('Não foi possivel conectar: ' . mysql_error());


mysql_select_db($banco) or die('Não pude selecionar o banco de dados');/* Faz a conexão com o Banco de Dados */

function reduz_imagem($img, $max_x, $max_y, $nome_foto) {
	/* define a função reduz_imagem */
	//pega o tamanho da imagem ($original_x, $original_y)
	list($width, $height) = getimagesize($img);
	$original_x = $width;
	$original_y = $height;
	// se a largura for maior que altura
	if($original_x > $original_y) {
	   $porcentagem = (100 * $max_x) / $original_x;   
	} 
	else {
	   $porcentagem = (100 * $max_y) / $original_y;   
	}
	$tamanho_x = $original_x * ($porcentagem / 100);
	$tamanho_y = $original_y * ($porcentagem / 100);
	$image_p = imagecreatetruecolor($tamanho_x, $tamanho_y);
	$image   = imagecreatefromjpeg($img);
	imagecopyresampled($image_p, $image, 0, 0, 0, 0, $tamanho_x, $tamanho_y, $width, $height);
	return imagejpeg($image_p, $nome_foto, 100);
}
@set_time_limit(0); 

class Upload
		{
        var $arquivo = "";
        var $erro = array ( "0" => "upload execultado com sucesso!",
                            "1" => "O arquivo é maior que o permitido pelo Servidor",
                            "2" => "O arquivo é maior que o permitido pelo formulario",
                            "3" => "O upload do arquivo foi feito parcialmente",     
                            "4" => "Não foi feito o upload do arquivo"
                           );
                
function Verifica_Upload()
{
		$this->arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
		if(!is_uploaded_file($this->arquivo['tmp_name'])) {
				return false;
		}       
		$get = getimagesize($this->arquivo['tmp_name']);
		
		if($get["mime"] != "image/jpeg")
		{       
				echo "<span style=\"color: white; border: solid 1px; background: red;\">Esse foto nao é uma imagem valida</span>";
				exit;
		}
		return true;
}

        function Envia_Arquivo()
        {
                if($this->Verifica_Upload()) {
                        $this->gera_fotos();
                        return true;            
                } else {
                        echo "<span style=\"color:white; border:solid 1px; background:red;\">".$this->erro[$this->arquivo['error']]."</span>";
                }
        }
        function gera_fotos()
        {
                $diretorio = "../../../images/servicos/";
                if(!file_exists($diretorio))
                {
                        mkdir($diretorio);
                }
				$id_subcategoria = $_GET['id_subcategoria'];
                $nome_foto  = "imagem_".time().".jpg";          
                $nome_thumb = "thumb_".time().".jpg";				
				reduz_imagem($this->arquivo['tmp_name'], 160, 160, $diretorio.$nome_foto);               
                                //passo o tamanho da thumbnail
                reduz_imagem($this->arquivo['tmp_name'], 175, 70, $diretorio.$nome_thumb); 
                echo "<span style=\"color: white; border: solid 1px; background: blue;\">".$this->erro[$this->arquivo['error']]."</span>";
				$query = "INSERT INTO `fotos_conteudo_servicos2` (`id`, `id_subcategoria`, `nome_foto`, `nome_thumb`) VALUES (NULL, '$id_subcategoria', '$nome_foto', '$nome_thumb');";
				$inserir = mysql_query($query);
      }       
}
$upload = new Upload();
$upload->Envia_Arquivo();
?>
<script type="text/javascript">setTimeout("javascript:history.go(-1);",1250);</script>
