@extends('layouts.app')

@section('title','Ajouter Produit')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Ajouter un produit</h1>

    <form method="POST" action="{{ route('produits.store') }}" class="space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Nom du produit" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <textarea name="description" placeholder="Description" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        <input type="number" step="0.01" name="price" placeholder="Prix" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">Ajouter</button>
    </form>
</div>
@endsection
