<?php

if (isset($_GET['tipo'])){
    $cidade = $_GET['tipo'];
}

if (isset ($_GET['ordem'])) {
    $estado = $_GET['ordem'];
}

$cidades["Belo Horizonte - MG", 0.810];
$cidades["Americana - SP", 0.811];
$cidades["Ilha Solteira - SP", 0.811];
$cidades["Nova Lima - MG", 0.811];
$cidades["Santana de Parnaiba - SP", 0.811];
$cidades["Araraquara - SP", 0.811];
$cidades["Santo André - SP", 0.811];
$cidades["Vinhedo - SP", 0.811];
$cidades["Valinhos - SP", 0.811];
$cidades["Jundiaí - SP", 0.811];
$cidades["Curitiba - PR", 0.811];
$cidades["Brasília - DF", 0.811];
$cidades["Joaçaba - SC", 0.811];
$cidades["Niteroi - RJ", 0.811];
$cidades["Santos - SP", 0.811];
$cidades["Balneario Camboriu - SC", 0.811];
$cidades["Florianopolis - SC", 0.811];
$cidades["Santo André - SP", 0.811];
$cidades["Joaçaba - SC", 0.811];
$cidades["Joaçaba - SC", 0.811];

// arsort, asort, ksort, krsort
if($tipo == 'nome'&& $ordem == 'desc'){
    ksort($cidades);
}
elseif ($tipo =='sigla' && $ordem == "desc"){
    arsort($cidades);
}
elseif ($tipo =='nome' && $ordem == "asc"){
    ksort($cidades);
}
else {
    asort($cidades);
}


?>