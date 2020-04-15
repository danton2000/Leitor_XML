<?php

include_once "pegandoXML.php";

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
