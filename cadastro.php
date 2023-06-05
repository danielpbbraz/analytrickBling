<?php include('../htdocs/config/config.php'); ?>
<?php

$url = 'https://bling.com.br/Api/v2/produto/json/';

$xml = null;

$xml .= '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<produto>';
$xml .=   '<codigo>223435780</codigo>';
$xml .=   '<descricao>Produto01</descricao>';
$xml .=   '<situacao>Ativo</situacao>';
$xml .=   '<descricaoCurta>Descrição curta teste/descricaoCurta>';
$xml .=   '<descricaoComplementar>Descrição complementar teste</descricaoComplementar>';
$xml .=   '<un>Pc</un>';
$xml .=   '<vlr_unit>10.99</vlr_unit>';
$xml .=   '<preco_custo>5.99</preco_custo>';
$xml .=   '<peso_bruto>0.2</peso_bruto>';
$xml .=   '<peso_liq>0.18</peso_liq>';
$xml .=   '<class_fiscal>1000.01.01</class_fiscal>';
$xml .=   '<marca>Marca da Caneta</marca>';
$xml .=   '<origem>0</origem>';
$xml .=   '<estoque>10</estoque>';
$xml .=   '<gtin>223435780</gtin>';
$xml .=   '<gtinEmbalagem>54546</gtinEmbalagem>';
$xml .=   '<largura>11</largura>';
$xml .=   '<altura>21</altura>';
$xml .=   '<profundidade>31</profundidade>';
$xml .=   '<estoqueMinimo>1.00</estoqueMinimo>';
$xml .=   '<estoqueMaximo>100.00</estoqueMaximo>';
$xml .=   '<cest>28.040.00</cest>';
$xml .=   '<idGrupoProduto>12345</idGrupoProduto>';
$xml .=   '<condicao>Novo</condicao>';
$xml .=   '<freteGratis>N</freteGratis>';
$xml .=   '<linkExterno>https://minhaloja.com.br/meu-produto</linkExterno>';
$xml .=   '<observacoes>Observações do meu produtos</observacoes>';
$xml .=   '<producao>P</producao>';
$xml .=   '<dataValidade>20/11/2019</dataValidade>';
$xml .=   '<descricaoFornecedor>Descrição do fornecedor</descricaoFornecedor>';
$xml .=   '<idFabricante>0</idFabricante>';
$xml .=   '<codigoFabricante>123</codigoFabricante>';
$xml .=   '<unidadeMedida>Centímetros</unidadeMedida>';
$xml .=   '<garantia>4</garantia>';
$xml .=   '<itensPorCaixa>2</itensPorCaixa>';
$xml .=   '<volumes>2</volumes>';
$xml .=   '<imagens>';
$xml .=      '<url>https://bling.com.br/bling.jpg</url>';
$xml .=      '<url>https://bling.com.br/bling2.jpg</url>';
$xml .=   '</imagens>';
$xml .= '</produto>';


$posts = array (
    "apikey" => $token,
    "xml" => rawurlencode($xml)
);
$retorno = executeInsertProduct($url, $posts);
function executeInsertProduct($url, $data){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $url);
    curl_setopt($curl_handle, CURLOPT_POST, count($data));
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handle);
    curl_close($curl_handle);
    var_dump($response);
}
?>