<?php
class frete extends model {

    public function getList($id){
        $array = array();
        $car = array();
        $produto = new produtos();
       
            $info = $produto->getInfo($id);

               $array[] = array(
                'peso' => $info['peso'],
                'altura' => $info['altura'],
                'largura' => $info['largura'],
                'comprimento' => $info['comprimento'],
                'diametro' => $info['diametro'],
                'preco' => $info['valor_por'],
            );
       
        return $array;
    }
    public function calculoFrete($cepDestino, $frete_qt, $id_produto) {
        $array = array(        
        );
         
//        Integração com o Webservice do Correios
        global $config;
        
        $lista = $this->getList($id_produto);
    
        $nVlPeso = 0;            
        $nVlComprimento = 0;
        $nVlAltura = 0;
        $nVlLargura = 0;
        $nVlDiametro = 0;
        $nVlValorDeclarado = 0;
        
        foreach ($lista as $item) {
            $nVlPeso += floatval($item['peso']);
            $nVlComprimento += floatval($item['comprimento']);
            $nVlAltura += floatval($item['altura']);
            $nVlLargura += floatval($item['largura']);
            $nVlDiametro += floatval($item['diametro']);
            $nVlValorDeclarado += floatval($item['preco'] * $frete_qt);
        }
        
        $soma = $nVlComprimento + $nVlAltura + $nVlLargura;
        if($soma > 200) {
            $nVlComprimento = 66;
            $nVlAltura = 66;
            $nVlLargura = 66;
        }
        
        if($nVlDiametro > 90){
            $nVlDiametro = 90;
        }
        
        if($nVlPeso > 40){
            $nVlPeso = 40;
        }
       
        $pac = array(
            'nCdServico' => '04510', //PAC
            'sCepOrigem' => $config['cepOrigem'],
            'sCepDestino' => $cepDestino,
            'nVlPeso' => $nVlPeso,
            'nCDFormato' => '1', //1 - para caixa, 3 - para envelope
            'nVlComprimento' => $nVlComprimento,
            'nVlAltura' => $nVlAltura,
            'nVlLargura' => $nVlLargura,
            'nVlDiametro' => $nVlDiametro,
            'sCdMaoPropria' => 'N',
            'nVlValorDeclarado' => $nVlValorDeclarado,
            'sCdAvisoRecebimento' => 'N',
            'StrRetorno' => 'xml'
        );
//        URL dos Correios
        $url = 'http://ws.correios.com.br/calculador/CalcPrecoprazo.aspx';
        
//        transformando o array em queryString (Ex.: preco=10&prazo=100...
        $pac = http_build_query($pac);//Pac
        
//        Inciando a biblioteca CURL que faz requisição Webservice
        $ch2 = curl_init($url.'?'.$pac);
        
//        Para receber a resposta       
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        $r2 = curl_exec($ch2);
        
//        transforma o xml em objeto
        $r2 = simplexml_load_string($r2);
        
       
        
        $array['preco'] = current($r2->cServico->Valor);
        $array['prazo'] = current($r2->cServico->PrazoEntrega);
        $array['codigo'] = current($r2->cServico->Codigo);
        $array['erro'] = current($r2->cServico->Erro);
        $array['MsgErro'] = current($r2->cServico->MsgErro );
               
        return $array;
    }
}


