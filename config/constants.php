<?php

return [    
    'indicadores' => [
        ['id' => '1', 'title' => 'Quantidade', 'on' => false, 'enable' => false],
        ['id' => '2', 'title' => 'Taxa por 100 mil Habitantes', 'on' => false, 'enable' => false],
        ['id' => '3', 'title' => 'Proporção', 'on' => false, 'enable' => false]
    ],
    'abrangencias' => [
        ['id'=> 1, 'title'=> 'País', 'plural'=> ' os Países', 'on'=>false, 'enable'=>false, 'listAll'=>1, 'height'=> '250px'],
        ['id'=> 2, 'title'=> 'Região', 'plural'=> 'as Regiões', 'on'=>false, 'enable'=>false, 'listAll'=>1, 'height'=> '250px'],
        ['id'=> 3, 'title'=> 'UF', 'plural'=> 'os Estados', 'on'=>false, 'enable'=>false, 'listAll'=>1, 'height'=> '400px'],
        ['id'=> 4, 'title'=> 'Município', 'plural'=> 'os Municípios', 'on'=>false, 'enable'=>false, 'listAll'=>0, 'height'=> '400px',
            'filter'=>[
                    ['id'=> 12, 'title'=> 'Acre'],
                    ['id'=> 27, 'title'=> 'Alagoas'],
                    ['id'=> 13, 'title'=> 'Amazonas'],
                    ['id'=> 16, 'title'=> 'Amapá'],
                    ['id'=> 29, 'title'=> 'Bahia'],
                    ['id'=> 23, 'title'=> 'Ceará'],
                    ['id'=> 53, 'title'=> 'Distrito Federal'],
                    ['id'=> 32, 'title'=> 'Espirito Santo'],
                    ['id'=> 52, 'title'=> 'Goiás'],
                    ['id'=> 21, 'title'=> 'Maranhão'],
                    ['id'=> 50, 'title'=> 'Mato Grosso do Sul'],
                    ['id'=> 51, 'title'=> 'Mato Grosso'],
                    ['id'=> 31, 'title'=> 'Minas Gerais'],
                    ['id'=> 15, 'title'=> 'Pará'],
                    ['id'=> 41, 'title'=> 'Paraná'],
                    ['id'=> 25, 'title'=> 'Paraíba'],
                    ['id'=> 26, 'title'=> 'Pernambuco'],
                    ['id'=> 22, 'title'=> 'Piauí'],
                    ['id'=> 33, 'title'=> 'Rio de Janeiro'],
                    ['id'=> 24, 'title'=> 'Rio Grande do Norte'],
                    ['id'=> 43, 'title'=> 'Rio Grande do Sul'],
                    ['id'=> 11, 'title'=> 'Rondônia'],
                    ['id'=> 14, 'title'=> 'Roraima'],
                    ['id'=> 42, 'title'=> 'Santa Catarina'],
                    ['id'=> 35, 'title'=> 'São Paulo'],
                    ['id'=> 28, 'title'=> 'Sergipe'],
                    ['id'=> 17, 'title'=> 'Tocantins'],
            ]
        ]
    ]
];
