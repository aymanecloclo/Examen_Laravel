<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- Tailwind via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 font-sans">

<!-- Navbar -->
<nav class="bg-blue-600 text-white shadow">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a href="/" class="text-xl font-bold">Shop Vitrine</a>
        <div class="space-x-4">
            <a href="/" class="hover:text-gray-200">Accueil</a>
            <a href="/produits" class="hover:text-gray-200">Produits</a>
            <a href="/contact" class="hover:text-gray-200">Contact</a>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container mx-auto p-6">
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white text-center py-4 mt-10">
    &copy; 2026 – Shop Vitrine
</footer>

</body>
</html>
