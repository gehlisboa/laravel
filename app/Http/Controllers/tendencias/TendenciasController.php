<?php

namespace App\Http\Controllers\Tendencias;

use App\Http\Controllers\Controller;

class TendenciasController extends Controller
{
   private $tendencias = [

    'y2k' => [
        'titulo' => 'Y2K',
        'descricao' => 'A estética dos anos 2000 com brilho, cores vibrantes, jeans de cintura baixa e referências da cultura pop.',
        'imagens' => [
            'https://i.pinimg.com/1200x/95/32/fb/9532fbf8710cb14361a68c69aae5a791.jpg',
            'https://i.pinimg.com/736x/87/e2/a7/87e2a7f8a5683fd94e8ad0c30e20cd03.jpg',
            'https://i.pinimg.com/736x/bc/4c/f9/bc4cf931a5b843f8653d53ae34421724.jpg',
            'https://i.pinimg.com/1200x/c4/6a/1e/c46a1e914c6c2c07fb530d84ff6f5c41.jpg',
            'https://i.pinimg.com/736x/ce/19/16/ce1916f5adf7dd15752299f41d890c3f.jpg',
            'https://i.pinimg.com/736x/fe/e3/49/fee3493caa1334998071f6d64612d6aa.jpg',
            'https://i.pinimg.com/736x/bb/6f/ff/bb6fff61f7448b35e506b68e981d95a9.jpg',
            'https://i.pinimg.com/736x/a0/be/ba/a0beba73f825df690e1a9f4c08d1d21c.jpg',
            'https://i.pinimg.com/1200x/38/8f/8d/388f8d7051bfacba291ed0041519a0a2.jpg',
            'https://i.pinimg.com/736x/df/68/f3/df68f31a6b486ec714f574e9985ac636.jpg',
            'https://i.pinimg.com/736x/9f/a0/04/9fa0047d7090091a626f86b848e8400a.jpg',
            'https://i.pinimg.com/736x/55/9c/c9/559cc98896fbac8c736d1f1983e14a06.jpg',
            'https://i.pinimg.com/736x/9a/a0/4b/9aa04b569c24441f8b64df544134cb92.jpg',
            'https://i.pinimg.com/736x/44/92/36/4492369d5b2d8585cf980613c36a712d.jpg',
            'https://i.pinimg.com/736x/57/82/d4/5782d4b4af84cde9e9e37d0f7f2ebf37.jpg',
            'https://i.pinimg.com/736x/fd/18/78/fd18781acfa917b04637d88f15047c61.jpg',
            'https://i.pinimg.com/1200x/25/1c/ea/251ceafdd4002a557a7b9fbe6e83e9f5.jpg',
            'https://i.pinimg.com/736x/c9/f8/b5/c9f8b5a426de997452a05da55923ec84.jpg',
            'https://i.pinimg.com/736x/76/2a/e8/762ae8066e93598b63fe70e4cde97e8b.jpg',
            'https://i.pinimg.com/1200x/12/25/3b/12253bd2441af13fbbe25c1ed322f9ea.jpg',
            'https://i.pinimg.com/736x/17/bb/73/17bb739a878a44275bec68eccacf1a51.jpg',
            'https://i.pinimg.com/736x/2e/ba/e5/2ebae551a08bed0e36381035a6934b5d.jpg',
            'https://i.pinimg.com/736x/26/3b/bb/263bbb8064f04bab9cd41fbf5e0891fe.jpg',
            'https://i.pinimg.com/736x/8a/2d/f9/8a2df99c4528a68c0be39a3814034a6f.jpg',
            'https://i.pinimg.com/736x/70/db/64/70db646df141f015a53988fe22da36c7.jpg',
            'https://i.pinimg.com/1200x/f1/8f/64/f18f64c7a4ff25f398bc168188a7c48d.jpg',
            'https://i.pinimg.com/736x/51/b3/80/51b3802aa7057bcaea258fa69de7e35f.jpg',
            'https://i.pinimg.com/736x/89/59/73/8959734d697054b25f4e0ce78b480ee1.jpg'

        ]
    ],

    'animal-print' => [
        'titulo' => 'Animal Print',
        'descricao' => 'Estampas inspiradas em animais como onça, zebra e cobra, trazendo personalidade e ousadia aos looks.',
        'imagens' => [
            '',
            'https://i.pinimg.com/1200x/7f/e0/75/7fe07558538a31b19d6bdad9b71f00b0.jpg',
            'https://i.pinimg.com/1200x/d1/dd/97/d1dd972d7c64ead7956505d37f95ed02.jpg',
            'https://i.pinimg.com/736x/57/6e/27/576e27e1c320148cab22406a08614045.jpg',
            'https://i.pinimg.com/1200x/e7/85/5a/e7855aff4dd2ddc6ad2ff41bb532eccc.jpg',
            'https://i.pinimg.com/1200x/11/90/2e/11902e4611cd6ba7251d5fcc9eeb5687.jpg',
            'https://i.pinimg.com/1200x/20/5b/0e/205b0ec4fcee0b706f35103b69c71cb6.jpg',
            'https://i.pinimg.com/736x/e8/90/4f/e8904fcf05bc7b3577c4c3dd599333a2.jpg',
            'https://i.pinimg.com/1200x/55/47/ac/5547ac60f0d76298630a54688fe840b7.jpg',
            'https://i.pinimg.com/736x/43/97/75/4397750adb20202f95b630945accefb4.jpg',
            'https://i.pinimg.com/1200x/f2/ed/a7/f2eda7709a6daf2e8703b1be65f74f1e.jpg',
            'https://i.pinimg.com/1200x/6e/cf/0d/6ecf0dc91d8c1e1e2f4517fead1637f4.jpg',
            'https://i.pinimg.com/736x/bc/ea/ee/bceaee773066eba89d709013e1b435a9.jpg',
            'https://i.pinimg.com/1200x/82/67/c0/8267c09e57ab97ef6ef3e9614e5ff3e0.jpg',
            'https://i.pinimg.com/736x/3f/2b/8f/3f2b8fa6a1b45ae497523ad000e799c7.jpg',
            'https://i.pinimg.com/1200x/fc/dc/a4/fcdca4a660bf3f5d03e2564bfd41bc34.jpg',
            'https://i.pinimg.com/1200x/96/93/a7/9693a71d55feef3f8e6ae6e310011e6a.jpg',
            'https://i.pinimg.com/1200x/63/0c/ec/630cec9d463803b3f2d10c5685cd4646.jpg',
            'https://i.pinimg.com/736x/b3/b1/f9/b3b1f93ffa5e12456999358c1d145e9b.jpg',
            'https://i.pinimg.com/736x/66/90/b4/6690b43537fd13973bafc852fa69970e.jpg',
            'https://i.pinimg.com/1200x/68/a4/b4/68a4b437f16407b93d632bc1aff73c56.jpg',
            'https://i.pinimg.com/736x/55/da/ce/55dace6e6fcdd14b1422a94e363f9164.jpg',
            'https://i.pinimg.com/736x/a8/91/ee/a891ee6ddd0d2bb1d3cad2b0a76ee8b6.jpg',
            'https://i.pinimg.com/736x/58/f5/b0/58f5b0c7e129acf12aaa9cf0434bce12.jpg',
            'https://i.pinimg.com/736x/0b/e1/04/0be1041b3cb97de318709d96962cb177.jpg',
            'https://i.pinimg.com/1200x/d5/66/d8/d566d877d1fc4a744ece79ca6367c1a0.jpg',
            'https://i.pinimg.com/736x/a6/47/86/a64786c28430914a3d325ed9c72f5571.jpg',
            'https://i.pinimg.com/1200x/ec/a5/ff/eca5ff37b1a30fb23e4a5185e582e87c.jpg',
            'https://i.pinimg.com/1200x/a4/ae/fc/a4aefc29381d7f6ab45fc64f3c9a3906.jpg',
            'https://i.pinimg.com/736x/8a/80/fa/8a80fa30cb896a0633e57d0dc73c5764.jpg',
            'https://i.pinimg.com/736x/6f/4d/6c/6f4d6c735017ad6f8fb137065e7dcbd0.jpg',
            'https://i.pinimg.com/736x/c5/95/9b/c5959bc1575a574ae8eadcb12dbee162.jpg',
            'https://i.pinimg.com/1200x/ec/13/dd/ec13ddb052aaf73fdef8310dae9ba9e8.jpg'
        ]
    ],

    'polka-dots' => [
        'titulo' => 'Polka Dots',
        'descricao' => 'A clássica estampa de bolinhas reinventada em propostas modernas, elegantes e divertidas.',
        'imagens' => [
            'https://i.pinimg.com/736x/d5/b0/e0/d5b0e0529444354f42bee4db5cec7d95.jpg',
            'https://i.pinimg.com/736x/01/ea/8d/01ea8d1b1258f54a9d30f11d3f35fc7e.jpg',
            'https://i.pinimg.com/1200x/63/eb/9b/63eb9b52e1687da72042133101e0d329.jpg',
            'https://i.pinimg.com/736x/4f/62/ae/4f62ae0cd7c55d4d03826b2d61eb46af.jpg',
            'https://i.pinimg.com/1200x/c0/32/e9/c032e98df13a53e84a85bd57151695b7.jpg',
            'https://i.pinimg.com/736x/6e/c5/bb/6ec5bb4fa04e9a4bf740f10e7640db35.jpg',
            'https://i.pinimg.com/736x/93/8f/af/938fafd6ab1915cdb3367b2c0e0cb683.jpg',
            'https://i.pinimg.com/1200x/78/2f/63/782f63904609cb40830a6a92554894db.jpg',
            'https://i.pinimg.com/736x/db/50/92/db5092bf84a1ebbac9625e2f56f3ff5f.jpg',
            'https://i.pinimg.com/736x/2c/16/8d/2c168db625e9582628331f4e83605482.jpg',
            'https://i.pinimg.com/736x/f6/2b/e6/f62be63e08ed3e75fe250a8c8e755411.jpg',
            'https://i.pinimg.com/736x/b2/f1/91/b2f191722966dc94f015222d069af660.jpg',
            'https://i.pinimg.com/736x/ee/97/43/ee97437aee10a92c1d4dbe25c67fa478.jpg',
            'https://i.pinimg.com/736x/54/81/3b/54813b42c39117b1d0a4a7155096594f.jpg',
            'https://i.pinimg.com/736x/d5/c5/3a/d5c53a11703ac47fa8fbef3e9bf6df24.jpg',
            'https://i.pinimg.com/736x/5a/5d/b8/5a5db8600412c074d459a665eb320afe.jpg',
            'https://i.pinimg.com/736x/f6/5b/0b/f65b0b764b51eaf277216ec810843872.jpg',
            'https://i.pinimg.com/736x/b2/a5/83/b2a583366fe249a29fb0f090705b07ec.jpg',
            'https://i.pinimg.com/736x/0c/ca/6c/0cca6c55bf81aedc9ec8e42487593891.jpg',
            'https://i.pinimg.com/736x/64/ba/5f/64ba5fe5ca140d49c106232aa4cbe123.jpg',
            'https://i.pinimg.com/1200x/1f/b6/9d/1fb69d02d98463dc9f0d62b89a42581f.jpg',
            'https://i.pinimg.com/1200x/e1/43/d5/e143d5f1fe98d889d324dbac807ccbc3.jpg',
            'https://i.pinimg.com/1200x/ab/bf/ec/abbfeca892099aa1f106ab84834eb350.jpg',
            'https://i.pinimg.com/1200x/f5/d7/42/f5d7422c6ad2a388870506d8bb3c8b2d.jpg',
            'https://i.pinimg.com/1200x/26/d5/83/26d5835512851b774e01165e11a27795.jpg',
            'https://i.pinimg.com/736x/f0/d2/40/f0d2406af0ee937652fcc0eaaad1c62d.jpg',
            'https://i.pinimg.com/1200x/0d/fb/5b/0dfb5bf326d54b65cae608f246400ea0.jpg',
            'https://i.pinimg.com/1200x/a3/be/69/a3be6985bf51f3d8f7b725641234190c.jpg',
            'https://i.pinimg.com/1200x/fa/e9/25/fae925b5d323de838f9320218700d830.jpg'
        ]
    ],

    'cool-culture' => [
        'titulo' => 'Cool Culture',
        'descricao' => 'Tendências contemporâneas inspiradas por arte, música, internet e comportamento das novas gerações.',
        'imagens' => [
            'https://i.pinimg.com/736x/d6/65/f6/d665f6f181a8f739b6013759085361d7.jpg',
            'https://i.pinimg.com/736x/9c/5c/08/9c5c08543c8747d8c38dd7e6a339798c.jpg',
            'https://i.pinimg.com/736x/40/c9/62/40c96284ffeeeb02af8ce228bc18fbf8.jpg',
            'https://i.pinimg.com/736x/83/9a/86/839a8664a687069f28054491a4ad35a5.jpg',
            'https://i.pinimg.com/736x/9e/f5/64/9ef564ace828f914aa030ddc24cec8cf.jpg',
            'https://i.pinimg.com/736x/31/60/21/3160211e6b9f0dcd3b0a9c4d49c201e1.jpg',
            'https://i.pinimg.com/1200x/6f/84/43/6f8443a96dc383b115b30b10416db477.jpg',
            'https://i.pinimg.com/736x/30/ce/dc/30cedcc6f8e9585fa9ce3eed05f337a5.jpg',
            'https://i.pinimg.com/736x/91/88/9c/91889cdd20de3c9f189b6e02750e3556.jpg',
            'https://i.pinimg.com/1200x/ae/1d/27/ae1d274e81bd3796e851064885a53baa.jpg',
            'https://i.pinimg.com/1200x/e2/2f/3b/e22f3b527370afbba187263af86a5e00.jpg',
            'https://i.pinimg.com/1200x/07/05/c7/0705c7cc23bab26b4c887c517a7e936f.jpg',
            'https://i.pinimg.com/736x/4c/d9/ee/4cd9eef9b573aff5837facfa535e855d.jpg',
            'https://i.pinimg.com/736x/f5/9d/71/f59d7196df4ad8139c809425ed91ccda.jpg',
            'https://i.pinimg.com/1200x/8a/25/06/8a2506f0573a3a1091e4a5ebc6b22753.jpg',
            'https://i.pinimg.com/736x/18/9c/a2/189ca29eb9a748d35529538c11b1df79.jpg',
            'https://i.pinimg.com/736x/9d/9b/eb/9d9beba45f69ee319aaea2b76582bb16.jpg',
            'https://i.pinimg.com/736x/54/15/f3/5415f3a8ed5ceb99f2e2d29b9d73b778.jpg',
            'https://i.pinimg.com/736x/ee/ad/ad/eeadad7aba942e189b0b887aa7f7e8ef.jpg',
            'https://i.pinimg.com/1200x/5b/20/f4/5b20f43ec9c4e4aa60fdeba3311a4d86.jpg',
            'https://i.pinimg.com/736x/8b/46/dd/8b46dd272b29f1443a3491b9eca96787.jpg',
            'https://i.pinimg.com/736x/91/c4/3f/91c43fbdc68db4a8eaecced7b3a1aed9.jpg',
            'https://i.pinimg.com/736x/20/62/77/2062773293b59e0f09dc142d6c3b5a3b.jpg',
            'https://i.pinimg.com/736x/86/be/ef/86beef096544f4acf4564482bf6b9c69.jpg',
            'https://i.pinimg.com/736x/fa/63/fe/fa63fe5cc7004ac180e80097bf39957e.jpg'
           
        ]
    ],

    'underground' => [
        'titulo' => 'Underground',
        'descricao' => 'Fotografia de moda, direção criativa e produções visuais que contam histórias através da imagem.',
        'imagens' => [
            'https://i.pinimg.com/1200x/43/c0/f6/43c0f65165cbee144fc9856dbb5b598a.jpg',
            'https://i.pinimg.com/736x/06/90/8d/06908d00e272303270d079c2bb89a3fa.jpg',
            'https://i.pinimg.com/736x/41/9a/18/419a1888c0c8f1123df916347765cbbe.jpg',
        ]
    ],

    'vintage' => [
        'titulo' => 'Vintage',
        'descricao' => 'Desfiles, passarelas internacionais e as principais tendências apresentadas pelas grandes marcas.',
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

    $tendencia = $this->tendencias[$categoria];

    $temaBotao = match ($categoria) {
        'y2k' => 'botao-y2k',
        'animal-print' => 'botao-animal',
        default => 'botao-y2k',
    };

    return view('tendencias.tendencias', compact('tendencia', 'temaBotao'));
}
       
}

