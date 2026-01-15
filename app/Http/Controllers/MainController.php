<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show_index(){
        return view('home');
    }

    public function show_array(){
        $array = [
            ['id' => 1, 'title' => 'Топливо', 'price' => 500, 'path' => 'fuel.jpg'],
            ['id' => 2, 'title' => 'Снаряжение', 'price' => 500, 'path' => 'logo.png'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 500, 'path' => 'logo.png'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 500, 'path' => 'logo.png'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 500, 'path' => 'logo.png']
        ];
        return view('array', compact('array'));
    }
}
