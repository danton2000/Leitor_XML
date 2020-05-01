<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="lib/css/style.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <title>XML</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
    <?php
    require_once("dados.php");

    
    ?>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">NF-e</a></li>
            <li><a data-toggle="tab" href="#menu2">Emitente</a></li>
            <li><a data-toggle="tab" href="#menu3">Destinatário</a></li>
            <li><a data-toggle="tab" href="#menu4">Produtos e Servições</a></li>
            <li><a data-toggle="tab" href="#menu5">Totáis</a></li>
            <li><a data-toggle="tab" href="#menu6">Transporte</a></li>
            <li><a data-toggle="tab" href="#menu7">Cobrança</a></li>
            <li><a data-toggle="tab" href="#menu8">Informações Adicionais</a></li>
        </ul>

        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <h3 id="h3_titulo">Dados da NF-e</h3>
                <div id="conteudo_menu">
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label id="label_xml">Modelo</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $mod; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Serie</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $serie; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Numero</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $nNF; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Data de Emissão</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $dhEmi; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Data Saída/Entrada</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor total da Nota Fiscal</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vNF; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div id="header_sub_menu">
                    <h3 id="h3_titulo">Emitente</h3>
                </div>

                <div id="conteudo_menu">
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label id="label_xml">CNPJ</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cnpj; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Nome/Razão Social</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $xNome; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Inscrição Estadual</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $IE; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">UF</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $UF; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div id="header_sub_menu">
                    <h3 id="h3_titulo">Emissão</h3>
                </div>

                <div id="conteudo_menu">
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label id="label_xml">Processo</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $procEmi; ?>" readonly>
                        </div>

                        <div class="col-md-3">
                            <label id="label_xml">Versão do Processo</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $verProc; ?>" readonly>
                        </div>

                        <div class="col-md-3">
                            <label id="label_xml">Tipo de Emissão</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $tpEmis; ?>" readonly>
                        </div>

                        <div class="col-md-3">
                            <label id="label_xml">Finalidade</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $finNFe; ?>" readonly>
                        </div>

                        <div class="col-md-5">
                            <label id="label_xml">Natureza da Operação</label>
                            <input type="text" class="form-control" id="input" id="input" value="<?php echo $natOp; ?>" readonly>
                        </div>

                        <div class="col-md-3">
                            <label id="label_xml">Tipo da Operação</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $tpNF; ?>" readonly>
                        </div>

                        <div class="col-md-3">
                            <label id="label_xml">Forma de Pagamento</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                    </div>
                </div>

            </div>
            <div id="menu2" class="tab-pane fade">
                <h3 id="h3_titulo">Dados do Emitente</h3>
                <div id="conteudo_menu2">
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <label id="label_xml">Nome/Razão Social</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $xNome; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Nome Fantasia</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $xFant; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">CNPJ</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cnpj; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Endereço</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $xLgr;
                                                                                        echo ", ";
                                                                                        echo $nro; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Bairro</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $xBairro; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">CEP</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cep; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Município</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cMun;
                                                                                        echo " - ";
                                                                                        echo $xMun; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Telefone</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $fone ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">UF</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $UF; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Pais</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cPais;
                                                                                        echo " - ";
                                                                                        echo $xPais; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Inscrição Estadual</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $IE; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Inscrição Estadual do Substituto <br> Tributário</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Inscrição Municipal</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Município da Ocorrência do Fato <br> Gerador do ICMS</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cMun; ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">CNAE Fiscal</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Código do Regime Tributário</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $CRT; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div id="menu3" class="tab-pane fade">
                <h3 id="h3_titulo">Dados do Destinátario</h3>
                <div id="conteudo_menu3">
                    <div class="row form-group">
                        <div class="col">
                            <label id="label_xml">Nome/Razão Social</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">CNPJ/CPF/Id.Estrangeiro</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Endereço</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Bairro/Distrito</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">CEP</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Município</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Telefone</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">UF</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-6">
                            <label id="label_xml">Pais</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label id="label_xml">Indicador IE</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label id="label_xml">Inscrição Estadual</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-sm-4">
                            <label id="label_xml">Inscrição Suframa</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col">
                            <label id="label_xml">IM</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col">
                            <label id="label_xml">E-mail</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu4" class="tab-pane fade">
                <h3 id="h3_titulo">Dados dos Produtos e Serviços</h3>
                <div id="conteudo_menu4">
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label id="label_xml">Num.</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Descrição</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $xProd; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Qtd</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $qCom; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Unidade Comercial</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $uCom; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Valor(R$)</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vProd; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Código do Produto</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cProd; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Código NCM</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $NCM; ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Código CEST</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Indicador de Escada Relevante</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">CNPJ do Fabricante da Mercadoria</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Código de Benefício Fiscal na UF</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Código EX da TIPI</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">CFOP</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Outras Despesas Acessórias</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Valor do Desconto</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Valor Total do Frete</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label id="label_xml">Valor do Seguro</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Indicador de Composicão do Valor Total da NF-e</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $indTot; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Código EAN Comercial</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cEAN; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Unidade Comercial</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $uCom; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Quantidade Comercial</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $qCom; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Código EAN Tributável</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $cEANTrib; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Unidade Tributável</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $uTrib; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Quantidade Tributável</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $qTrib; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor unitário de comercialização</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vUnCon; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor unitário de tributação</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vUnTrib; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Número do pedido de compra</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Item do pedido de compra</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Aproximado dos Tributos</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Número da FCI</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-12">
                            <h3 id="h3_sub_titulo2">ICMS Normal e ST</h3>
                        </div>

                        <div class="col-md-5">
                            <label id="label_xml">Origem de Mercadoria</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $orig; ?>" readonly>
                        </div>

                        <div class="col-md-5">
                            <label id="label_xml">Código de Situação da Operação - Simples Nacional</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $CSOSN; ?>" readonly>
                        </div>

                        <div class="col-12">
                            <h3 id="h3_sub_titulo2">PIS</h3>
                        </div>

                        <div class="col">
                            <label id="label_xml">CST</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $PIS; ?>" readonly>
                        </div>

                        <div class="col-12">
                            <h3 id="h3_sub_titulo2">COFINS</h3>
                        </div>

                        <div class="col">
                            <label id="label_xml">CST</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $COFINS; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu5" class="tab-pane fade">
                <h3 id="h3_titulo">Totais</h3>
                <div class="col-12">
                    <h3 id="h3_sub_titulo2">ICMS</h3>
                </div>

                <div id="conteudo_menu4">
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label id="label_xml">Base de Cálculo ICMS</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vBC; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor do ICMS</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vICMS; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor do ICMS Desonerado</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vICMSDeson; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total do FCP</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vFCP; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total ICMS FCP</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total ICMS Interestadual UF Destino</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total ICMS Interestadual UF Rem.</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Base de Cálculo ICMS ST</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vBCST; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor ICMS Substituição</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vST; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total do FCP retido por ST</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vFCPST; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total do FCP retido anteriormente por ST</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vFCPSTRet; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total dos Produtos</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vProd; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor do Frete</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vFrete; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor do Seguro</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vSeg; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total dos Descontos</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vDesc; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total do II</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vII; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total do IPI</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vIPI; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total do IPI Devolvido</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vIPIDevol; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor do PIS</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vPIS; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor da CONFINS</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vCOFINS; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Outras Despesas Acessórios</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vOutros; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Total da NFe</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vNF; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor Aproximado dos Tributos</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu6" class="tab-pane fade">
                <h3 id="h3_titulo">Dados do Transporte</h3>
                <div id="conteudo_menu">
                    <div class="row form-group">
                        <div class="col">
                            <label id="label_xml">Modalidade do Frete</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $modFrete; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu7" class="tab-pane fade">
                <h3 id="h3_titulo">Formas de Pagamento</h3>
                <div id="conteudo_menu4">
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label id="label_xml">Ind. Forma de Pagamento</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Meio de Pagamento</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $tPag; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Valor do Pagamento</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $vPag; ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Tipo de Integração Pagamento</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">CNPJ da Credenciadora</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Bandeira da operadora</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Número de autorização</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>

                        <div class="col-md-4">
                            <label id="label_xml">Troco</label>
                            <input type="text" class="form-control" id="input" value="<?php ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu8" class="tab-pane fade">
                <h3 id="h3_titulo">Informações Adicionais</h3>
                <div id="conteudo_menu4">
                    <div class="row form-group">
                        <div class="col">
                            <label id="label_xml">Formato de impressão DANFE</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $tpEmis; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div id="header_sub_menu">
                    <h3 id="h3_sub_titulo">Informações Complementares de Interesse do Contribuiente</h3>
                </div>

                <div id="conteudo_menu">
                    <div class="row form-group">
                        <div class="col">
                            <label id="label_xml">Descrição</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $infCpl; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div id="header_sub_menu">
                    <h3 id="h3_sub_titulo">Informações Suplementares</h3>
                </div>

                <div id="conteudo_menu">
                    <div class="row form-group">
                        <div class="col">
                            <label id="label_xml">QR-Code</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $qrCode; ?>" readonly>
                        </div>

                        <div class="col">
                            <label id="label_xml">URL NFC-e</label>
                            <input type="text" class="form-control" id="input" value="<?php echo $urlChave; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>