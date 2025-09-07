<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <!-- Styles -->
    @livewireStyles

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/282fd0a33c.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans antialiased sm:overflow-auto" x-data="{ open: false }" :class="{ 'overflow-hidden': open }">

    @include('layouts.includes.admin.navigation')

    @include('layouts.includes.admin.sidebar')

    <div class="p-4 sm:ml-64">
        @if ((isset($header) && trim($header)) || (isset($description) && trim($description)))
            <div class="mb-4 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm mt-16">
                @include('layouts.includes.admin.header')
            </div>
        @endif
        @php
            $breadcrumb = \App\Helpers\BreadcrumbHelper::generate();
        @endphp
        <x-breadcrumb :items="$breadcrumb" />
        <div>
            {{ $slot }}
        </div>
    </div>

    <div x-cloak x-on:click="open = false" x-show="open"
        class="bg-gray-900 bg-opacity-50 fixed inset-0 z-30 sm:hidden"></div>

    @stack('modals')

    @livewireScripts

</body>

</html>
