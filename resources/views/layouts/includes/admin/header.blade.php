<h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">
    @isset($header)
        {{ $header }}
    @else
        {{ $title ?? 'Dashboard' }}
    @endisset
</h1>

@isset($description)
    <p class="text-gray-600 dark:text-gray-400 mb-4">
        {{ $description }}
    </p>
@endisset
