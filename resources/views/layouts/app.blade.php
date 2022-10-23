<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Titutlo -->
        <title>@yield('pagina')| Join Pet</title>

        <x-page.meta>
            {{$meta}}
        </x-page.meta>

        <!-- Styles -->
        <x-page.css></x-page.css>
    </head>
    <body>
        <x-page.header></x-page.header>

        {{ $slot }}

        <x-page.footer></x-page.footer>

        <x-page.js>
            {{$js}}
        </x-page.js>
    </body>
</html>
