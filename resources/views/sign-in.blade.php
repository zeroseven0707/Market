<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <form action="{{ route('auth') }}" method="post">@csrf
             email : <input type="email" name="posEmail" id=""> <br>
             password : <input type="password" name="posPassword" id=""> <br>
             pin : <input type="password" name="posPin" id=""> <br>
             <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
