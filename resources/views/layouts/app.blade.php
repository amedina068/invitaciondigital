<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full">
      <div class="min-h-full">
        <x-app-topbar/>

        <div class="py-10">
          <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">{{ $title }}</h1>
            </div>
          </header>
          <main>
            <div class="mt-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
              <div>
                  {{ $slot }}
              </div>
            </div>
          </main>
        </div>
      </div>
    </body>
</html>
