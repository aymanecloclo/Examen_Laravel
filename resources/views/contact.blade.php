@extends('layouts.app')

@section('title','Contact')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Contactez-nous</h1>
    <p class="mb-4 text-gray-600">Vous pouvez nous écrire par email ou utiliser le formulaire ci-dessous :</p>

    <p class="mb-4 font-semibold">Email : <span class="text-blue-600">contact@shop.com</span></p>

    <form action="#" class="space-y-4">
        <input type="text" placeholder="Votre nom" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <input type="email" placeholder="Votre email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <textarea placeholder="Votre message" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">Envoyer</button>
    </form>
</div>
@endsection
