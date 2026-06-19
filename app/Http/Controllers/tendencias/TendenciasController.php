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
    ];

    public function index()
    {
        return view('tendencias.index', [
            'tendencias' => $this->tendencias
        ]);
    }

    public function show($categoria)
    {
        if (!isset($this->tendencias[$categoria])) {
            abort(404);
        }

        return view('tendencias.show', [
            'tendencia' => $this->tendencias[$categoria]
        ]);
    }
}