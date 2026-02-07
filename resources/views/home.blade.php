@extends('layouts.app')

@section('title','Accueil')

@section('content')
<div class="text-center py-10">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">Bienvenue dans notre boutique</h1>
    <p class="text-gray-700 text-lg mb-6">Découvrez nos meilleurs produits et promotions du moment.</p>
    <a href="/produits" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition">
        Voir nos produits
    </a>
</div>
@endsection
