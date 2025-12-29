@props([
    'items' => [],
    'icon' => null,
    'label' => '',
    'openRoutes' => [],
])

@php
    $isOpenInit = false;
    if (is_array($openRoutes) && count($openRoutes)) {
        foreach ($openRoutes as $r) {
            if (
                (is_string($r) && \Illuminate\Support\Str::contains($r, '*') ? \Illuminate\Support\Facades\Route::is($r) : \Illuminate\Support\Facades\Route::is($r))
            ) {
                $isOpenInit = true;
                break;
            }
        }
    }
@endphp

<li class="relative px-6 py-3" x-data="{ isOpen: {{ $isOpenInit ? 'true' : 'false' }} }">
    <button
        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 focus:outline-none"
        x-on:click="isOpen = !isOpen" aria-haspopup="true">
        <span class="inline-flex items-center">
            @if($icon)
                <i class="fas {{ $icon }} w-5 h-5"></i>
            @endif
            <span class="ml-4">{{ $label }}</span>
        </span>
        <i class="fas" x-bind:class="{ 'fa-chevron-down': !isOpen, 'fa-chevron-up': isOpen }"></i>
    </button>

    <ul x-show="isOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95"
        class="mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 dark:text-gray-400">
        @foreach($items as $item)
            <li class="relative px-6 py-2">
                @php
                    $isActive = false;
                    if (isset($item['active']) && $item['active']) {
                        $isActive = true;
                    } elseif (isset($item['route'])) {
                        $isActive = \Illuminate\Support\Facades\Route::is($item['route']);
                    }

                    // Generate href from 'href' or from named 'route' when href not provided
                    if (isset($item['href']) && $item['href']) {
                        $href = $item['href'];
                    } elseif (isset($item['route']) && $item['route']) {
                        try {
                            $href = route($item['route']);
                        } catch (\Exception $e) {
                            $href = '#';
                        }
                    } else {
                        $href = '#';
                    }
                @endphp

                @if($isActive)
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif

                <x-nav-link :href="$href"
                    class="inline-flex items-center w-full transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ $isActive ? 'text-gray-800 dark:text-gray-100' : '' }}">
                    @if(isset($item['icon']))
                        <i class="fas {{ $item['icon'] }} w-5 h-5"></i>
                    @endif
                    <span class="ml-4">{{ $item['label'] }}</span>
                </x-nav-link>
            </li>
        @endforeach
    </ul>
</li>
