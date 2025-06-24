<?php

return [
    [
        'type' => 'item',
        'title' => 'Dashboard',
        'icon' => 'fas.gauge',
        'link' => 'dashboard',
        'can' => 'dashboard'
    ],
    [
        'type' => 'item',
        'title' => 'Users',
        'icon' => 'fas.users',
        'link' => 'users',
        'can'  => 'manage-users',
    ],
    [
        'type' => 'sub',
        'title' => 'Settings',
        'icon' => 'fas.gear',
        'can'  => 'settings',
        'submenu' => [
            [
                'title' => 'Roles',
                'icon' => 'fas.user-tie',
                'link' => 'roles',
                'can'  => 'manage-roles',
            ],
            [
                'title' => 'Permissions',
                'icon' => 'fas.users-line',
                'link' => 'permissions',
                'can'  => 'manage-permissions',
            ],
        ]
    ],
];