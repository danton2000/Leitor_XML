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
echo "<hr>";

?>

<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="lib/css/style.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <title>XML</title>
</head>

<body>
    <nav class="nav_tabs">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
                <label id="label" for="tab1">NF-e</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Dados da NF-e</h3>
                        <hr id="linha_menu">
                    </div>

                    <div id="conteudo_menu">
                        <div class="row">
                            <div class="col">
                                <label id="label_xml">Modelo</label>
                                <input type="text" id="input_small" value="<?php echo $mod; ?>" readonly>
                            </div>

                            <div class="col">
                                <label id="label_xml">Serie</label>
                                <input type="text" id="input_small" value="<?php echo $serie; ?>" readonly>
                            </div>

                            <div class="col">
                                <label id="label_xml">Numero</label>
                                <input type="text" id="input_small" value="<?php echo $nNF; ?>" readonly>
                            </div>

                            <div class="col">
                                <label id="label_xml">Data de Emissão</label>
                                <input type="text" id="input_media" value="<?php echo $dhEmi; ?>" readonly>
                            </div>

                            <div class="col">
                                <label id="label_xml">Data Saída/Entrada</label>
                                <input type="text" id="input_media" value="<?php echo $dhEmi; ?>" readonly>
                            </div>

                            <div class="col">
                                <label id="label_xml">Valor total da Nota Fiscal</label>
                                <input type="text" id="input_media" value="<?php echo $vNF?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div id="header_sub_menu">
                        <h3 id="h3_sub_titulo">Emitente</h3>
                    </div>

                    <div id="conteudo_menu">
                        <div class="row">
                            <div class="col">
                                <label id="label_xml">CNPJ</label>
                                <input type="text" id="input_big" value="<?php ?>" readonly>
                            </div>
                            <div class="col">
                                <label id="label_xml">Nome/Razão Social</label>
                                <input type="text" id="input_big" value="<?php ?>" readonly>
                            </div>
                            <div class="col">
                                <label id="label_xml">Inscrição Estadual</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>
                            <div class="col">
                                <label id="label_xml">UF</label>
                                <input type="text" id="input_super_small" value="<?php ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div id="header_sub_menu">
                        <h3 id="h3_sub_titulo">Emissão</h3>
                    </div>

                    <div id="conteudo_menu">
                        <div class="row">
                            <div class="col-md-3">
                                <label id="label_xml">Processo</label>
                                <input type="text" value="<?php ?>" readonly>
                            </div>

                            <div class="col-md-3">
                                <label id="label_xml">Versão do Processo</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>

                            <div class="col-md-3">
                                <label id="label_xml">Tipo de Emissão</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>

                            <div class="col-md-3">
                                <label id="label_xml">Finalidade</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>

                            <div class="col-md-3">
                                <label id="label_xml">Natureza da Operação</label>
                                <input type="text" id="" value="<?php ?>" readonly>
                            </div>

                            <div class="col-md-3">
                                <label id="label_xml">Tipo da Operação</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>

                            <div class="col-md-3">
                                <label id="label_xml">Forma de Pagamento</label>
                                <input type="text" id="input_big" value="<?php ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab2">
                <label id="label" for="tab2">Emitente</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Dados do Emitente</h3>
                        <hr id="linha_menu">

                        <div id="conteudo_menu2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label id="label_xml">Nome/Razão Social</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Nome Fantasia</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">CNPJ</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Endereço</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Bairro</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">CEP</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Município</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Telefone</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">UF</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Pais</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Inscrição Estadual</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Inscrição Estadual do Substituto <br> Tributário</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Inscrição Municipal</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Município da Ocorrência do Fato <br> Gerador do ICMS</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">CNAE Fiscal</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Código do Regime Tributário</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab3">
                <label id="label" for="tab3">Destinatário</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Dados do Destinátario</h3>
                        <hr id="linha_menu">

                        <div id="conteudo_menu3">
                            <div class="row">
                                <div class="col">
                                    <label id="label_xml">Nome/Razão Social</label>
                                    <input type="text" id="input_mega" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">CNPJ/CPF/Id.Estrangeiro</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Endereço</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Bairro/Distrito</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">CEP</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Município</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Telefone</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">UF</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-6">
                                    <label id="label_xml">Pais</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-4">
                                    <label id="label_xml">Indicador IE</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-4">
                                    <label id="label_xml">Inscrição Estadual</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-sm-4">
                                    <label id="label_xml">Inscrição Suframa</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col">
                                    <label id="label_xml">IM</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col">
                                    <label id="label_xml">E-mail</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab4">
                <label id="label" for="tab4">Produtos e Serviços</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Dados dos Produtos e Serviços</h3>
                        <hr id="linha_menu">
                        <div id="conteudo_menu4">
                            <div class="row">
                                <div class="col">
                                    <label id="label_xml">Num.</label>
                                    <input type="text" id="input_super_small" value="<?php ?>" readonly>
                                </div>
                                <div class="col">
                                    <label id="label_xml">Descrição</label>
                                    <input type="text" id="input_grande" value="<?php ?>" readonly>
                                </div>
                                <div class="col">
                                    <label id="label_xml">Qtd</label>
                                    <input type="text" id="input_small" value="<?php ?>" readonly>
                                </div>
                                <div class="col">
                                    <label id="label_xml">Unidade Comercial</label>
                                    <input type="text" id="input_small" value="<?php ?>" readonly>
                                </div>
                                <div class="col">
                                    <label id="label_xml">Valor(R$)</label>
                                    <input type="text" id="input_small" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Código do Produto</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Código NCM</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Código CEST</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Indicador de Escada Relevante</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">CNPJ do Fabricante da Mercadoria</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Código de Benefício Fiscal na UF</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Código EX da TIPI</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">CFOP</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Outras Despesas Acessórias</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Valor do Desconto</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Valor Total do Frete</label>
                                    <input type="text" id="input_big_big" value="<?php ?>" readonly>
                                </div>
                                <div class="col-4">
                                    <label id="label_xml">Valor do Seguro</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col">
                                    <label id="label_xml">Indicador de Composicão do Valor Total da NF-e</label>
                                    <input type="text" id="input_mega2" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Código EAN Comercial</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Unidade Comercial</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Quantidade Comercial</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Código EAN Tributável</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Unidade Tributável</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Quantidade Tributável</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Valor unitário de comercialização</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-5">
                                    <label id="label_xml">Valor unitário de tributação</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Número do pedido de compra</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Item do pedido de compra</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-4">
                                    <label id="label_xml">Valor Aproximado dos Tributos</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-12">
                                    <label id="label_xml">Número da FCI</label>
                                    <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                                </div>

                                <div class="col-12">
                                    <h3 id="h3_sub_titulo2">ICMS Normal e ST</h3>
                                </div>

                                <div class="col">
                                    <label id="label_xml">Origem de Mercadoria</label>
                                    <input type="text" id="input_big_big2" value="<?php ?>" readonly>
                                </div>

                                <div class="col">
                                    <label id="label_xml">Código de Situação da Operação - Simples Nacional</label>
                                    <input type="text" id="input_big_big2" value="<?php ?>" readonly>
                                </div>

                                <div class="col-12">
                                    <h3 id="h3_sub_titulo2">PIS</h3>
                                </div>

                                <div class="col">
                                    <label id="label_xml">CST</label>
                                    <input type="text" id="input_mega2" value="<?php ?>" readonly>
                                </div>

                                <div class="col-12">
                                    <h3 id="h3_sub_titulo2">COFINS</h3>
                                </div>

                                <div class="col">
                                    <label id="label_xml">CST</label>
                                    <input type="text" id="input_mega2" value="<?php ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab5">
                <label id="label" for="tab5">Totais</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Totais</h3>
                        <hr id="linha_menu">

                        <div class="col-12">
                            <h3 id="h3_sub_titulo2">ICMS</h3>
                        </div>

                        <div id="conteudo_menu4">
                            <div class="row">
                                <div class="col-3">
                                    <label id="label_xml">Base de Cálculo ICMS</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor do ICMS</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor do ICMS Desonerado</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total do FCP</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total ICMS FCP</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total ICMS Interestadual UF Destino</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total ICMS Interestadual UF Rem.</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Base de Cálculo ICMS ST</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor ICMS Substituição</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total do FCP retido por ST</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total do FCP retido anteriormente por ST</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total dos Produtos</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor do Frete</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor do Seguro</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total dos Descontos</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total do II</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total do IPI</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total do IPI Devolvido</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor do PIS</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor da CONFINS</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Outras Despesas Acessórios</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Total da NFe</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>

                                <div class="col-3">
                                    <label id="label_xml">Valor Aproximado dos Tributos</label>
                                    <input type="text" id="input_media" value="<?php ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab6">
                <label id="label" for="tab6">Transporte</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Dados do Transporte</h3>
                        <hr id="linha_menu">

                        <div id="conteudo_menu">
                            <div class="row">
                                <div class="col">
                                    <label id="label_xml">Modalidade do Frete</label>
                                    <input type="text" id="input_mega2" value="<?php ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab7">
                <label id="label" for="tab7">Cobrança</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Formas de Pagamento</h3>
                        <hr id="linha_menu">
                    </div>

                    <div id="conteudo_menu4">
                        <div class="row">
                            <div class="col-4">
                                <label id="label_xml">Ind. Forma de Pagamento</label>
                                <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                            </div>

                            <div class="col-4">
                                <label id="label_xml">Meio de Pagamento</label>
                                <input type="text" id="input_grande" value="<?php ?>" readonly>
                            </div>

                            <div class="col-4">
                                <label id="label_xml">Valor do Pagamento</label>
                                <input type="text" id="input_grande" value="<?php ?>" readonly>
                            </div>

                            <div class="col-3">
                                <label id="label_xml">Tipo de Integração Pagamento</label>
                                <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                            </div>

                            <div class="col-3">
                                <label id="label_xml">CNPJ da Credenciadora</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>

                            <div class="col-3">
                                <label id="label_xml">Bandeira da operadora</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>

                            <div class="col-3">
                                <label id="label_xml">Número de autorização</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>

                            <div class="col-3">
                                <label id="label_xml">Troco</label>
                                <input type="text" id="input_media_grande" value="<?php ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab8">
                <label id="label" for="tab8">Informações Adicionas</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Informações Adicionais</h3>
                        <hr id="linha_menu">
                    </div>

                    <div id="conteudo_menu4">
                        <div class="row">
                            <div class="col">
                                <label id="label_xml">Formato de impressão DANFE</label>
                                <input type="text" id="input_mega2" value="<?php ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div id="header_sub_menu">
                        <h3 id="h3_sub_titulo">Informações Complementares de Interesse do Contribuiente</h3>
                    </div>

                    <div id="conteudo_menu">
                        <div class="row">
                            <div class="col">
                                <label id="label_xml">Descrição</label>
                                <input type="text" id="input_mega2" value="<?php ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div id="header_sub_menu">
                        <h3 id="h3_sub_titulo">Informações Suplementares</h3>
                    </div>

                    <div id="conteudo_menu">
                        <div class="row">
                            <div class="col">
                                <label id="label_xml">QR-Code</label>
                                <input type="text" id="input_mega2" value="<?php ?>" readonly>
                            </div>

                            <div class="col">
                                <label id="label_xml">URL NFC-e</label>
                                <input type="text" id="input_mega2" value="<?php ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</body>

</html>
