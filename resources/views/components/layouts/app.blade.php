<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body @class(['container', 'mx-auto'])>
        <nav @class(['pb-4'])>
            <a @class(['text-white' => request()->is('/'), 'bg-blue-800' => request()->is('/'), 'rounded', 'bg-blue-300', 'hover:bg-blue-600', 'p-2']) href="/">Todos app</a>
            <a @class(['text-white' => request()->is('counter'), 'bg-blue-800' => request()->is('counter'),'rounded', 'bg-blue-300', 'hover:bg-blue-600', 'p-2']) href="/counter">Counter app</a>
        </nav>
        {{ $slot }}
    </body>
</html>
