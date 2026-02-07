<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        $products = [
        ['name' => 'Ordinateur Portable', 'price' => '850 DH'],
        ['name' => 'Smartphone', 'price' => '450 DH'],
        ['name' => 'Casque Audio', 'price' => '120 DH'],
    ];

    return view('products', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }
}
