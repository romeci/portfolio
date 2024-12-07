<?php
$rota = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$rotas = explode('/', $rota);
if(empty($rota)){
    require_once __DIR__ . "/public/index.html";
    exit();
}
print_r($rotas);
?>