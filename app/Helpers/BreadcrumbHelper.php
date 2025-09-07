<?php

namespace App\Helpers;

class BreadcrumbHelper
{
    public static function generate()
    {
        $segments = request()->segments();
        $breadcrumbs = [];
        $url = url('/');

        // Siempre agregar el inicio
        $breadcrumbs[] = [
            'label' => 'Inicio',
            'url' => url('/admin'),
        ];

        $accum = 'admin';
        foreach ($segments as $i => $segment) {
            if ($segment === 'admin') continue;
            $accum .= '/' . $segment;
            $label = __(ucwords(str_replace(['-', '_'], ' ', $segment)));
            $breadcrumbs[] = [
                'label' => $label,
                'url' => $i === array_key_last($segments) ? null : url($accum),
            ];
        }
        return $breadcrumbs;
    }
}
