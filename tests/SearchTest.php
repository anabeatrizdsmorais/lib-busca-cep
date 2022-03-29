<?php

/*
    Teste unitário com PHPUnit
*/

use PHPUnit\Framework\TestCase;
use \Abeat\ProjetoPhp\Search;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromzipcodeDefaultUsage (string $input, array $esperado) {
        $resultado = new Search();
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste() {
        return [
            "Endereço Rua Silvino Santos" => [
                "35162220",
                [
                    "cep" => "35162-220",
                    "logradouro" => "Rua Silvino Santos",
                    "complemento" => "",
                    "bairro" => "Ideal",
                    "localidade" => "Ipatinga",
                    "uf" => "MG",
                    "ibge" => "3131307",
                    "gia" =>"",
                    "ddd" => "31",
                    "siafi" => "4625"
                ]
            ],
            "Endereço Qualquer São Paulo" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" =>"Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}