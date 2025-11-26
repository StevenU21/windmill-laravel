@props([
    'title' => '',
    'subtitle' => null,
    'icon' => null,
    'actionHref' => null,
    'actionLabel' => null,
    'actionPermission' => null,
])

<style>
    .animate-gradient {
        background-image: linear-gradient(90deg, #c026d3, #7c3aed, #4f46e5, #c026d3);
        background-size: 300% 100%;
        animation: gradientShift 8s linear infinite alternate;
        filter: saturate(1.2) contrast(1.05);
        will-change: background-position;
    }

    @keyframes gradientShift {
        0% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @media (prefers-reduced-motion: reduce) {
        .animate-gradient { animation: none; }
    }
</style>

<!-- Page header component -->
<section class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-purple-600 to-indigo-600 shadow-lg animate-gradient">
    <div class="absolute inset-0 opacity-20 pointer-events-none"
        style="background-image: radial-gradient(ellipse at top left, rgba(255,255,255,.35), transparent 40%), radial-gradient(ellipse at bottom right, rgba(0,0,0,.25), transparent 40%);">
    </div>
    <div class="relative p-6 sm:p-8">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight flex items-center">
                    @if($icon)
                        <i class="fas {{ $icon }} text-white/90 mr-3"></i>
                    @endif
                    {{ $title }}
                </h1>
                @if($subtitle)
                    <p class="mt-1 text-white/80 text-sm">{{ $subtitle }}</p>
                @endif
            </div>

            <div class="flex items-center gap-2">
                @if($actionHref && $actionLabel)
                    @if($actionPermission)
                        @can($actionPermission)
                            <a href="{{ $actionHref }}"
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white text-purple-700 hover:bg-gray-100 text-sm font-semibold shadow">
                                <i class="fas fa-plus"></i>
                                {{ $actionLabel }}
                            </a>
                        @endcan
                    @else
                        <a href="{{ $actionHref }}"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white text-purple-700 hover:bg-gray-100 text-sm font-semibold shadow">
                            <i class="fas fa-plus"></i>
                            {{ $actionLabel }}
                        </a>
                    @endif
                @else
                    {{-- allow custom slot for actions --}}
                    {{ $slot }}
                @endif
            </div>
        </div>
    </div>
</section>
