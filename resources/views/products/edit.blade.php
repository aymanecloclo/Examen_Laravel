@extends('layouts.app')

@section('title','Modifier Produit')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Modifier le produit</h1>

<form method="POST" action="{{ route('produits.update', $produit) }}" class="space-y-4">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $produit->name }}" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
    <textarea name="description" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $produit->description }}</textarea>
    <input type="number" step="0.01" name="price" value="{{ $produit->price }}" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
    <button class="bg-yellow-400 px-4 py-2 rounded hover:bg-yellow-300 transition">Modifier</button>
</form>

</div>
@endsection
