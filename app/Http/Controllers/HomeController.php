<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        private $users = [
        'olivia' => [
            'name' => 'Olívia',
            'username' => 'livfontenelle',
            'photo' => 'https://i.pinimg.com/736x/46/cd/66/46cd664aafbf127b0a801caec18075c3.jpg'
        ],

        'helena' => [
            'name' => 'Helena',
            'username' => 'helealessandro',
            'photo' => 'https://i.pinimg.com/736x/58/20/8d/58208d6b02c4991555fb7374f1ee2a00.jpg'
        ],

        'catarina' => [
            'name' => 'Catarina',
            'username' => 'catbellini',
            'photo' => 'https://i.pinimg.com/736x/09/b0/8a/09b08ac85fcc8ea869340ed26a51b2c4.jpg'
        ],

        'alessandra' => [
            'name' => 'Alessandra',
            'username' => 'alesantoro',
            'photo' => 'https://i.pinimg.com/736x/f7/b4/c7/f7b4c73eebc45ad7fe0cc26abbc234c2.jpg'
        ],

        'amelia' => [
            'name' => 'Amélia',
            'username' => 'melibianchi',
            'photo' => 'https://i.pinimg.com/736x/bd/18/d2/bd18d2d65ef5dc3da0b0dccb4ab80f69.jpg'
        ],

        'clarice' => [
            'name' => 'Clarice',
            'username' => 'clamontblanc',
            'photo' => 'https://i.pinimg.com/736x/79/5b/c3/795bc30f412533da4d3ba77d1892a8f1.jpg'
        ],

        'serena' => [
            'name' => 'Serena',
            'username' => 'serenacastelli',
            'photo' => 'https://i.pinimg.com/736x/a8/bb/bb/a8bbbbd0bebb209df26e7d0ed0471932.jpg'
        ],

        'theo' => [
            'name' => 'Theo',
            'username' => 'theolaurent',
            'photo' => 'https://i.pinimg.com/736x/38/21/76/3821763b1cc3030029573e14433f8fd8.jpg'
        ]
    ];


   private $posts = [
    [
        'id' => 1,
        'image' => 'https://i.pinimg.com/1200x/f3/4b/77/f34b77946a0e12f7b766cf14dde87d6f.jpg',
    ],
    [
        'id' => 2,
        'image' => 'https://i.pinimg.com/736x/f2/b4/1d/f2b41d2dccf9f2818c0de7f633f08249.jpg',
    ],
    [
        'id' => 3,
        'image' => 'https://i.pinimg.com/736x/41/9a/18/419a1888c0c8f1123df916347765cbbe.jpg',
    ],
    [
        'id' => 4,
        'image' => 'https://i.pinimg.com/1200x/61/77/6d/61776d363e40891bff9b083c2be240ac.jpg',
    ],
    [
        'id' => 5,
        'image' => 'https://i.pinimg.com/1200x/4e/b0/18/4eb0185f132988d5108ce0b5f0eeb611.jpg',
    ],
    [
        'id' => 6,
        'image' => 'https://i.pinimg.com/736x/b9/b1/e2/b9b1e23d9fca978353f4b748fda128d5.jpg',
    ],
    [
        'id' => 7,
        'image' => 'https://i.pinimg.com/736x/01/80/09/018009764d65097b47216af013ac88ab.jpg',
    ],
    [
        'id' => 8,
        'image' => 'https://i.pinimg.com/1200x/a4/95/70/a4957078bbdc946d90bd3255038fee3c.jpg',
    ],
    [
        'id' => 9,
        'image' => 'https://i.pinimg.com/736x/b7/00/a3/b700a3ebfa6769a8e16500b7bd215125.jpg',
    ],
    [
        'id' => 10,
        'image' => 'https://i.pinimg.com/1200x/c9/78/1d/c9781df5273a829eca4b855d94261001.jpg',
    ],
    [
        'id' => 11,
        'image' => 'https://i.pinimg.com/736x/72/78/39/7278391cb1291ff72d32c5bccfe9ad45.jpg',
    ],
    [
    'id' => 12,
    'image' => 'https://i.pinimg.com/1200x/a7/c5/e8/a7c5e8db8163a9f893c16ea7d679b8f8.jpg',
],
[
    'id' => 13,
    'image' => 'https://i.pinimg.com/1200x/5a/54/81/5a548106feaffbd0aeb698067985988b.jpg',
],
[
    'id' => 14,
    'image' => 'https://i.pinimg.com/736x/aa/23/0e/aa230ebf636db2a481190a547ebaee53.jpg',
    'title' => 'Editorial Conceitual'
],
[
    'id' => 15,
    'image' => 'https://i.pinimg.com/736x/f8/d7/56/f8d7569cd960eccf3b95b14a5572761c.jpg',
],
[
    'id' => 16,
    'image' => 'https://i.pinimg.com/736x/12/e9/96/12e996b72bf57940ab4e6340e52e1ee8.jpg',
],
[
    'id' => 17,
    'image' => 'https://i.pinimg.com/1200x/7a/8a/3f/7a8a3fdbc545bcff820c699b12747433.jpg',
],
[
    'id' => 18,
    'image' => 'https://i.pinimg.com/736x/6d/15/69/6d1569cc86d315d11ebd87292b81a08c.jpg',
],
[
    'id' => 19,
    'image' => 'https://i.pinimg.com/736x/96/a0/4b/96a04ba8f3a2e707a05984bac25a04cc.jpg',
],
[
    'id' => 20,
    'image' => 'https://i.pinimg.com/736x/f0/2c/42/f02c4276aa6577390e62af70e701daf3.jpg',
],
[
    'id' => 21,
    'image' => 'https://i.pinimg.com/736x/ae/cc/08/aecc089ea788293eb6facb345b682cb2.jpg',
],
[
    'id' => 22,
    'image' => 'https://i.pinimg.com/1200x/38/9a/df/389adf529a5f23ebfcef5afb45bc08fd.jpg',
],
[
    'id' => 23,
    'image' => 'https://i.pinimg.com/736x/48/3e/1b/483e1b916a058f12790429e931196309.jpg',
],
[
    'id' => 24,
    'image' => 'https://i.pinimg.com/736x/d9/6f/6e/d96f6e16ce49941c641bcad4866792a3.jpg',
],
[
    'id' => 25,
    'image' => 'https://i.pinimg.com/1200x/ff/7c/4f/ff7c4feeff0ebf08a7815589bb45b0fb.jpg',
],
[
    'id' => 26,
    'image' => 'https://i.pinimg.com/1200x/ae/a9/0a/aea90a33c6e07df2bb551b0de05f1a6f.jpg',
],
[
    'id' => 27,
    'image' => 'https://i.pinimg.com/736x/82/a1/d8/82a1d8d2cde0c4beb6a32d1cb34728a9.jpg',
],
[
    'id' => 28,
    'image' => 'https://i.pinimg.com/1200x/24/c9/f7/24c9f7ee7e253fca6138552f1c8628a4.jpg',
],
[
    'id' => 29,
    'image' => 'https://i.pinimg.com/736x/41/c7/37/41c737db8ecb64ba9929090a29618d24.jpg'
],
[
    'id' => 30,
    'image' => 'https://i.pinimg.com/736x/25/d9/c4/25d9c4e2d71b603ca3fbc72a53275011.jpg'
],
[
    'id' => 31,
    'image' => 'https://i.pinimg.com/736x/27/d4/f8/27d4f86c2913b9317c9bf0ec4d726034.jpg'
],
[
    'id' => 32,
    'image' => 'https://i.pinimg.com/1200x/c5/f3/49/c5f3494903aee767371a039699d62fd9.jpg'
],
[
    'id' => 33,
    'image' => 'https://i.pinimg.com/736x/3c/21/24/3c2124196271632abcb1e5e998fa1281.jpg'
],
[
    'id' => 34,
    'image' => 'https://i.pinimg.com/736x/ae/c7/ff/aec7ff064aab9a637059603174e2d788.jpg'
],
[
    'id' => 35,
    'image' => 'https://i.pinimg.com/1200x/9a/54/e6/9a54e6857e763da79ba1a67b71354779.jpg'
],
[
    'id' => 36,
    'image' => 'https://i.pinimg.com/736x/99/9a/1f/999a1f8616fc4467fe3e12860db93abf.jpg'
],
[
    'id' => 37,
    'image' => 'https://i.pinimg.com/736x/72/f6/3e/72f63e51c5083528342cd286eb3cc943.jpg'
],
[
    'id' => 38,
    'image' => 'https://i.pinimg.com/1200x/c5/18/63/c518638db078aa1e3af9ebee57176fc4.jpg'
],
[
    'id' => 39,
    'image' => 'https://i.pinimg.com/736x/f5/33/5e/f5335e46acbab41092b12cbff7f5efff.jpg'
],
[
    'id' => 40,
    'image' => 'https://i.pinimg.com/1200x/0b/a0/39/0ba0392bf2cc111b8ef08e1eea8b65cb.jpg'
],
[
    'id' => 41,
    'image' => 'https://i.pinimg.com/736x/0e/be/30/0ebe30c68c72b2202db90361947ed8b2.jpg'
],
[
    'id' => 42,
    'image' => 'https://i.pinimg.com/736x/23/10/c6/2310c69323691ed98494e87197bdf60a.jpg'
],
[
    'id' => 43,
    'image' => 'https://i.pinimg.com/736x/e9/1f/66/e91f669cff19beb00123c2207d55eb65.jpg'
],
[
    'id' => 44,
    'image' => 'https://i.pinimg.com/736x/02/90/0b/02900b8603c3fe66f761ac75fc81f423.jpg'
],
[
    'id' => 45,
    'image' => 'https://i.pinimg.com/736x/95/c3/20/95c320e7a90476f00d43881aff9aefef.jpg'
],
[
    'id' => 46,
    'image' => 'https://i.pinimg.com/1200x/ba/29/58/ba29585cd9b470ef6bf439ad3485595b.jpg'
],
[
    'id' => 47,
    'image' => 'https://i.pinimg.com/736x/13/cc/b6/13ccb6a50f3ecc05d5cfb352228333e6.jpg'
],
[
    'id' => 48,
    'image' => 'https://i.pinimg.com/1200x/f9/53/e6/f953e694a71ad4e256b5b85f37971a80.jpg'
],
[
    'id' => 49,
    'image' => 'https://i.pinimg.com/1200x/7f/b2/89/7fb28967293105e8455dcaece7056ceb.jpg'
],
[
    'id' => 50,
    'image' => 'https://i.pinimg.com/1200x/22/d3/69/22d36972e8e7c540e8ea1b9e0410db20.jpg'
],
[
    'id' => 51,
    'image' => 'https://i.pinimg.com/1200x/05/05/0b/05050b9b87985a62a014bbd64a161627.jpg'
],
[
    'id' => 52,
    'image' => 'https://i.pinimg.com/736x/3e/9a/23/3e9a23b99d1f590afb7e991d1576120d.jpg'
],
[
    'id' => 53,
    'image' => 'https://i.pinimg.com/736x/a9/9b/ac/a99bac497e01fd9fa23d2e47d3fa63ff.jpg'
],
[
    'id' => 54,
    'image' => 'https://i.pinimg.com/1200x/29/26/68/292668b371954c2c84637a603e2b1f7d.jpg'
],
[
    'id' => 55,
    'image' => 'https://i.pinimg.com/736x/de/0b/b3/de0bb3d8814aa0735fd70dce5f9b040b.jpg'
],
[
    'id' => 56,
    'image' => 'https://i.pinimg.com/736x/6d/b5/d9/6db5d9c565bb719634f161f57028261b.jpg'
],
[
    'id' => 57,
    'image' => 'https://i.pinimg.com/1200x/fb/01/c9/fb01c9c343ebd4cb9b9ca0d98efb4bf4.jpg'
],
[
    'id' => 58,
    'image' => 'https://i.pinimg.com/1200x/c3/72/3e/c3723e8863ecaeb65ac8644708f096f9.jpg'
]

];


    public function index(Request $request)
    {
        $likes = session()->get('likes', []);

        return view('home', [
            'users' => $this->users,
            'posts' => $this->posts,
            'likes' => $likes
        ]);
    }

    public function like($id)
    {
        $likes = session()->get('likes', []);

        if (isset($likes[$id])) {
            unset($likes[$id]);
        } else {
            $likes[$id] = true;
        }

        session()->put('likes', $likes);

        return redirect()->back();
    }
}