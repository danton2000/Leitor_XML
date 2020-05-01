<?php

include_once "pegandoXML.php";

$objeto = $xml;

foreach ($objeto->NFe as $key => $item) {
    if (isset($item->infNFe)) {

        //NF-e
        $nNF = $item->infNFe->ide->nNF;
        $mod = $item->infNFe->ide->mod;
        $serie = $item->infNFe->ide->serie;
        $nNF = $item->infNFe->ide->nNF;
        $dhEmi = $item->infNFe->ide->dhEmi;
        $vNF = $item->infNFe->total->ICMSTot->vNF;
        $cnpj = $item->infNFe->emit->CNPJ;
        $xNome = $item->infNFe->emit->xNome;
        $IE = $item->infNFe->emit->IE;
        $UF = $item->infNFe->emit->enderEmit->UF;
        $procEmi = $item->infNFe->ide->procEmi;
        $verProc = $item->infNFe->ide->verProc;
        $tpEmis = $item->infNFe->ide->tpEmis;
        $finNFe = $item->infNFe->ide->finNFe;
        $natOp = $item->infNFe->ide->natOp;
        $tpNF = $item->infNFe->ide->tpNF;


        //Emitente
        $xNome = $item->infNFe->emit->xNome;
        $xFant = $item->infNFe->emit->xFant;
        $cnpj = $item->infNFe->emit->CNPJ;
        $xLgr = $item->infNFe->emit->enderEmit->xLgr;
        $nro = $item->infNFe->emit->enderEmit->nro;
        $xBairro = $item->infNFe->emit->enderEmit->xBairro;
        $cep = $item->infNFe->emit->enderEmit->CEP;
        $cMun = $item->infNFe->emit->enderEmit->cMun;
        $xMun = $item->infNFe->emit->enderEmit->xMun;
        $fone = $item->infNFe->emit->enderEmit->fone;
        $UF = $item->infNFe->emit->enderEmit->UF;
        $cPais = $item->infNFe->emit->enderEmit->cPais;
        $xPais = $item->infNFe->emit->enderEmit->xPais;
        $IE = $item->infNFe->emit->IE;
        $cMun = $item->infNFe->emit->enderEmit->cMun;
        $CRT = $item->infNFe->emit->CRT;

        //produtos e serviços
        $xProd = $item->infNFe->det->prod->xProd;
        $qCom = $item->infNFe->det->prod->qCom;
        $uCom = $item->infNFe->det->prod->uCom;
        $vProd = $item->infNFe->det->prod->vProd;
        $cProd = $item->infNFe->det->prod->cProd;
        $NCM = $item->infNFe->det->prod->NCM;
        $NCM = $item->infNFe->det->prod->NCM;
        $indTot = $item->infNFe->det->prod->indTot;
        $cEAN = $item->infNFe->det->prod->cEAN;
        $uCom = $item->infNFe->det->prod->uCom;
        $qCom = $item->infNFe->det->prod->qCom;
        $cEANTrib = $item->infNFe->det->prod->cEANTrib;
        $uTrib = $item->infNFe->det->prod->uTrib;
        $qTrib = $item->infNFe->det->prod->qTrib;
        $vUnCon = $item->infNFe->det->prod->vUnCon;
        $vUnTrib = $item->infNFe->det->prod->vUnTrib;
        $orig = $item->infNFe->det->imposto->ICMS->ICMSSN102->orig;
        $CSOSN = $item->infNFe->det->imposto->ICMS->ICMSSN102->CSOSN;
        $PIS = $item->infNFe->det->imposto->PIS->PISNT->CST;
        $COFINS = $item->infNFe->det->imposto->COFINS->COFINSNT->CST;

        //Totais
        $vBC = $item->infNFe->total->ICMSTot->vBC;
        $vICMS = $item->infNFe->total->ICMSTot->vICMS;
        $vICMSDeson = $item->infNFe->total->ICMSTot->vICMSDeson;
        $vFCP = $item->infNFe->total->ICMSTot->vFCP;
        $vBCST = $item->infNFe->total->ICMSTot->vBCST;
        $vST = $item->infNFe->total->ICMSTot->vST;
        $vFCPST = $item->infNFe->total->ICMSTot->vFCPST;
        $vFCPSTRet = $item->infNFe->total->ICMSTot->vFCPSTRet;
        $vProd = $item->infNFe->total->ICMSTot->vProd;
        $vFrete = $item->infNFe->total->ICMSTot->vFrete;
        $vSeg = $item->infNFe->total->ICMSTot->vSeg;
        $vDesc = $item->infNFe->total->ICMSTot->vDesc;
        $vII = $item->infNFe->total->ICMSTot->vII;
        $vIPI = $item->infNFe->total->ICMSTot->vIPI;
        $vIPIDevol = $item->infNFe->total->ICMSTot->vIPIDevol;
        $vPIS = $item->infNFe->total->ICMSTot->vPIS;
        $vCOFINS = $item->infNFe->total->ICMSTot->vCOFINS;
        $vOutros = $item->infNFe->total->ICMSTot->vOutros;
        $vNF = $item->infNFe->total->ICMSTot->vNF;

        //Transporte
        $modFrete = $item->infNFe->transp->modFrete;

        //Cobrança
        $tPag = $item->infNFe->pag->detPag->tPag;
        $vPag = $item->infNFe->pag->detPag->vPag;

        //informações adicionais
        $tpEmis = $item->infNFe->ide->tpEmis;
        $infCpl = $item->infNFe->infAdic->infCpl;
        $qrCode = $item->infNFeSupl->qrCode;
        $urlChave = $item->infNFeSupl->urlChave;
    }
}

