<?php
$nomeLoja = "ConstruTech";

$categorias = [
    'bruto' => 'Bruto',
    'ferramenta' => 'Ferramentas',
    'acabamento' => 'Acabamentos',
];

$produtos_base = [
    [
       'id' => 1,
        'nome' => 'Cimento',
        'preco' => 35.90,
        'categoria' => 'bruto',
        'descricao_curta' => 'Cimento Florinani 50kg.',
        'descricao' => 'O Cimento Todas as Obras 50kg Votoran é um produto de alta qualidade e versatilidade, adequado para diversas aplicações na construção civil. Pertencente à classe de cimentos comuns, ele é um tipo de cimento Portland utilizado em diversas etapas da construção.',
        'imagem' => 'IMG/Cimento-florinani.png',
    ],
    [
        'id' => 2,
        'nome' => 'Areia',
        'preco' => 9.00,
        'categoria' => 'bruto',
        'descricao_curta' => 'Areia Florinani 20kg.',
        'descricao' => 'A areia grossa é a mais utilizada, pois sua estrutura permite que seja usada em praticamente todas as fases da obra.',
        'imagem' => 'IMG/Areia-florinani',
    ],
    [
        'id' => 3,
        'nome' => 'PHP para iniciantes',
        'preco' => 79.00,
        'categoria' => 'livros',
        'descricao_curta' => 'Conceitos básicos de PHP.',
        'descricao' => 'Livro com exemplos simples: variáveis, arrays, formulários e includes.',
        'imagem' => 'https://m.media-amazon.com/images/I/711xDMXBjOL._SL1500_.jpg',
    ],
    [
        'id' => 4,
        'nome' => 'HTML e CSS na prática',
        'preco' => 65.00,
        'categoria' => 'livros',
        'descricao_curta' => 'Estrutura e estilo de páginas.',
        'descricao' => 'Do HTML semântico ao layout com CSS: flexbox e boas práticas.',
        'imagem' => 'https://m.media-amazon.com/images/I/41TIF6LZpOL._SX342_SY445_ML2_.jpg',
    ],
    [
        'id' => 5,
        'nome' => 'Caderno universitário',
        'preco' => 18.50,
        'categoria' => 'papelaria',
        'descricao_curta' => '96 folhas, capa dura.',
        'descricao' => 'Caderno para anotações de aula, espiral reforçado.',
        'imagem' => 'https://picsum.photos/seed/caderno/400/200',
    ],
    [
        'id' => 6,
        'nome' => 'Kit canetas coloridas',
        'preco' => 24.90,
        'categoria' => 'papelaria',
        'descricao_curta' => '12 cores.',
        'descricao' => 'Canetas hidrográficas para trabalhos e mapas mentais.',
        'imagem' => 'https://picsum.photos/seed/canetas/400/200',
    ],
];