<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>My Page</title>
<!-- 
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: peachpuff;
        }
    </style> 
-->
</head>
<body class="h-full">
<!--
    <a href="/">Home</a>
    <a href="/blog">Blog</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <br>
    <h1>Halaman Home</h1>

    <script src="js/script.js"></script>
-->

<div class="min-h-full">
    <x-navbar></x-navbar>
  
    <x-header>{{ $title }}</x-header>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        {{ $slot }}
      </div>
    </main>
  </div>
  
</body>
</html>

    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
