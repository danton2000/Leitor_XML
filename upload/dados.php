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
			echo "Upload do arquivo $nome enviado!";
			
			$xml = simplexml_load_file($nome);
			$objeto = $xml;

			foreach ($objeto->NFe as $key => $item) {
				if (isset($item->infNFe)) {

					$nNF = $item->infNFe->ide->nNF;
					$mod = $item->infNFe->ide->mod;
					$serie = $item->infNFe->ide->serie;
					$nNF = $item->infNFe->ide->nNF;
					$dhEmi = $item->infNFe->ide->dhEmi;
					$vNF = $item->infNFe->total->ICMSTot->vNF;
				}
			}

			echo $nNF;
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

echo "<hr>";
echo '<button><a href="index.php">Voltar</button>';