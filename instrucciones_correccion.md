# Corrección para sidebar.blade.php

En tu archivo `resources\views\layouts\includes\admin\sidebar.blade.php`, necesitas hacer el siguiente cambio:

Buscar:
```php
$links = [
    [
        'name' => 'Dashboard',
        'icon' => 'fa-solid fa-gauge',
        'route' => route('admin.dashboard'),
        'active' => request()->routeIs('admin.dashboard'),
    ],
```

Reemplazar por:
```php
$links = [
    [
        'name' => 'Dashboard',
        'icon' => 'fa-solid fa-gauge',
        'route' => route('admin.dashboard'),
        'active' => request()->routeIs('admin.dashboard'),
    ],
```

El problema está en cómo Laravel está registrando las rutas en bootstrap/app.php. La solución más limpia es mantener el nombre de la ruta como 'dashboard' en routes/admin.php ya que Laravel automáticamente lo está prefijando con 'admin.' para crear el nombre completo 'admin.dashboard'.
