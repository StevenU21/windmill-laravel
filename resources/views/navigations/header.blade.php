<header class="z-10 py-4 bg-gray-50 shadow-md dark:bg-gray-800">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
        <!-- Mensajes de prueba eliminados -->
        <!-- Mobile hamburger -->
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            x-on:click="$store.menu.toggleSideMenu()" aria-label="Menu">
            <i class="fas fa-bars w-6 h-6"></i>
        </button>
        <!-- Search input -->
        <div class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <i class="fas fa-search w-4 h-4"></i>
                </div>
                <input
                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-gray-100 focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="Search for projects" aria-label="Search" />
            </div>
        </div>
        <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
                <button class="rounded-md focus:outline-none focus:shadow-outline-purple"
                    x-on:click="$store.theme.toggle()" aria-label="Toggle color mode">
                    <i class="fas fa-sun w-5 h-5" x-show="!$store.theme.dark"></i>
                    <i class="fas fa-moon w-5 h-5" x-show="$store.theme.dark"></i>
                </button>
            </li>
            <!-- Notifications menu -->
            <li class="relative" x-data="{ open: false }">
                <button @click="open = !open" @keydown.escape="open = false"
                    class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                    aria-label="Notifications" aria-haspopup="true">
                    <i class="fas fa-bell w-5 h-5"></i>
                    <!-- Notification badge -->
                    <span aria-hidden="true"
                        class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-gray-50 rounded-full dark:border-gray-800"></span>
                </button>
                <div x-show="open" @click.away="open = false" x-transition
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-gray-50 border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700 z-50">
                    <a class="flex items-center justify-between w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#">
                        <span>Messages</span>
                        <span
                            class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                            13
                        </span>
                    </a>
                    <a class="flex items-center justify-between w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#">
                        <span>Sales</span>
                        <span
                            class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                            2
                        </span>
                    </a>
                    <a class="flex items-center justify-between w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#">
                        <span>Alerts</span>
                    </a>
                </div>
            </li>
            <!-- Profile menu -->
            <li class="relative" x-data="{ open: false }">
                <button @click="open = !open" @keydown.escape="open = false"
                    class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                    aria-label="Account" aria-haspopup="true">
                    <img class="object-cover w-8 h-8 rounded-full"
                        src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                        alt="" aria-hidden="true" />
                </button>
                <div x-show="open" @click.away="open = false" x-transition
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-gray-50 border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700 z-50"
                    aria-label="submenu">
                    <a class="flex items-center w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="{{ route('profile.show') }}">
                        <i class="fas fa-user w-4 h-4 mr-3"></i>
                        <span>Profile</span>
                    </a>
                    <a class="flex items-center w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#">
                        <i class="fas fa-cog w-4 h-4 mr-3"></i>
                        <span>Settings</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit"
                            class="flex items-center w-full px-2 py-1 text-sm font-semibold rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                            <i class="fas fa-sign-out-alt w-4 h-4 mr-3"></i>
                            <span>Log out</span>
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header>
