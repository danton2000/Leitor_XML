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
        <ul>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
                <label id="label" for="tab1">NF-e</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Dados da NF-e</h3>
                        <hr id="linha_menu">
                    </div>

                    <div id="conteudo_menu" class="container">
                        <div class="row">
                            <div class="col">
                                <label id="label_xml">Modelo</label>
                                <input type="text" id="input_small" value="<?php ?>" readonly>
                            </div>
                            <div class="col">
                                <label id="label_xml">Serie</label>
                                <input type="text" id="input_small" value="<?php ?>" readonly>
                            </div>
                            <div class="col">
                                <label id="label_xml">Numero</label>
                                <input type="text" id="input_small" value="<?php ?>" readonly>
                            </div>
                            <div class="col">
                                <label id="label_xml">Data de Emissão</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>
                            <div class="col">
                                <label id="label_xml">Data Saída/Entrada</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>
                            <div class="col">
                                <label id="label_xml">Valor total da Nota Fiscal</label>
                                <input type="text" id="input_media" value="<?php ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div id="header_sub_menu">
                        <h3 id="h3_sub_titulo">Emitente</h3>
                    </div>

                    <div id="conteudo_menu" class="container">
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

                    <div id="conteudo_menu" class="container">
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

                        <div id="conteudo_menu2" class="container">
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

                        <div id="conteudo_menu3" class="container">
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
                        <div id="conteudo_menu4" class="container">
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
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab6">
                <label id="label" for="tab6">Transporte</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Transporte</h3>
                        <hr id="linha_menu">
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab7">
                <label id="label" for="tab7">Cobrança</label>
                <div class="content">
                    <div id="header_menu">
                        <hr id="linha_menu">
                        <h3 id="h3_titulo">Cobrança</h3>
                        <hr id="linha_menu">
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
                </div>
            </li>
        </ul>
    </nav>
</body>

</html>