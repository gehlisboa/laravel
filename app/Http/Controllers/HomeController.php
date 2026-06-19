<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $users = [
        'olivia' => [
            'name' => 'Olívia',
            'username' => 'livfontenelle',
            'photo' => 'https://i.pinimg.com/736x/c6/fd/58/c6fd587c411a7423837845b4b9fc5171.jpg'
        ],
        'helena' => [
            'name' => 'Helena',
            'username' => 'helealessandro',
            'photo' => 'https://i.pinimg.com/736x/58/20/8d/58208d6b02c4991555fb7374f1ee2a00.jpg'
        ],
        'cecilia' => [
            'name' => 'Cecília',
            'username' => 'cecivalença',
            'photo' => 'https://i.pinimg.com/736x/5a/79/68/5a7968b1bbf2b60f20287fd3a2e6d90d.jpg'
        ]
    ];

    private $posts = [
        [
            'id' => 1,
            'image' => 'https://i.pinimg.com/736x/f5/d0/f5/f5d0f5b53eac5b31ff0dd82997527546.jpg',
            'title' => 'Editorial Urbano'
        ],
        [
            'id' => 2,
            'image' => 'https://i.pinimg.com/736x/f2/b4/1d/f2b41d2dccf9f2818c0de7f633f08249.jpg',
            'title' => 'Street Style'
        ],
        [
            'id' => 3,
            'image' => 'https://i.pinimg.com/736x/41/9a/18/419a1888c0c8f1123df916347765cbbe.jpg',
            'title' => 'Fashion Week'
        ],
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