<!DOCTYPE html>
<html x-bind:class="{ 'theme-dark': dark }" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title') - {{ config('app.name') }}
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div x-data="{ dark: false, isSideMenuOpen: false, isPagesMenuOpen: false, isNotificationsMenuOpen: false, isProfileMenuOpen: false,
        toggleSideMenu() { this.isSideMenuOpen = !this.isSideMenuOpen },
        closeSideMenu() { this.isSideMenuOpen = false },
        togglePagesMenu() { this.isPagesMenuOpen = !this.isPagesMenuOpen },
        toggleTheme() { this.dark = !this.dark },
        toggleNotificationsMenu() { this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen },
        closeNotificationsMenu() { this.isNotificationsMenuOpen = false },
        toggleProfileMenu() { this.isProfileMenuOpen = !this.isProfileMenuOpen },
        closeProfileMenu() { this.isProfileMenuOpen = false }
    }"
    class="flex h-screen bg-gray-50 dark:bg-gray-900" x-bind:class="{ 'overflow-hidden': isSideMenuOpen }">
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
