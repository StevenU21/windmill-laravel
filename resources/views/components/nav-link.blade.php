@props(['href' => '#'])

<a x-data="{ loading: false }"
    data-href="{{ $href }}"
    class="{{ $attributes->get('class') }}"
    :class="loading ? 'opacity-60 cursor-not-allowed pointer-events-none' : ''"
    :href="loading ? null : $el.dataset.href"
    @click.prevent="if(!loading){ loading = true; window.location = $el.dataset.href }"
    :disabled="loading"
    :aria-disabled="loading.toString()"
    {{ $attributes->except('class') }}>

    <template x-if="loading">
        <svg class="animate-spin mr-2 h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
        </svg>
    </template>

    {{ $slot }}
</a>
