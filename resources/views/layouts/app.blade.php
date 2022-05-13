<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Titutlo -->
        <title>Inicio - Join Pet</title>

        <x-meta>
            {{$meta}}
        </x-meta>

        <!-- Styles -->
        <x-css></x-css>
    </head>
    <body>
        <x-header></x-header>

        {{ $slot }}

        <x-footer></x-footer>

        <x-js>
            {{$js}}
        </x-js>
    </body>
</html>
