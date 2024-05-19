@props(['src' => null])
<div
    {{ $attributes->merge(['class' => 'shrink-0 inline-flex items-center justify-center overflow-hidden rounded-full border-2 border-gray-200 dark:border-secondary-500 w-10 h-10 ms-2']) }}>

    @if ($src)
        <img @class([
            'shrink-0 w-full h-full object-cover object-center rounded-full',
        ]) src="{{ $src }}" />
    @endif

    @if (!$src)
        <svg class="shrink-0 w-full h-full text-gray-500 dark:text-gray-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                clip-rule="evenodd" />
        </svg>
    @endif
</div>
