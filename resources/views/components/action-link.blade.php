@props([
    'href' => '#',
    'icon' => null,
    'activeClass' => '',
])

<a x-data="{ loading: false }"
    data-href="{{ $href }}"
    data-active-class="{{ $activeClass }}"
    :class="['inline-flex items-center px-4 py-2 rounded-lg bg-white text-purple-700 text-sm font-semibold shadow hover:bg-gray-100', loading ? 'opacity-60 cursor-not-allowed' : '', $el.dataset.activeClass || '']"
    :href="loading ? null : $el.dataset.href"
    @click.prevent="
        if (!loading) {
            loading = true;
            window.location = $el.dataset.href;
        }
    "
    :disabled="loading"
    :aria-disabled="loading.toString()"
>
    <template x-if="loading">
        <svg class="animate-spin mr-2 h-5 w-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
        </svg>
    </template>
    @if($icon)
        <i class="{{ $icon }} w-5 h-5 mr-2" x-show="!loading"></i>
    @endif
    {{ $slot }}
</a>
