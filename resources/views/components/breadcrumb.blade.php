<nav class="flex text-sm text-gray-500 dark:text-gray-400 mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="/admin" class="inline-flex items-center hover:underline">
                <i class="fa-solid fa-house me-1"></i> Inicio
            </a>
        </li>
        @if(isset($items) && is_array($items))
            @foreach($items as $item)
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"></path></svg>
                        @if(isset($item['url']))
                            <a href="{{ $item['url'] }}" class="hover:underline">{{ $item['label'] }}</a>
                        @else
                            <span class="text-gray-700 dark:text-gray-200">{{ $item['label'] }}</span>
                        @endif
                    </div>
                </li>
            @endforeach
        @endif
    </ol>
</nav>
