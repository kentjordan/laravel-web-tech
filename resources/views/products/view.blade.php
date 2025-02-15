<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/lucide@latest"></script>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

    </head>
   <body class="flex">
        @include("components.sidebar")
        <div class="w-full h-screen p-4 pl-4 select-none">
            <h1 class="text-2xl mt-8 mb-8">List of Products</h1>
            <div class="flex justify-between mb-4 items-center">
                <div class="flex gap-2 p-2 rounded-md items-center border-neutral-300 border ">
                    <i data-lucide="search" class="text-neutral-500 w-5"></i>
                    <input type="text" placeholder="Search product" class="focus:outline-none">
                </div>
                <div class="flex gap-2 cursor-pointer">
                    <i data-lucide="plus" class="w-4 text-sm"></i>
                    <span>New Item</span>
                </div>
            </div>
            <div class="overflow-auto">
                <table class="table">
                    <tr>
                        <th>Actions</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th class="text-left max-w-16">Description</th>
                        <th>Price (PHP)</th>
                        <th>Qty</th>
                    </tr>
                    @foreach ($product_items as $item)
                        <tr class="*:border *:p-4">
                            <td>
                                <div class="flex gap-2">
                                    <i data-lucide="pencil" class="cursor-pointer w-4"></i>
                                    <i data-lucide="trash" class="cursor-pointer w-4 text-red-700"></i>
                                </div>
                            </td>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['name']}}</td>
                            <td class="text-left max-w-[32ch] text-ellipsis overflow-hidden whitespace-nowrap">{{$item['description']}}</td>
                            <td>{{$item['price']}}</td>
                            <td>{{$item['qty']}}</td>
                        </tr>
                    @endforeach
                </table>
        </div>
        </div>
   </body>
   <script>
        lucide.createIcons();
    </script>
</html>
