<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
         @foreach ($product['data'] as $item)
         <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
             <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
               <p>{{ $item['namaVarian'] }}</p>
               <img src="{{ $item['barcodeImage'] }}" alt="">
             </div>
         </div>
         @endforeach
        </div>
    </body>
</html>
