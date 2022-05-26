<!DOCTYPE html>
<html>
<body>


<style>
  h1, h1:hover {
    font-size: 17px;
    font-color: #739BE4;
    font-family: 'Roboto Condensed', sans-serif;
    line-height: 1;
    text-align: center;

  }

  .holder {
    display: inline-flex;
    justify-content: center;


  }

  .imagem1 {
    width: 110px;
    margin-top: 30px;
    margin-bottom: 30px;
    margin-right: 80px;
    margin-left: 80px;

  }

  .imagem1::after {
    content: attr(data-title);
    /*estilo que coloco a legenda no lugar */
    position: absolute;
    width: 100%;
    bottom: -20px;
    left: 0;

  }
</style>


<?php

$acougue = [
  "titulo" => "Açougue",
  "src" => "https://wisesoft.com.br/seu-negocio/acougue/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/weight-scale_azul.png"

];

$agropecuaria = [
  "titulo" => "Agropecuaria",
  "src" => "https://wisesoft.com.br/seu-negocio/agropecuaria/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/fertilizer_azul.png"
  
];


$artigosreligiosos = [
 
  "titulo" => "Artigos Religiosos",
  "src" => "https://wisesoft.com.br/seu-negocio/artigos-religiosos/ ",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/goblet_azul.png"

];

$autopecas = [
  
  "titulo" => "Auto Peças",
  "src" => "https://wisesoft.com.br/seu-negocio/autopecas/ ",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/motor-eletrico_azul.png"

];


$bicicletaria = [
  
  "titulo" => "Bicicletaria",
  "src" => "https://wisesoft.com.br/seu-negocio/bicicletaria/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/bicicleta-eletrica_azul.png"

];

$brinquedos = [
  
  "titulo" => "Brinquedos",
  "src" => "https://wisesoft.com.br/seu-negocio/brinquedos/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/brinquedo_azul.png"

];

$cacaepesca = [
  
  "titulo" => "Caça e Pesca",
  "src" => "https://wisesoft.com.br/seu-negocio/caca-e-pesca/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/cana-de-pesca_azul.png"

];

$calcados = [
  
  "titulo" => "Calçados",
  "src" => "https://wisesoft.com.br/seu-negocio/calcados/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/salto-alto_azul.png"

];

$cosmeticos = [

  "titulo" => "Cosméticos",
  "src" => "https://wisesoft.com.br/seu-negocio/cosmeticos/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/cosmeticos_azul.png"

];

$departamento = [

  "titulo" => "Deparamento",
  "src" => "https://wisesoft.com.br/seu-negocio/departamento/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/televisao_azul.png"

];

$doce = [

  "titulo" => "Doces",
  "src" => "https://wisesoft.com.br/seu-negocio/doce/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/candy_azul.png"

];

$eletronicos = [
  "titulo" => "Eletrônicos",
  "src" => "https://wisesoft.com.br/seu-negocio/eletronicos/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/responsive_azul.png"

];

$emporios = [

  "titulo" => "Empório",
  "src" => "https://wisesoft.com.br/seu-negocio/emporios/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/copo-de-vinho.png"

];

$ferragem = [

  "titulo" => "Ferragens",
  "src" => "https://wisesoft.com.br/seu-negocio/ferragem/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/parafuso_azul.png"

];

$floricultura = [

  "titulo" => "Floricultura",
  "src" => "https://wisesoft.com.br/seu-negocio/floricultura/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/flor_azul.png"

];

$hortifruitis = [

  "titulo" => "Hortifruti",
  "src" => "https://wisesoft.com.br/seu-negocio/hortifruitis/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/fruits-and-vegetables_azul.png"

];

$instrumentosmuscais = [

  "titulo" => "Instrumentos Musicais",
  "src" => "https://wisesoft.com.br/seu-negocio/instrumentos-musicais/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/guitar_azul.png"

];

$lengerie = [

  "titulo" => "Lingerie e Sex Shop",
  "src" => "https://wisesoft.com.br/seu-negocio/lengerie/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/sutia_azul.png"

];


$livrarias = [

  "titulo" => "Livraria",
  "src" => "https://wisesoft.com.br/seu-negocio/livrarias/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/abra-o-livro_azul.png"

];

$materialesportivo = [

  "titulo" => "Materiais Esportivos",
  "src" => "https://wisesoft.com.br/seu-negocio/material-esportivo/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/esportes_azul.png"
 
];

$minimercado = [

  "titulo" => "Minimercado",
  "src" => "https://wisesoft.com.br/seu-negocio/minimercado/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/picnic_azul.png"

];

$movies = [

  "titulo" => "Movéis",
  "src" => "https://wisesoft.com.br/seu-negocio/movies/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/couch_azul.png"

];

$oficina = [

  "titulo" => "Oficinas",
  "src" => "https://wisesoft.com.br/seu-negocio/oficina/",
  "img" =>  "https://wisesoft.com.br/wp-content/uploads/2022/05/chave-de-roda_azul.png"

];

$noticas = [

  "titulo" => "Óticas",
  "src" => "https://wisesoft.com.br/seu-negocio/oticas/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/oculos_azul.png"

];

$padaria = [

  "titulo" => "Padaria ",
  "src" => "https://wisesoft.com.br/seu-negocio/padaria/",
  "img" =>  "https://wisesoft.com.br/wp-content/uploads/2022/05/bread_azul.png"

];

$presentes = [

  "titulo" => "Presentes",
  "src" => "https://wisesoft.com.br/seu-negocio/presentes/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/presente_azul.png"

];

$produtosnaturias = [

  "titulo" => "Produtos Naturais",
  "src" => "https://wisesoft.com.br/seu-negocio/produtos-naturias/",
  "img" =>  "https://wisesoft.com.br/wp-content/uploads/2022/05/colheita_azul.png"
];

$produtosregionais = [

  "titulo" => "Produtos Regionais",
  "src" => "https://wisesoft.com.br/seu-negocio/produtos-regionais/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/sacolas-de-compras_azul.png"

];

$servicos = [
 
  "titulo" => "Serviços",
  "src" => "https://wisesoft.com.br/seu-negocio/servicos/",
  "imge" => "https://wisesoft.com.br/wp-content/uploads/2022/05/lojista_azul.png"

];

$moda = [

  "titulo" => "Moda",
  "src" => "https://wisesoft.com.br/seu-negocio/moda/",
  "imge" => "https://wisesoft.com.br/wp-content/uploads/2022/05/shirt_azul.png"

];

$loja = [

  "titulo" => "Loja",
  "src" => "https://wisesoft.com.br/seu-negocio/loja/",
  "img" => "https://wisesoft.com.br/wp-content/uploads/2022/05/store_azul.png"

];



$arr = array( $acougue, $agropecuaria, $artigosreligiosos, $autopecas, $bicicletaria, $brinquedos, $cacaepesca, $calcados,
 $cosmeticos, $departamento, $doce, $eletronicos, $emporios, $ferragem, $floricultura, $hortifruitis, $instrumentosmuscais,
 $lengerie, $livrarias, $materialesportivo, $minimercado, $movies, $oficina, $noticas, $padaria, $presentes, $produtosnaturias,
 $produtosregionais, $servicos, $moda, $loja
  
);

shuffle($arr);
 
 
for ($i = 0; $i < 8; $i++) {
  echo "<div><img class='imagem1' src='{$arr[$i]["src"]}></div>";
  echo "<div><a href='{$arr[$i]["src"]}'>{$arr[$i]["titulo"]}</a></div>";
  echo "<br>";
}

?>
</body>
</html>
