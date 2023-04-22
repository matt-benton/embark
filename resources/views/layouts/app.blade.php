<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <title>
            @isset ($title)
                {{ $title }} | {{ config('app.name') }}
            @else
                {{ config('app.name') }}
            @endisset
        </title>
        @livewireStyles
    </head>
    <body>
        <div class="narrow-content">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
