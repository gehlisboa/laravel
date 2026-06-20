<?php

namespace App\Http\Controllers\Tendencias;

use App\Http\Controllers\Controller;

class TendenciasController extends Controller
{
    private $tendencias = [

        'y2k' => [
            'titulo' => 'Y2K Fashion',
            'descricao' => 'Estilo inspirado nos anos 2000, cores vibrantes e futurismo digital.',
            'imagens' => [
                'https://i.pinimg.com/736x/09/b5/a5/09b5a5dcd7487ae6d5a87a3b2a35d90f.jpg',
                'https://i.pinimg.com/736x/0a/ec/29/0aec297d9ea472898669ea56588ab964.jpg',
                'https://i.pinimg.com/736x/13/3c/f7/133cf776e01f1c5332cbeefa2e6e8446.jpg',
            ]
        ],

        'streetwear' => [
            'titulo' => 'Streetwear',
            'descricao' => 'Moda urbana, oversized, tênis e cultura de rua.',
            'imagens' => [
                'https://i.pinimg.com/736x/4a/e7/8e/4ae78e7715d3708efb18dcb017f42ec3.jpg',
                'https://i.pinimg.com/736x/76/96/2c/76962cc97f7b4b7bef2230de2dd40dd4.jpg',
                'https://i.pinimg.com/736x/bf/b9/a7/bfb9a7be95fb7312537252f3e9bde4b1.jpg',
            ]
        ],

        'luxo' => [
            'titulo' => 'Luxury Fashion',
            'descricao' => 'Alta costura, elegância e marcas de luxo.',
            'imagens' => [
                'https://i.pinimg.com/736x/f2/b4/1d/f2b41d2dccf9f2818c0de7f633f08249.jpg',
                'https://i.pinimg.com/736x/71/e2/3a/71e23a1ac0643ec4f73c748880083887.jpg',
            ]
        ],
        'paris-fashion' => [
            'titulo' => 'Paris Fashion',
            'descricao' => 'Inspirado nas passarelas parisienses, alta-costura, elegância e sofisticação.',
            'imagens' => [
                'https://i.pinimg.com/736x/f5/d0/f5/f5d0f5b53eac5b31ff0dd82997527546.jpg',
                'https://i.pinimg.com/736x/24/84/4e/24844ed99cf5539460203b7c5dd06589.jpg',
                'https://i.pinimg.com/1200x/c6/a7/9a/c6a79aba705f66ddf02c65baac1ab402.jpg',
            ]
        ],

        'editorial' => [
            'titulo' => 'Editorial Fashion',
            'descricao' => 'Fotografia de moda, direção criativa e narrativas visuais para revistas e campanhas.',
            'imagens' => [
                'https://i.pinimg.com/736x/41/9a/18/419a1888c0c8f1123df916347765cbbe.jpg',
                'https://i.pinimg.com/1200x/43/c0/f6/43c0f65165cbee144fc9856dbb5b598a.jpg',
                'https://i.pinimg.com/736x/06/90/8d/06908d00e272303270d079c2bb89a3fa.jpg',
            ]
        ],

        'runway' => [
            'titulo' => 'Runway',
            'descricao' => 'Desfiles, tendências de passarela e coleções apresentadas por grandes marcas.',
            'imagens' => [
                'https://i.pinimg.com/1200x/fc/40/74/fc407423d9ef6de97df426dabc17c9f6.jpg',
                'https://i.pinimg.com/1200x/1b/25/7a/1b257a610a46f12330bedcf9ae12d87e.jpg',
                'https://i.pinimg.com/1200x/08/fd/dc/08fddcb1c3d539b74d26db54b91533c6.jpg',
            ]
        ],

    ];

    public function show($categoria)
    {
        if (!isset($this->tendencias[$categoria])) {
            abort(404);
        }

        return view('tendencias.tendencias', [
            'tendencia' => $this->tendencias[$categoria]
        ]);
    }
}