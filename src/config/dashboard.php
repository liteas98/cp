<?php
    return [
        /*
         * Select The Dashboard You Want To Publish
         *
         * Available Dashboard : vuexy
         */
        'dashboard' => 'vuexy',

        'models' => [
            [
                'name'              => 'User',
                'table_name'        => 'users',
                'primary_key'       => null,
                'incrementing'      => null,
                'key_type'          => null,
                'timestamps'        => null,
                'date_format'       => null,
                'auth'              => true,
                'has_slug'          => false,
                'notifiable'        => false,
                'options'           => [
                    'CREATED_AT'    => 'creation_date'
                ],
                'migration'         => [
                    'active'        => true,
                    'data'          => [
                        [
                            'name'          => 'id',
                            'type'          => 'string',
                            'nullable'      => false,
                            'default'       => false,
                            'unique'        => false
                        ]
                    ]
                ],
                'seeder'            => [
                    'active'        => true,
                    'data'          => 'auto'
                ],
                'controller'        => [
                    'name'          => 'UserController',
                    'functionality' => ['index', 'edit', 'create', 'delete', 'view']
                ],
                'request'           => [
                    'active'        => true,
                    'name'          => 'UserRequest',
                    'data'          => [
                        'name'      => 'string:255|nullable|default:1|unique'
                    ]
                ],
                'view'              => [
                    'active'        => true,
                    'dir'           => 'users',
                    'files'         => ['index', 'edit', 'create']
                ],
                'relationships'     => [
                    [
                        'name'          => 'posts',
                        'table'         => 'posts',
                        'type'          => 'hasMany',
                        'foreign_key'   => 'user_id',
                        'local_key'     => 'id'
                    ]
                ]
            ]
        ],
    ];