<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
   <body class="flex">
        @include("components.sidebar")
        <div class="w-full h-screen p-4 pl-4">

            <h1 class="text-2xl mt-8 mb-8">List of Products</h1>
            <div>
                <table class="w-full border-collapse">
                    <tr class="flex gap-8 border bg-neutral-100 p-2">
                        <th class="text-left">ID</th>
                        <th class="text-left">Name</th>
                        <th class="text-left">Description</th>
                        <th class="text-left">Price (PHP)</th>
                        <th class="text-left">Qty</th>
                    </tr>
                    <tr class="flex gap-8 p-2">
                        <td class="text-left">01</td>
                        <td class="text-left">Item 1</td>
                        <td class="text-left">Lorem ipsum</td>
                        <td class="text-left">300</td>
                        <td class="text-left">10</td>
                    </tr>
                </table>
            </div>
        </div>
   </body>
</html>
