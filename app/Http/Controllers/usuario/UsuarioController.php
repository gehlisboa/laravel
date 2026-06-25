<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    private $usuarios = [

        'catarina' => [
            'username' => '@catbellini',
            'foto' => 'https://i.pinimg.com/736x/09/b0/8a/09b08ac85fcc8ea869340ed26a51b2c4.jpg',
            'profissao' => 'Visual Merchandiser',
            'bio' => 'Transformar espaços em experiências é o que guia o meu trabalho. Por meio da composição visual, da estratégia e da identidade de marca, crio ambientes que conectam produtos, narrativas e pessoas.',
            'stats' => [
                'projetos' => 60,
                'seguidores' => '10k',
                'conexoes' => 70
            ],
            'posts' => [
                'https://i.pinimg.com/736x/db/38/c4/db38c4a644ee871758b650ccab1085a0.jpg',
                'https://i.pinimg.com/control1/1200x/d8/db/7b/d8db7b886f1c889d3a7b7d38a1332620.jpg',
                'https://i.pinimg.com/736x/90/c3/14/90c314590f4017b3d8d20639621bfb3b.jpg',
                'https://i.pinimg.com/control1/736x/68/ab/83/68ab83f974124115406cafccad5bc1ea.jpg',
                'https://i.pinimg.com/736x/8e/0a/e0/8e0ae02e7e78ffb79a1a5a99dca43730.jpg',
                'https://i.pinimg.com/736x/ee/e7/27/eee7275c2065ea985dce493c25dbe2de.jpg',
                'https://i.pinimg.com/736x/5e/a8/dc/5ea8dc2046b3647683a9827c334448c8.jpg',
                'https://i.pinimg.com/control1/1200x/39/28/e2/3928e259fce9b6d8490366b7ab8df106.jpg',
                'https://i.pinimg.com/736x/ff/79/66/ff79667dc665241c4f49246ef7ffea74.jpg',
                'https://i.pinimg.com/736x/a8/4d/e8/a84de86d20231ddfbf5b5b8f7fa8db94.jpg',
                'https://i.pinimg.com/736x/8d/66/f9/8d66f9696a99feeff4e4caf60a990ab5.jpg',
                'https://i.pinimg.com/736x/c3/40/73/c34073847ebd082823ba3cfe1eeea952.jpg',
                'https://i.pinimg.com/control1/1200x/c8/16/ed/c816ed7482f3247ac8ac0be2cbef57c7.jpg',
                'https://i.pinimg.com/736x/61/ac/1c/61ac1ca80a05ef6073b1a537fff1880c.jpg',
                'https://i.pinimg.com/736x/a9/b9/91/a9b99173f8dea2165f5202d8e10f7935.jpg',
                'https://i.pinimg.com/474x/cd/87/92/cd8792b197429f84da0e105ca06611dd.jpg',
                'https://i.pinimg.com/736x/94/5b/71/945b71c86264e54c4c169fa68f4d8277.jpg',
                'https://i.pinimg.com/1200x/32/be/15/32be1548e06bd0aedd425de9d687e549.jpg',
                'https://i.pinimg.com/736x/38/29/8b/38298b01e647dffb01bdfdc6d063296e.jpg'
            ],
            'trabalhos/interesses' => [
                'https://i.pinimg.com/736x/09/b5/a5/09b5a5dcd7487ae6d5a87a3b2a35d90f.jpg',
                'https://i.pinimg.com/1200x/30/d5/b8/30d5b8d20cfb7e73a3e8a743899d04dc.jpg',
                'https://i.pinimg.com/control1/736x/aa/5e/b0/aa5eb0309b001188c9853a51a9a0341e.jpg',
                'https://i.pinimg.com/736x/4e/8d/e2/4e8de245c33227fd6c3e6d5105b562e5.jpg',
                'https://i.pinimg.com/736x/ff/7e/c6/ff7ec6bce8c7263ee04f568d7a45e2b9.jpg',
                'https://i.pinimg.com/control1/1200x/f6/60/59/f66059e2f8175ad01e9c6e95c7ca88e7.jpg',
                'https://i.pinimg.com/control1/1200x/2c/d8/3d/2cd83d51086f1e673079b50c78b5dec6.jpg',
                'https://i.pinimg.com/control1/1200x/37/f3/3e/37f33e02c73615747b0d65e0fbec7496.jpg',
                'https://i.pinimg.com/control1/736x/d7/ae/f4/d7aef4ae51cd4415c0c69255e2d8b29e.jpg',
                'https://i.pinimg.com/736x/2a/28/8a/2a288ae327fafb0429ff5c9c3a4cf504.jpg',
                'https://i.pinimg.com/736x/01/cc/7f/01cc7f2217c65068557a65b340ffc1be.jpg',
                'https://i.pinimg.com/control1/736x/df/f5/66/dff56696f6a214dc5d4c2a081e60725c.jpg',
                'https://i.pinimg.com/control1/736x/20/de/8c/20de8cefead4f09bfa841f695d77960c.jpg',
                'https://i.pinimg.com/control1/736x/60/cf/56/60cf56cd49d8929cd80dfad538556393.jpg',
                'https://i.pinimg.com/1200x/05/2a/80/052a80d74bb58b2f22bcb122a9872263.jpg',
                'https://i.pinimg.com/1200x/9f/ba/ed/9fbaedaca7aaa5d6bd02a6fe83e30529.jpg',
                'https://i.pinimg.com/736x/e5/7f/3e/e57f3e177200dda918e4830f33b22fc6.jpg',
                'https://i.pinimg.com/736x/b9/6c/b9/b96cb921686fb2d64264b134c4cb46ed.jpg'
                            ]    
        ],

        'helena' => [
            'username' => '@helealessandro',
            'foto' => 'https://i.pinimg.com/736x/58/20/8d/58208d6b02c4991555fb7374f1ee2a00.jpg',
            'profissao' => 'Fotografa de Passarela',
            'bio' => ' Minha paixão pela fotografia está em capturar o encontro entre arte,
             moda e expressão humana, transformando momentos em memórias duradouras.',
            'stats' => [
                'projetos' => 80,
                'seguidores' => '20k',
                'conexoes' => 110
            ],
            'posts' => [
                'https://i.pinimg.com/736x/59/7d/89/597d89d2872cf59a24cae2e94ecde195.jpg',
                'https://i.pinimg.com/736x/95/73/12/9573125d50bd64c4a6cc83258b71f57f.jpg',
                'https://i.pinimg.com/736x/45/a0/16/45a0163e9fdfe7b31ba8525b9a643530.jpg',
                'https://i.pinimg.com/1200x/04/9a/8b/049a8bc984d4d57f2a2efbaac351a501.jpg',
                'https://i.pinimg.com/736x/9d/0d/df/9d0ddf692bedb015c16fbd651a552680.jpg',
                'https://i.pinimg.com/1200x/37/39/2f/37392f6ff4a9babf27b57be7437b3642.jpg',
                'https://i.pinimg.com/736x/94/8f/b9/948fb929a75b82ebd59d3052c01f611c.jpg',
                'https://i.pinimg.com/736x/20/1f/17/201f17bda2910dce85b5685f60f7d61b.jpg',
                'https://i.pinimg.com/1200x/ad/bf/89/adbf8905ddf5c5d2000c8de5f1117a5c.jpg',
                'https://i.pinimg.com/736x/a0/8f/e7/a08fe784eacb7894e8488e310241d362.jpg',
                'https://i.pinimg.com/1200x/3d/0b/7e/3d0b7e3f3802cef5eaac578513402bec.jpg',
                'https://i.pinimg.com/736x/3e/6f/3a/3e6f3ac26e7c1a1e207db65ec3b32faf.jpg'
            ],
            'trabalhos/interesses' => [
                'https://i.pinimg.com/1200x/ac/fb/4f/acfb4f7ef1787d037118409955e601a4.jpg',
                'https://i.pinimg.com/736x/bf/3a/0b/bf3a0b2bfab9764f4e1c4a647a87b2f1.jpg',
                'https://i.pinimg.com/736x/5a/04/77/5a0477ed7357cdbcf9f33030e46fff7e.jpg',
                'https://i.pinimg.com/1200x/f1/bd/e1/f1bde1574361abd86951c7bccc1163e7.jpg',
                'https://i.pinimg.com/736x/34/67/b8/3467b8da125f9e953981a45f4f2ac870.jpg',
                'https://i.pinimg.com/736x/8c/29/a2/8c29a2a73da9ed499287a81fdc2d8a94.jpg',
                'https://i.pinimg.com/736x/1b/5b/87/1b5b87aca07b02926a7b7288484de95f.jpg',
                'https://i.pinimg.com/736x/89/53/21/8953210bef1e79989ef7163d66d809d1.jpg',
                'https://i.pinimg.com/736x/e1/d5/3a/e1d53a8d0ef333894e9a549f0ea92660.jpg',
                'https://i.pinimg.com/736x/b1/27/7a/b1277a9ce9e6d029cc8634384225d1b4.jpg',
                'https://i.pinimg.com/736x/64/31/22/643122b372edff818fae0a15f69d1aff.jpg',
                'https://i.pinimg.com/736x/e4/63/ba/e463ba9d5e47f5cd1514978b59f8883e.jpg'
            ]
        ],

        'olivia' => [
            'username' => 'livfontenelle',
            'foto' => 'https://i.pinimg.com/736x/46/cd/66/46cd664aafbf127b0a801caec18075c3.jpg',
            'profissao' => 'Estilista/Caça Tendências ',
            'bio' => 'Acredito que a moda vai além das roupas: ela reflete comportamento, identidade e transformação. Minha missão é traduzir essas mudanças em designs inovadores e atemporais.',
            'stats' => [
                'projetos' => 65,
                'seguidores' => '18k',
                'conexoes' => 95
            ],
            'posts' => [
                'https://i.pinimg.com/736x/8b/64/41/8b64413047a65331f9ff31a3b3aa2d1d.jpg',
                'https://i.pinimg.com/736x/09/27/90/092790877211cb1a544b27a1fd61f43a.jpg',
                'https://i.pinimg.com/736x/ad/29/77/ad29774f58e4ea21f8270203196838f2.jpg',
                'https://i.pinimg.com/736x/22/f1/c3/22f1c33af4165b312b8db4640e522c12.jpg',
                'https://i.pinimg.com/736x/69/c5/df/69c5df51bd73eca15c37ed01a37beba5.jpg',
                'https://i.pinimg.com/1200x/f4/97/c1/f497c1e6cf541391079e39dba0f31633.jpg',
                'https://i.pinimg.com/1200x/68/e6/11/68e6118df8f50bcb46bddb3493392ce1.jpg',
                'https://i.pinimg.com/736x/61/3e/01/613e016047ecfa47a4e3b7cd1ecfcb76.jpg',
                'https://i.pinimg.com/1200x/90/c0/93/90c0939d95e656118e893c89a57132a6.jpg',
                'https://i.pinimg.com/736x/45/65/74/45657482649f19b1ddc5136a92a9e4d0.jpg',
                'https://i.pinimg.com/1200x/3c/23/02/3c23021d6cacc33e6d31d4ad186b5ba4.jpg',
                'https://i.pinimg.com/736x/56/93/6e/56936ede66c5a1198d14cba01a5243ac.jpg',
                'https://i.pinimg.com/736x/3f/02/98/3f02982b2db1329717c6cae3240c645e.jpg',
                'https://i.pinimg.com/736x/e5/3b/6c/e53b6c93171d5e658b659e6255155806.jpg',
                'https://i.pinimg.com/736x/e8/5d/ea/e85deac770816eb0467c1d4623d320ba.jpg',
                'https://i.pinimg.com/1200x/b0/92/43/b09243766a517f30cfda70711e30d2de.jpg',
            ],
            'trabalhos/interesses' => [
               'https://i.pinimg.com/736x/44/6f/47/446f47d2352710b811c4b5c48bdbeef3.jpg',
                'https://i.pinimg.com/736x/99/62/a6/9962a62aca71bb4b34824b910d761dbf.jpg',
                'https://i.pinimg.com/736x/c7/91/61/c791612b74ec74b4f49edd9622012bc8.jpg',
                'https://i.pinimg.com/736x/aa/63/44/aa634459e991318988e449c82b9324cd.jpg',
                'https://i.pinimg.com/736x/fb/24/4d/fb244dc4ed866337cd26604c134af9bc.jpg',
                'https://i.pinimg.com/736x/1d/d7/dd/1dd7dd2e726e4f2d69ee933729f76aef.jpg',
                'https://i.pinimg.com/736x/58/c9/80/58c980a8c397fb5f29defbe7afbdf40a.jpg',
                'https://i.pinimg.com/736x/e0/06/01/e0060167531b354488e0324798e243fe.jpg',
                'https://i.pinimg.com/736x/76/ac/21/76ac2193cb68fe09816f2d962ee0ee74.jpg',
                'https://i.pinimg.com/1200x/09/a0/39/09a0393a5ed6e545bd244dc71ebd6293.jpg',
                'https://i.pinimg.com/1200x/3e/89/d8/3e89d8e30adce738b938839fec3a355e.jpg',
                'https://i.pinimg.com/736x/68/9f/c9/689fc91e5e97d3b4e1c8fc85cccc3d6e.jpg',
                'https://i.pinimg.com/736x/35/cb/9c/35cb9c3e49fbe2ae8d8844fce5be3e67.jpg',
                'https://i.pinimg.com/736x/2e/4b/c3/2e4bc3bfce20d16bb472e16c4a80e6c2.jpg',
                'https://i.pinimg.com/736x/1b/68/69/1b6869866ccfc748fa09ddbe6eccfbca.jpg'
            ]
        ],
         'alessandra' => [
            'username' => '@alesantoro',
            'foto' => 'https://i.pinimg.com/736x/f7/b4/c7/f7b4c73eebc45ad7fe0cc26abbc234c2.jpg',
            'profissao' => 'Hair Stylist',
            'bio' => ' Atuando na interseção entre moda e arte,
             crio produções capilares que elevam conceitos criativos e acrescentam profundidade a cada projeto visual',
            'stats' => [
                'projetos' => 22,
                'seguidores' => '16k',
                'conexoes' => 100
            ],
            'posts' => [
                'https://i.pinimg.com/736x/7f/f4/2a/7ff42a4fa45ebec794648e7507a67167.jpg',
                'https://i.pinimg.com/1200x/8b/ec/f7/8becf7e88c070020da7220b1197331f0.jpg',
                'https://i.pinimg.com/236x/8f/7c/ad/8f7cad6a1eb576fe640b94ff774e977a.jpg',
                'https://i.pinimg.com/736x/9e/c3/95/9ec3950b3d28599642acb68040f5978e.jpg',
                'https://i.pinimg.com/1200x/3b/7d/91/3b7d91a07b5c4aaa9924512eba40cf50.jpg',
                'https://i.pinimg.com/1200x/0b/39/ad/0b39adee2616eb46f328375de78d1080.jpg',
                'https://i.pinimg.com/736x/15/da/1a/15da1ae6b1f8bbb5a6c93b6779fc8921.jpg',
                'https://i.pinimg.com/736x/b1/b8/70/b1b87094a7d1dc03b0eecbd90d71705b.jpg',
                'https://i.pinimg.com/736x/44/c0/20/44c020f79c03bc623ed260ed9549d3ee.jpg',
                'https://i.pinimg.com/1200x/bf/c8/38/bfc838bc0d60667bd307c305d50af1a6.jpg',
                'https://i.pinimg.com/736x/4c/91/4d/4c914d28d4b4d23533be8dfdb38fb8f4.jpg',
                'https://i.pinimg.com/736x/6a/b5/93/6ab593d1f38c5b0ec25a6154feb9665b.jpg'
            ],
            'trabalhos/interesses' => [
                'https://i.pinimg.com/736x/e5/ec/ca/e5ecca1b98ee4c30c2b087d026d4077c.jpg',
                'https://i.pinimg.com/736x/d7/e0/b1/d7e0b10d510c7855e58a46fcc74e2a4f.jpg',
                'https://i.pinimg.com/1200x/b3/89/a9/b389a9fa966c3bc8733ffe483fe0ecaa.jpg',
                'https://i.pinimg.com/736x/ce/13/52/ce1352b5435b37dc5656ffb0712ce903.jpg',
                'https://i.pinimg.com/736x/f0/35/c6/f035c6f01b7575f5e4036b405436559c.jpg',
                'https://i.pinimg.com/1200x/f0/b1/b9/f0b1b9d46c9de681df5f46408d8e8f0a.jpg',
                'https://i.pinimg.com/736x/30/5e/72/305e72308d0d3bd90c87f3e1e6f70463.jpg',
                'https://i.pinimg.com/736x/0a/d9/9c/0ad99cd914bf2d06dc123c0e2e3dbaa2.jpg',
                'https://i.pinimg.com/736x/90/e5/d4/90e5d4652be216b3a4dc217ecc326dce.jpg',
                'https://i.pinimg.com/1200x/ab/87/d8/ab87d8a8d13c3490fda659893a0244f5.jpg',
                'https://i.pinimg.com/736x/d4/df/dd/d4dfdd5112ce6596017a59a5bc35ee7c.jpg',
                'https://i.pinimg.com/736x/75/68/20/75682060877437402642deb29e625225.jpg'
            ]
        ],
         'amelia' => [
            'username' => '@melibianchi',
            'foto' => 'https://i.pinimg.com/736x/bd/18/d2/bd18d2d65ef5dc3da0b0dccb4ab80f69.jpg',
            'profissao' => ' Modelo Fotografica',
            'bio' => ' Acredito que a fotografia vai além da imagem: ela transmite emoção, identidade e histórias. Minha missão é dar vida a cada conceito diante das lentes com autenticidade e expressão',
            'stats' => [
                'projetos' => 56,
                'seguidores' => '93k',
                'conexoes' => 358
            ],
            'posts' => [
                'https://i.pinimg.com/736x/59/d5/59/59d5598ed5a440ec6e228f50906683d0.jpg',
                'https://i.pinimg.com/736x/dc/33/c5/dc33c54834759f7c9af981699899707b.jpg',
                'https://i.pinimg.com/736x/5e/b6/51/5eb651c09b89287559da8a0f0ebe3a8d.jpg',
                'https://i.pinimg.com/736x/aa/70/3e/aa703ef941caf4bf0de3614cf9a4c8d9.jpg',
                'https://i.pinimg.com/1200x/56/eb/89/56eb8973e60e47ab3e65a41b85a96870.jpg',
                'https://i.pinimg.com/736x/32/60/17/326017366e7d0dfbe57aac7a727c15fb.jpg',
                'https://i.pinimg.com/736x/11/5a/ff/115affa1bd9fade10392d0ee4a0b3979.jpg',
                'https://i.pinimg.com/736x/d9/ae/af/d9aeaf287e6ca5b93607acc53a66b4c4.jpg',
                'https://i.pinimg.com/736x/78/5b/d9/785bd9c19ddc89acc97e9e2eab420ac4.jpg',
                'https://i.pinimg.com/736x/04/5e/6c/045e6cc4f18ca14d02dbeafd8d1a2d3a.jpg',
                'https://i.pinimg.com/736x/8a/87/d4/8a87d4360b488eed91a2681bb1bf4cb0.jpg',
                'https://i.pinimg.com/736x/20/5e/01/205e01f0b02ac9f611d692a43c38f1e8.jpg',
                'https://i.pinimg.com/1200x/f5/a2/8b/f5a28b4245057b23fd738287980ceca6.jpg',
                'https://i.pinimg.com/736x/48/08/be/4808be114803e77added289dcf029e8d.jpg',
                'https://i.pinimg.com/1200x/c2/9d/4d/c29d4dc089ea2d0cbd21480e961fa2dc.jpg',
                'https://i.pinimg.com/736x/58/2a/ab/582aab7842ec9bea1514a7f7da0b366d.jpg'
            ],
            'trabalhos/interesses' => [
                'https://i.pinimg.com/736x/fb/d6/d5/fbd6d5442b821f208d84d51acb537404.jpg',
                'https://i.pinimg.com/736x/47/05/5b/47055bdce324324363d3cd6ac82edd97.jpg',
                'https://i.pinimg.com/1200x/a6/b4/c2/a6b4c255681ae84353c755f4016855bb.jpg',
                'https://i.pinimg.com/736x/9d/4b/00/9d4b00356e2997846062e11a5ec2b515.jpg',
                'https://i.pinimg.com/736x/67/11/e2/6711e2eac4f67f28cd7c699ef069c9e4.jpg',
                'https://i.pinimg.com/736x/6f/5c/94/6f5c9428e5e237e40b3e5f0ab0f0585d.jpg',
                'https://i.pinimg.com/736x/9c/f7/3f/9cf73f8385fa88f48fe82d72a8306816.jpg',
                'https://i.pinimg.com/1200x/84/f4/83/84f4839579edd7cd9d82f498672d1d87.jpg',
                'https://i.pinimg.com/736x/fd/b4/55/fdb4555e9a647662ce980d9550545009.jpg',
                'https://i.pinimg.com/736x/10/94/61/109461953f959612fac553d56d9b6ecf.jpg',
                'https://i.pinimg.com/1200x/4a/6b/c2/4a6bc20a7b5178de7cfa8f7b7a1c066a.jpg',
                'https://i.pinimg.com/1200x/34/64/21/346421f8ae9f9105cf06aa9b67413783.jpg',
                'https://i.pinimg.com/736x/73/de/42/73de42433df7699266c47c223da7f0ac.jpg',
                'https://i.pinimg.com/736x/cc/93/57/cc9357c869898f8561b347a370e5a97b.jpg',
                'https://i.pinimg.com/736x/af/d4/99/afd4999472726f457862784bbb8e4e88.jpg',
                'https://i.pinimg.com/1200x/66/1e/93/661e93aaa9f05631619feb2ef3e4fbfd.jpg'
            ]
        ],
        'clarice' => [
            'username' => '@clamontblanc',
            'foto' => 'https://i.pinimg.com/736x/79/5b/c3/795bc30f412533da4d3ba77d1892a8f1.jpg',
            'profissao' => 'Pesquisadora de História da Moda',
            'bio' => 'A moda é um reflexo do tempo, da cultura e das transformações sociais. Através da pesquisa histórica, busco compreender como o vestir constrói identidades, preserva memórias e traduz os movimentos de cada época.',
            'stats' => [
                'projetos' => 56,
                'seguidores' => '93k',
                'conexoes' => 358
            ],
            'posts' => [
                'https://i.pinimg.com/736x/17/3a/21/173a2127213ef911947f418660f181a7.jpg',
                'https://i.pinimg.com/736x/ad/6f/6a/ad6f6a6c02558005354e50fb034cb0fc.jpg',
                'https://i.pinimg.com/736x/ec/6d/77/ec6d77bacd96ff9b30a2dfd7be98d888.jpg',
                'https://i.pinimg.com/1200x/1f/a8/8d/1fa88d74031b55dc15830f64fb7cfff6.jpg',
                'https://i.pinimg.com/736x/50/86/6a/50866acd950501256cb2af76db83ad08.jpg',
                'https://i.pinimg.com/736x/62/64/7c/62647c7212a746473c67ac7f97be7ad9.jpg',
                'https://i.pinimg.com/736x/47/74/1c/47741cfd0ff39b2aed9e2d8ede273b98.jpg',
                'https://i.pinimg.com/736x/93/3c/b2/933cb27cd56c52aac1cab0eac4b5e90c.jpg',
                'https://i.pinimg.com/736x/fe/88/d0/fe88d0722b5f560aa3bb52f2a3f0036b.jpg',
                'https://i.pinimg.com/736x/bb/48/47/bb48479e475aa5ff588478bb38aa069c.jpg',
                'https://i.pinimg.com/736x/26/3b/13/263b13eb90e8c1a5f2982472804fc98f.jpg',
                'https://i.pinimg.com/736x/42/c1/8d/42c18d6d0eadc3cdea8e4272df08ba37.jpg',
                'https://i.pinimg.com/1200x/41/02/9e/41029ed87cd190cb0b236d8252f507e1.jpg',
                'https://i.pinimg.com/736x/0e/b5/da/0eb5dac3a6d4f880fb793f81fabb59de.jpg',
                'https://i.pinimg.com/736x/cb/60/c6/cb60c6d5357b2eacf09f419659b0fb74.jpg',
                'https://i.pinimg.com/736x/dd/af/cf/ddafcf03c42998cbf48cd03abe4901f5.jpg',
                'https://i.pinimg.com/736x/34/bc/11/34bc112ea839c9af27a85352f477704b.jpg',
                'https://i.pinimg.com/736x/04/9d/88/049d883ed9792f68e8bde67beda80d45.jpg',
                'https://i.pinimg.com/736x/a9/50/62/a95062ed76a0abac38e40f1a1fa7af56.jpg',
            ],
            'trabalhos/interesses' => [
                'https://i.pinimg.com/1200x/27/89/98/278998e9ec14f7e484f63902be2677f4.jpg',
                'https://i.pinimg.com/736x/c8/8a/a2/c88aa2919c57fb04b1756879f76532c1.jpg',
                'https://i.pinimg.com/736x/91/76/49/917649389c2d8dcea9f3be230b3d49ad.jpg',
                'https://i.pinimg.com/736x/4f/51/21/4f5121c13d44d88d450436a08ec91006.jpg',
                'https://i.pinimg.com/736x/6b/c4/d1/6bc4d1e946ae07a64354071221f0a6b0.jpg',
                'https://i.pinimg.com/736x/a1/ec/01/a1ec01ec3f5226860f4ffff584c2be0e.jpg',
                'https://i.pinimg.com/736x/e2/15/bb/e215bbe0f408778f1aaa761a8a6a8e41.jpg',
                'https://i.pinimg.com/1200x/17/fc/ff/17fcfffee990d96e9c5457e5ff7d71fa.jpg',
                'https://i.pinimg.com/736x/5b/2a/1f/5b2a1f77038159c6fa16159e7c128b40.jpg',
                'https://i.pinimg.com/1200x/37/30/fb/3730fb673cbcb665470263a76646e929.jpg',
                'https://i.pinimg.com/736x/b2/44/8c/b2448ce572d3faf44aa5c26667928002.jpg',
                'https://i.pinimg.com/736x/8c/af/01/8caf012c04959a8876587e5d0990180f.jpg',
                'https://i.pinimg.com/736x/a7/86/02/a78602c94a29285742459f4fd80b25a3.jpg',
                'https://i.pinimg.com/736x/d1/62/34/d16234cf7864992e3303679acd4cd57b.jpg',
                'https://i.pinimg.com/736x/01/c2/e8/01c2e8c1be99503a40f370e8f025174b.jpg',
                'https://i.pinimg.com/736x/d1/39/78/d13978e04fdcc60ce9be40bb7b058d82.jpg',
                'https://i.pinimg.com/736x/81/63/e0/8163e0f28ec1ddda29df1e737cfdee42.jpg'
               ]
            ],
            'serena' => [
            'username' => '@serenacastelli',
            'foto' => 'https://i.pinimg.com/736x/a8/bb/bb/a8bbbbd0bebb209df26e7d0ed0471932.jpg',
            'profissao' => 'Maquiadora Editorial Fashion',
            'bio' => 'A maquiagem é uma extensão da linguagem da moda. Através dela, procuro construir narrativas visuais que traduzam conceitos, despertem emoções e valorizem a individualidade.',
            'stats' => [
                'projetos' => 43,
                'seguidores' => '35k',
                'conexoes' => 238
            ],
            'posts' => [
                'https://i.pinimg.com/736x/55/68/33/556833b84ab28b5e0a4652bf569a1797.jpg',
                'https://i.pinimg.com/1200x/7c/90/48/7c9048f9ae9ca370e0dfa990e5f74a9b.jpg',
                'https://i.pinimg.com/1200x/2a/0d/ec/2a0deca3f309d094e7277c1ef8fe0aaa.jpg',
                'https://i.pinimg.com/1200x/62/61/5d/62615d34643983f451f5330893ac669e.jpg',
                'https://i.pinimg.com/736x/5c/50/69/5c50695801142d5d0b84d43ffed9c5b1.jpg',
                'https://i.pinimg.com/736x/20/97/76/2097765001ed5df7d8b7ea613e59161c.jpg',
                'https://i.pinimg.com/736x/92/4e/82/924e822db6091da5315e2bf951df17a3.jpg',
                'https://i.pinimg.com/736x/f9/68/2d/f9682d4b4c7d14bdae205e409e74c433.jpg',
                'https://i.pinimg.com/736x/9a/5e/7f/9a5e7f28972b55bd33d0c36f82d72760.jpg',
                'https://i.pinimg.com/736x/67/4e/ca/674eca2a4f492a3bc230e1cf1fef1b8f.jpg',
                'https://i.pinimg.com/736x/a1/2a/20/a12a20bbe7fdad6951495a582830418f.jpg',
                'https://i.pinimg.com/736x/48/aa/ec/48aaec20f38ad8b9644e6d0043825313.jpg',
                'https://i.pinimg.com/1200x/a1/d7/7e/a1d77ea25b79d17cfe187bd49afd6a65.jpg',
                'https://i.pinimg.com/736x/85/49/14/854914a33af951a0eaeaf18970f8a41d.jpg',
                'https://i.pinimg.com/736x/b0/1f/8f/b01f8ffcc5f61f240022951b689722cd.jpg',
                'https://i.pinimg.com/736x/ad/e5/4f/ade54f7d1e8a8c651203945829fdeb6f.jpg',
                'https://i.pinimg.com/736x/2b/5c/64/2b5c64e030f47cde5a23da1506fc09a1.jpg',
                'https://i.pinimg.com/736x/7c/28/2a/7c282abda3757e7e2dddd7dc323845a7.jpg'
            ],
            'trabalhos/interesses' => [
                'https://i.pinimg.com/736x/34/ce/62/34ce62256b9161dfae2c40df1dd4d12a.jpg',
                'https://i.pinimg.com/736x/f7/b8/7e/f7b87e69cbfddf31eccb54c82fb8c3f4.jpg',
                'https://i.pinimg.com/736x/8f/c9/52/8fc9520eaff42d643b8690401f5a9feb.jpg',
                'https://i.pinimg.com/736x/e1/11/b7/e111b71661267930bbcba3ea5368a7ed.jpg',
                'https://i.pinimg.com/736x/52/26/d7/5226d79680659c69f03576d1c2456dae.jpg',
                'https://i.pinimg.com/1200x/00/92/bf/0092bf44226e95da4823506db1807404.jpg',
                'https://i.pinimg.com/736x/16/0f/7e/160f7e4953daf78b321c1de3b3414f19.jpg',
                'https://i.pinimg.com/736x/48/85/49/488549959d0475d3cb8fb89dccd74a76.jpg',
                'https://i.pinimg.com/1200x/28/9e/73/289e739e0c2344273715303dfc4990d3.jpg',
                'https://i.pinimg.com/1200x/d4/17/c2/d417c21a28275bb90207b6d2c98a1103.jpg',
                'https://i.pinimg.com/736x/57/85/e9/5785e9fe12cec098f5d2bd0ba45948ff.jpg',
                'https://i.pinimg.com/1200x/88/cb/85/88cb85eeccb656a55266850d73e4bced.jpg',
                'https://i.pinimg.com/736x/db/ac/4a/dbac4a57454c905085e3ac988ee981e3.jpg',
                'https://i.pinimg.com/736x/30/2f/b9/302fb9342690e7142306473157f4d05e.jpg',
                'https://i.pinimg.com/1200x/9c/01/d6/9c01d6ac6683d3eb27facf8b94dae588.jpg'
            ]
        ],
            'theo' => [
            'username' => '@theolaurent',
            'foto' => 'https://i.pinimg.com/736x/38/21/76/3821763b1cc3030029573e14433f8fd8.jpg',
            'profissao' => 'Costureiro das grifes',
            'bio' => 'Por meio da costura e do trabalho artesanal, transformo visões criativas em realidade, garantindo que cada peça seja confeccionada com cuidado, precisão e arte.',
            'stats' => [
                'projetos' => 150,
                'seguidores' => '195k',
                'conexoes' => 532
            ],
            'posts' => [
                'https://i.pinimg.com/736x/bb/e6/74/bbe6746bd3c9580fb85dd93c6b7ee651.jpg',
                'https://i.pinimg.com/736x/0f/74/96/0f7496e4808fff03565a69e8166880d7.jpg',
                'https://i.pinimg.com/736x/93/b1/33/93b133739310ae72e9f5271582a6484b.jpg',
                'https://i.pinimg.com/736x/56/4a/71/564a71c29f2c8372c4a9e54e6d5432e0.jpg',
                'https://i.pinimg.com/1200x/47/e8/80/47e880cce0c16bb97293e9230193da02.jpg',
                'https://i.pinimg.com/736x/cd/f7/fa/cdf7fa52339fde07b4e23c75022152aa.jpg',
                'https://i.pinimg.com/736x/9a/3a/9b/9a3a9b4b34ff8c8aba9a3a563b25db0c.jpg',
                'https://i.pinimg.com/736x/eb/d1/b4/ebd1b48fbdec7374dbdb11d6e33be9c8.jpg',
                'https://i.pinimg.com/1200x/62/9d/de/629dde32c705edf6debf0d2ce3bd90ff.jpg',
                'https://i.pinimg.com/1200x/ae/54/5f/ae545f496e004564d2e74e4e4b790097.jpg',
                'https://i.pinimg.com/1200x/6d/f3/a4/6df3a43c822b7e5b9c91a8417afdb56f.jpg',
                'https://i.pinimg.com/736x/43/0a/56/430a562f8de58ae1281e2c47d7cc9b5d.jpg',
                'https://i.pinimg.com/736x/27/0f/a3/270fa347f320838fe7470e0d751eb418.jpg',
                'https://i.pinimg.com/736x/06/4c/53/064c53646ad7bf064ec6229e126d6f38.jpg',
                'https://i.pinimg.com/736x/53/e2/02/53e2027f3e9166de07d95c53226d2c4a.jpg',
                'https://i.pinimg.com/1200x/a4/74/17/a474172d8e5e72f27e93d7741a92d701.jpg'
            ],
            'trabalhos/interesses' => [
                'https://i.pinimg.com/736x/b4/c2/8f/b4c28fecf5588d823762b17d109f2a1e.jpg',
                'https://i.pinimg.com/736x/cf/8f/9a/cf8f9a098e280a782c21e02a5c35c4e1.jpg',
                'https://i.pinimg.com/1200x/c7/c8/d1/c7c8d15acb63276a43e6bbbcb8511a03.jpg',
                'https://i.pinimg.com/1200x/f3/23/bd/f323bd4d817f6833295d3903226dbf12.jpg',
                'https://i.pinimg.com/1200x/3e/cb/7c/3ecb7ce123daf7fb0802e2d0c87fa9d7.jpg',
                'https://i.pinimg.com/736x/7c/ca/ba/7ccaba07f8d99fc641408da6c416890d.jpg',
                'https://i.pinimg.com/736x/be/a5/11/bea51147eebbe86c70ef36db9c658184.jpg',
                'https://i.pinimg.com/736x/81/3a/d0/813ad07b136a49e37bc8902b27fc69ca.jpg',
                'https://i.pinimg.com/736x/6b/61/4d/6b614dff05f171dd8235759834f4eadf.jpg',
                'https://i.pinimg.com/1200x/da/8c/dc/da8cdcca2165da5ec47d3065d053b516.jpg',
                'https://i.pinimg.com/736x/8a/e2/84/8ae2849d6ff7e94f5ebf2d83e5298e10.jpg',
                'https://i.pinimg.com/736x/53/08/61/5308616ec5670d81d70d6687042a2f1b.jpg'
            ]
            ]
        ];
    

  public function show($user)
{
    // Perfil especial da Cecília
    if ($user === 'cecilia') {

        $usuario = [
            'username' => '@cecivalenca',
            'foto' => 'https://i.pinimg.com/736x/5a/79/68/5a7968b1bbf2b60f20287fd3a2e6d90d.jpg',
            'profissao' => 'Estudante de Moda',
            'bio' => 'Eu sempre busco criar algo original e bonito. Meu maior desejo é deixar uma marca no mundo por meio da criatividade, da arte e da inovação dentro da indústria da moda.',
            'stats' => [
                'projetos' => 75,
                'seguidores' => '14k',
                'conexoes' => 92
            ],
            'posts' => [
                'https://i.pinimg.com/736x/c6/63/15/c6631564687992a36a16913a9140cb02.jpg',
                'https://i.pinimg.com/736x/fe/88/d0/fe88d0722b5f560aa3bb52f2a3f0036b.jpg',
                'https://i.pinimg.com/736x/0e/70/b0/0e70b0482615afb9bff5a51052490472.jpg',
                'https://i.pinimg.com/736x/9d/28/4a/9d284ae6581f02c502fe809de9da8391.jpg',
                'https://i.pinimg.com/736x/f3/de/20/f3de20d45e93a2750f9f27ad9eee8268.jpg',
                'https://i.pinimg.com/736x/f2/0b/e6/f20be68adfbc6f48c893cf0fb7e8cb88.jpg',
                'https://i.pinimg.com/736x/32/63/f0/3263f003d5d5169e514eb5bb50e674fc.jpg',
                'https://i.pinimg.com/736x/ec/e9/eb/ece9eb3231a341f43c8bdd5f211ed95b.jpg',
                'https://i.pinimg.com/736x/7a/b3/70/7ab3706d2ba63dd3e4ca87dfe0e779c7.jpg',
                'https://i.pinimg.com/736x/4b/f5/c9/4bf5c9dedeeab47a5fe3e43b312793fe.jpg',
                'https://i.pinimg.com/736x/9b/0d/a4/9b0da4b11fb3a91b9ddcdc08ca3ef40e.jpg',
                'https://i.pinimg.com/736x/d2/bd/6e/d2bd6e1540be5a211b878ea216cbac16.jpg',
                'https://i.pinimg.com/736x/6a/9f/a1/6a9fa1abef90078e63f76a9b92f028f8.jpg',
                'https://i.pinimg.com/736x/db/6d/59/db6d59d39ce7b21384fd2460bae25cab.jpg',
                'https://i.pinimg.com/736x/f7/b4/2f/f7b42f1a5d36320be9d8f8427cc14600.jpg',
                'https://i.pinimg.com/736x/47/29/36/4729365b8ca40fb93df6028d2bd5b33d.jpg',
                'https://i.pinimg.com/736x/79/45/0e/79450eabd2395d276306fe82576be544.jpg',
                'https://i.pinimg.com/736x/9e/b9/67/9eb967890cd2e56df6dfa33429418f0d.jpg',
                'https://i.pinimg.com/736x/9d/5e/eb/9d5eeb0bac145cad54ca561519552e3b.jpg',
                'https://i.pinimg.com/736x/97/c5/fa/97c5fa63378ed6f88a7313e3fe245088.jpg',
                'https://i.pinimg.com/736x/8b/17/b7/8b17b72ded46f7108dce7ee2e1b4d755.jpg',
                'https://i.pinimg.com/736x/05/56/f8/0556f8d3f308798736a8f7504ec5556d.jpg',
                'https://i.pinimg.com/736x/2c/b5/dd/2cb5dd1f05348e6e00d6660f1f8ed170.jpg',
                'https://i.pinimg.com/736x/61/d0/34/61d034742f58731399754c54ef732206.jpg',
                'https://i.pinimg.com/736x/b1/90/1f/b1901fa86f7d12c6668fad8c11313eea.jpg',
                'https://i.pinimg.com/736x/8d/7a/77/8d7a778ef6dae17bd6c8493aa17cc509.jpg',
                'https://i.pinimg.com/736x/8c/22/15/8c22154dc72efad1a5a762aa0437d63f.jpg',
                'https://i.pinimg.com/736x/23/8e/6a/238e6ae2dd70c6a6fb9a51067d2d9a16.jpg',
                'https://i.pinimg.com/736x/5c/e4/e4/5ce4e466bdcfbb13f5c89f00c1c7b144.jpg',
                'https://i.pinimg.com/736x/dd/d3/d1/ddd3d1517f50959d0c16e2f31bbf1ecd.jpg',
                'https://i.pinimg.com/736x/ae/05/ef/ae05ef5a353e288e31c9d4e794d23119.jpg',
                'https://i.pinimg.com/736x/a6/e4/cd/a6e4cd88a5941716c8d933ad8b9979ff.jpg'
            ],   
            'trabalhos/interesses' => [
                'https://i.pinimg.com/736x/27/68/78/276878e7307b4452621046c6742eefc2.jpg',
                'https://i.pinimg.com/736x/3a/ec/28/3aec28c9fa909fc608840115664f6734.jpg',
                'https://i.pinimg.com/736x/ce/e8/d3/cee8d3dd95ef02fc25792dd83e9a7999.jpg',
                'https://i.pinimg.com/736x/42/97/e7/4297e7f60c1e452c6dc08b8d7432e810.jpg',
                'https://i.pinimg.com/736x/a8/c1/51/a8c15135aac6ab2a3a09cb4b908cda5d.jpg',
                'https://i.pinimg.com/736x/39/f7/b7/39f7b7169736e39b318f14a159030505.jpg',
                'https://i.pinimg.com/736x/53/ae/ca/53aecaeedb2165856d3b40d043f51b8c.jpg',
                'https://i.pinimg.com/736x/c9/5f/75/c95f7585f8aec699336e830bb06f8829.jpg',
                'https://i.pinimg.com/736x/91/18/be/9118bebe20bc6b5b1283cac53da80180.jpg',
                'https://i.pinimg.com/736x/95/fe/7f/95fe7f815560e5924ce17c746c66a35a.jpg',
                'https://i.pinimg.com/736x/40/45/11/404511a9a85ab52c17c5dcadae899e4a.jpg',
                'https://i.pinimg.com/736x/d1/ea/c8/d1eac8dddb4413fe23fa0755eb5f903f.jpg',
                'https://i.pinimg.com/736x/bb/10/e2/bb10e2bb325ef8c8a20190e8eca0431d.jpg',
                'https://i.pinimg.com/736x/1b/2e/46/1b2e46a5990b06067b57b9bec34b0a73.jpg',
                'https://i.pinimg.com/736x/33/67/8b/33678b5526964390647325a618c1d828.jpg',
                'https://i.pinimg.com/736x/d5/29/ec/d529ec94cb25edc037428329e3c080fe.jpg',
                'https://i.pinimg.com/736x/69/25/86/692586b23dfd7d881ee459c3be7be81c.jpg',
                'https://i.pinimg.com/736x/ef/16/d7/ef16d7ed0e1231c85ba583f5bafe643b.jpg',
                'https://i.pinimg.com/736x/87/80/66/878066349bdc5331629cc8f50b7e160f.jpg',
                'https://i.pinimg.com/736x/5b/e6/94/5be694bffcdfc3e0dba7ac59cc298661.jpg',
                'https://i.pinimg.com/736x/56/93/6e/56936ede66c5a1198d14cba01a5243ac.jpg',
                'https://i.pinimg.com/736x/99/d0/c8/99d0c8f9180e2da9569c0585cbfe3919.jpg',
                'https://i.pinimg.com/736x/48/93/ff/4893ff01a189884727d32975b7daa76c.jpg',
                'https://i.pinimg.com/736x/93/94/bc/9394bcfc18f15f19a9910dbf08e283e8.jpg',
                'https://i.pinimg.com/736x/b4/f8/d0/b4f8d0166a631223c628d54d71c249b8.jpg',
                'https://i.pinimg.com/736x/0e/5c/dd/0e5cdd80aa371bbf33605b9dea40a28b.jpg',
                'https://i.pinimg.com/736x/c9/e0/dd/c9e0ddf0a8a5b4d94d2884d48005026f.jpg',
                'https://i.pinimg.com/736x/ee/5f/2e/ee5f2ea28c0eaada8284f00a49a3a1e7.jpg',
                'https://i.pinimg.com/736x/59/01/fd/5901fd59138b9ca1e5892f7526988f3a.jpg',
                'https://i.pinimg.com/736x/dd/3c/3b/dd3c3bb364a6d68940ad2f5753a4a993.jpg'

            ]
        ];

        return view('usuario.cecilia_perfil', compact('usuario'));
    }

    // Usuários normais
    if (!isset($this->usuarios[$user])) {
        abort(404);
    }

    $usuario = $this->usuarios[$user];

    return view('usuario.usuario', compact('usuario'));
}



    
}