<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    private $usuarios = [

        'cecilia' => [
            'username' => 'cecivalença',
            'foto' => 'https://i.pinimg.com/736x/5a/79/68/5a7968b1bbf2b60f20287fd3a2e6d90d.jpg',
            'profissao' => 'Estudante de Moda',
            'bio' => 'Eu sempre busco criar algo original e bonito.',
            'stats' => [
                'projetos' => 75,
                'seguidores' => '14k',
                'conexoes' => 92
            ],
            'posts' => [
                'https://i.pinimg.com/control1/736x/c6/63/15/c6631564687992a36a16913a9140cb02.jpg',
                'https://i.pinimg.com/736x/fe/88/d0/fe88d0722b5f560aa3bb52f2a3f0036b.jpg',
                'https://i.pinimg.com/control1/1200x/d6/b2/12/d6b212be2f29113a6ce5ade7badc9730.jpg'
            ],
            'moodboards' => [
                'https://i.pinimg.com/736x/09/b5/a5/09b5a5dcd7487ae6d5a87a3b2a35d90f.jpg',
                'https://i.pinimg.com/1200x/30/d5/b8/30d5b8d20cfb7e73a3e8a743899d04dc.jpg',
                'https://i.pinimg.com/control1/736x/aa/5e/b0/aa5eb0309b001188c9853a51a9a0341e.jpg',
            ]
        ],

        'catarina' => [
            'username' => 'catbellini',
            'foto' => 'https://i.pinimg.com/736x/09/b0/8a/09b08ac85fcc8ea869340ed26a51b2c4.jpg',
            'profissao' => 'Visual Merchandiser',
            'bio' => 'Transformar espaços em experiências é o que guia o meu trabalho.',
            'stats' => [
                'projetos' => 60,
                'seguidores' => '10k',
                'conexoes' => 70
            ],
            'posts' => [
                'https://i.pinimg.com/736x/db/38/c4/db38c4a644ee871758b650ccab1085a0.jpg',
                'https://i.pinimg.com/736x/90/c3/14/90c314590f4017b3d8d20639621bfb3b.jpg'
            ],
            'moodboards' => [
                'https://i.pinimg.com/736x/4e/8d/e2/4e8de245c33227fd6c3e6d5105b562e5.jpg',
                'https://i.pinimg.com/736x/ff/7e/c6/ff7ec6bce8c7263ee04f568d7a45e2b9.jpg'
            ]
        ],

        'helena' => [
            'username' => 'helealessandro',
            'foto' => 'https://i.pinimg.com/736x/58/20/8d/58208d6b02c4991555fb7374f1ee2a00.jpg',
            'profissao' => 'Modelo e Fashion Designer',
            'bio' => 'Criadora especializada em passarela e design editorial.',
            'stats' => [
                'projetos' => 80,
                'seguidores' => '20k',
                'conexoes' => 110
            ],
            'posts' => [
                'https://i.pinimg.com/736x/38/f9/4d/38f94d6da2c2136dd31e84f8119cafc8.jpg',
                'https://i.pinimg.com/736x/9d/0d/df/9d0ddf692bedb015c16fbd651a552680.jpg'
            ],
            'moodboards' => [
                'https://i.pinimg.com/1200x/09/a0/39/09a0393a5ed6e545bd244dc71ebd6293.jpg',
                'https://i.pinimg.com/736x/92/0d/33/920d33867a059c6665954954f81ff10c.jpg'
            ]
        ],

        'olivia' => [
            'username' => 'livfontenelle',
            'foto' => 'https://i.pinimg.com/736x/c6/fd/58/c6fd587c411a7423837845b4b9fc5171.jpg',
            'profissao' => 'Modelo e Fashion Designer',
            'bio' => 'Criadora especializada em passarela e design conceitual.',
            'stats' => [
                'projetos' => 65,
                'seguidores' => '18k',
                'conexoes' => 95
            ],
            'posts' => [
                'https://i.pinimg.com/1200x/2a/5c/2d/2a5c2d1c586547fee2b8a0f395b649cc.jpg',
                'https://i.pinimg.com/1200x/e3/3b/16/e33b16d2f733fdf75dfa5db7f35f0d80.jpg'
            ],
            'moodboards' => [
                'https://i.pinimg.com/736x/76/ac/21/76ac2193cb68fe09816f2d962ee0ee74.jpg',
                'https://i.pinimg.com/736x/4a/c1/93/4ac193241d6bab9b37f22b64c5b442d4.jpg'
            ]
        ],
    ];

    public function show($user)
    {
        if (!isset($this->usuarios[$user])) {
            abort(404);
        }

        $usuario = $this->usuarios[$user];

        return view('usuario.usuario', compact('usuario'));
    }
}