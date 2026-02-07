@extends('layouts.app')

@section('title','Produits')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Nos produits</h1>
    <a href="{{ route('produits.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-400 transition">
        Ajouter un produit
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($products as $product)
        <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2 text-gray-700">{{ $product->name }}</h3>
            <p class="text-gray-600 mb-2">{{ $product->price }} €</p>
            <div class="flex space-x-2 mt-4">
                <a href="{{ route('produits.edit', $product) }}" class="bg-yellow-400 px-3 py-1 rounded hover:bg-yellow-300 transition">Modifier</a>
                <form method="POST" action="{{ route('produits.destroy', $product) }}">
                    @csrf
                    @method('DELETE')
                    <button   type="submit" class="bg-red-500 px-3 py-1 rounded text-white hover:bg-red-400 transition">Supprimer</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
