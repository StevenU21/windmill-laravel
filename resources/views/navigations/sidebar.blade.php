<aside class="relative z-20 hidden w-64 overflow-y-auto bg-gray-50 dark:bg-gray-800 md:block flex-shrink-0">
    <div class="absolute inset-y-0 right-0 w-px bg-transparent pointer-events-none"
        style="box-shadow: 2px 0 14px rgba(16,24,40,0.08); -webkit-box-shadow: 2px 0 14px rgba(16,24,40,0.08);"
        aria-hidden="true"></div>
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            Windmill
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <span
                    class="{{ Route::is('dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <x-nav-link :href="route('dashboard')"
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ Route::is('dashboard') ? 'text-gray-800 dark:text-gray-100' : '' }}">
                    <i class="fas fa-home w-5 h-5"></i>
                    <span class="ml-4">Dashboard</span>
                </x-nav-link>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3">
                <span
                    class="{{ Route::is('categories.*') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <x-nav-link :href="route('categories.index')"
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ Route::is('categories.*') ? 'text-gray-800 dark:text-gray-100' : 'text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200' }}">
                    <i class="fas fa-tags w-5 h-5"></i>
                    <span class="ml-4">Categories</span>
                </x-nav-link>
            </li>
            <!-- Dropdown menu (now a component) -->
            <x-sidebar-dropdown icon="fa-copy" label="Pages" :open-routes="['forms', 'cards', 'charts', 'buttons', 'modals', 'tables']" :items="[
                ['label' => 'Forms', 'icon' => 'fa-file-alt', 'route' => 'forms'],
                ['label' => 'Cards', 'icon' => 'fa-id-card', 'route' => 'cards'],
                ['label' => 'Charts', 'icon' => 'fa-chart-pie', 'route' => 'charts'],
                ['label' => 'Buttons', 'icon' => 'fa-mouse-pointer', 'route' => 'buttons'],
                ['label' => 'Modals', 'icon' => 'fa-window-maximize', 'route' => 'modals'],
                ['label' => 'Tables', 'icon' => 'fa-table', 'route' => 'tables'],
            ]" />
        </ul>
    </div>
</aside>
