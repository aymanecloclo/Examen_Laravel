@extends('layouts.app')

@section('title','Détail Produit')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">{{ ucfirst($name) }}</h1>
    <p class="text-gray-700 mb-4">Description du produit ici...</p>
    <p class="text-lg font-semibold text-blue-600">Prix : 850€</p>
    <a href="/produits" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">Retour à la liste</a>
</div>
@endsection
