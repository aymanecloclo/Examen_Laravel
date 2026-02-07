<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('produits.index');
    }

public function edit(Product $produit) // $produit ici correspond au nom de la route
{
    return view('products.edit', compact('produit'));
}

  public function update(Request $request, Product $produit)
{
    // Validation simple
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
    ]);

    // Mise à jour
    $produit->update($request->all());

    return redirect()->route('produits.index')->with('success', 'Produit modifié avec succès !');
}

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('produits.index');
    }
}
