<?php
# Capturando dados vindos do formulário
$nome = $_FILES['arquivo']['name'];
$erro = $_FILES['arquivo']['error'];
$temp = $_FILES['arquivo']['tmp_name'];
$tamanho = $_FILES['arquivo']['size'];
$tamanho_limite = 2097152;

# Tranformar string em array 
$array = explode(".", $nome);
# Retorna último índice do array
$extensao = end($array);
# Converte para letras minúsculas
$extensao = strtolower($extensao);

$destino = "arquivos/" . time() . "." . $extensao;

if ($extensao == "jpg" || $extensao == "png") {
	if ($tamanho_limite >= $tamanho) {
		# Realizando o upload
		if (move_uploaded_file($temp, $destino)) {
			echo "Upload realizado com sucesso!";
			echo "<br> <a href='" . $destino . "'>Visualizar</a>";
		} else {
			echo "Falha! ocorreu algum erro";
		}
	} else {
		echo "Falha! Tamanho do arquivo excedido";
	}
} else {
	echo "Falha! Extensão proibida";
}
