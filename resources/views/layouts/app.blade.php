<!DOCTYPE html>
<html x-data x-bind:class="{ 'dark': $store.theme.dark }" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title') - {{ config('app.name') }}
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div x-data class="flex h-screen bg-gray-100 dark:bg-gray-900"
        x-bind:class="{ 'overflow-hidden': $store.menu.isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('navigations.sidebar')
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        @include('navigations.mobile-sidebar')

        <div class="flex flex-col flex-1 w-full">
            @include('navigations.header')
            <main class="h-full overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
