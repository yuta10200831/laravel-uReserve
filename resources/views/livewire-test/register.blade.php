<html>

<head>
 <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.bunny.net">
 <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

 <!-- Scripts -->
 @vite(['resources/css/app.css', 'resources/js/app.js'])

 <!-- Styles -->
 @livewireStyles
</head>

<body>
 livewireテスト <span class="text-blue-300">register</span>
 <livewire:register />

 @livewireScripts
</body>

</html>