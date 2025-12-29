<!DOCTYPE html>
<html x-bind:class="{ 'theme-dark': dark }" x-data="mainApp()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title') - {{ config('app.name') }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-100 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-gray-50 rounded-lg shadow-xl dark:bg-gray-800">
            @yield('content')
        </div>
    </div>
</body>

</html>
