<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midori</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <div class="petals-container pointer-events-none">
            <div class="petal text-pink-200 text-3xl">🌸</div>
            <div class="petal text-pink-400 text-xl">🌸</div>
            <div class="petal text-pink-300 text-3xl">🌸</div>
            <div class="petal text-pink-400 text-2xl">🌸</div>
        </div>

        <div class="leaves-container pointer-events-none">
            <div class="leaf text-green-400 text-2xl">🍃</div>
            <div class="leaf text-green-500 text-xl">🍃</div>
            <div class="leaf text-green-400 text-3xl">🍃</div>
            <div class="leaf text-green-600 text-xl">🍃</div>
            <div class="leaf text-green-500 text-2xl">🍃</div>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-emerald-100 shadow-md overflow-hidden sm:rounded-3xl">
            {{ $slot }}
        </div>

    </div>

</body>
</html>
