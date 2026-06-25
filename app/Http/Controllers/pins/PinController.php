<?php

namespace App\Http\Controllers\pins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinController extends Controller
{
    public function index()
    {
    $pins = [

    "https://i.pinimg.com/736x/8b/64/41/8b64413047a65331f9ff31a3b3aa2d1d.jpg",
    "https://i.pinimg.com/736x/b5/fa/42/b5fa42e29acb31766ca61590f33496aa.jpg",
    "https://i.pinimg.com/736x/81/a9/95/81a995ac1ba7dcf98d50016a7abfbe74.jpg",
    "https://i.pinimg.com/736x/22/f1/c3/22f1c33af4165b312b8db4640e522c12.jpg",
    "https://i.pinimg.com/736x/69/c5/df/69c5df51bd73eca15c37ed01a37beba5.jpg",

    "https://i.pinimg.com/736x/59/7d/89/597d89d2872cf59a24cae2e94ecde195.jpg",
    "https://i.pinimg.com/736x/dc/33/c5/dc33c54834759f7c9af981699899707b.jpg",
    "https://i.pinimg.com/736x/5e/b6/51/5eb651c09b89287559da8a0f0ebe3a8d.jpg",
    "https://i.pinimg.com/736x/aa/70/3e/aa703ef941caf4bf0de3614cf9a4c8d9.jpg",
    "https://i.pinimg.com/736x/32/60/17/326017366e7d0dfbe57aac7a727c15fb.jpg",

    "https://i.pinimg.com/736x/8a/bb/ca/8abbca8158d3fab46f2da9df84e7f51f.jpg",
    "https://i.pinimg.com/736x/9e/c3/95/9ec3950b3d28599642acb68040f5978e.jpg",
    "https://i.pinimg.com/736x/3b/7d/91/3b7d91a07b5c4aaa9924512eba40cf50.jpg",
    "https://i.pinimg.com/736x/15/da/1a/15da1ae6b1f8bbb5a6c93b6779fc8921.jpg",
    "https://i.pinimg.com/736x/b1/b8/70/b1b87094a7d1dc03b0eecbd90d71705b.jpg",

    "https://i.pinimg.com/736x/46/cd/66/46cd64aafbf127b0a801caec18075c3.jpg",
    "https://i.pinimg.com/736x/8b/17/b7/8b17b72ded46f7108dce7ee2e1b4d755.jpg",
    "https://i.pinimg.com/736x/05/56/f8/0556f8d3f308798736a8f7504ec5556d.jpg",
    "https://i.pinimg.com/736x/79/45/0e/79450eabd2395d276306fe82576be544.jpg",
    "https://i.pinimg.com/736x/9d/5e/eb/9d5eeb0bac145cad54ca561519552e3b.jpg",

];


      return view('pins', compact('pins'));
    }
}