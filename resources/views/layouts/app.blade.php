<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Tailwind</title>
    @vite('resources/css/tailwind.css')
    @livewireStyles

</head>
<body class="bg-gray-100 text-gray-900">
    @livewireScripts

    <!-- Header -->
    @include('partials.header')

    <!-- Main Content -->
    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
