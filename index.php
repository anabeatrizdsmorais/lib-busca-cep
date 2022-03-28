<?php

    require_once 'vendor/autoload.php';
    use \Abeat\ProjetoPhp\Search;

    $busca = new Search();
    $resultado = $busca->getAddressFromZipcode('35162220');

    print_r($resultado);
?>