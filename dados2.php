<?php
//echo "<pre>";
//print_r($_FILES);
//echo "</pre>";
// Capturando dados(arquivo) vindo do furmulário
$nome = $_FILES['arquivo']['name']; //pegando os indices dos arrays
$erro = $_FILES['arquivo']['error'];
$tmp = $_FILES['arquivo']['tmp_name'];
$tamanho = $_FILES['arquivo']['size'];
$tamanho_limite = 2097152;
//só dois tipos de extensão jpg ou png

$XML = $_FILES;

//$nome = 'arquivo.png'
$array = explode(".", $nome); //ignora tudo antes do .
$extensao = end($array); //pega o ultimo endice que é a extensão do arquivo
//echo $extensao;
// Realizando o upload
//move_uploaded_file($tmp, $destino);//função nativa do php, precisa de 2 parametros(onde ele tá, para aonde eu vou colocar);
$destino = "arquivos/" . "$nome" . "." . $extensao;

if ($extensao == "xml") {
	if ($tamanho_limite >= $tamanho) {
		# Realizando o upload
		if (move_uploaded_file($tmp, $destino)) {
			echo "Upload do arquivo $nome enviado!"."<br>";
            $xml = simplexml_load_file($destino);
            unlink($destino);

			foreach ($xml->NFe as $key => $item) {
				if (isset($item->infNFe)) {
                    
                    $det = $item->infNFe->det;
                    foreach($det as $valor){
                        
						echo $valor->prod->cProd."<br>";
						echo $valor->prod->cEAN."<br>";
						echo $valor->prod->NCM."<br>";
						echo $valor->prod->CFOP."<br>";
                        echo $valor->prod->xProd."<br>";
                        echo $valor->prod->qCom."<br>";
                        echo $valor->prod->uCom."<br>";
                        echo $valor->prod->vUnCom."<br>";
                        echo $valor->prod->vProd."<br>"."<br>";
                    

                    }
				}
			}

		} else {
			echo "Falha ocorreu algum erro";
		}
	} else {
		echo "Falha! Tamanho do arquivo $nome maior de $tamanho_limite";
	}
} else {
	echo "Extensão do arquivo $nome não está correta!";
	echo "<hr>";
}

?>

