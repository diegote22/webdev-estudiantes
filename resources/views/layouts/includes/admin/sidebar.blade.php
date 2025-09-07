@php
$links = [
    [
        'name' => 'Dashboard',
        'icon' => 'fa-solid fa-gauge',
        'route' => route('admin.dashboard'),
        'active' => request()->routeIs('admin.dashboard'),
    ],
    [
        'header' => 'Administrar páginas',
    ],
    [
        'name' => 'Usuarios',
        'icon' => 'fa-solid fa-users',
        'route' => '#',
        'active' => false,
    ],
    [
        'name' => 'Cursos',
        'icon' => 'fa-solid fa-graduation-cap',
        'route' => '#',
        'active' => false,
        'badge' => [
            'text' => 'Nuevo',
            'class' => 'text-blue-800 bg-blue-100 dark:bg-blue-900 dark:text-blue-300'
        ]
    ],
    [
        'header' => 'Configuración',
    ],
    [
        'name' => 'Perfil',
        'icon' => 'fa-solid fa-user',
        'route' => '#',
        'active' => false,
    ],
    [
        'name' => 'Ajustes',
        'icon' => 'fa-solid fa-gear',
        'route' => '#',
        'active' => false,
    ],
];
@endphp

<aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        :class="{
            'transform-none': open,
            '-translate-x-full': !open
        }"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                @foreach($links as $link)
                    @if(isset($link['header']))
                        <li class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
                            <div class="px-2 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">
                                {{ $link['header'] }}
                            </div>
                        </li>
                    @else
                        <li>
                            <a href="{{ $link['route'] }}"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white {{ $link['active'] ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} group">
                                <i class="{{ $link['icon'] }} w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                                <span class="ms-3 flex-1">{{ $link['name'] }}</span>
                                
                                @if(isset($link['badge']))
                                    <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium rounded-full {{ $link['badge']['class'] }}">
                                        {{ $link['badge']['text'] }}
                                    </span>
                                @endif
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </aside>