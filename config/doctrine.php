<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Entity Mangers
    |--------------------------------------------------------------------------
    |
    | Configure your Entity Managers here. You can set a different connection
    | and driver per manager and configure events and filters. Change the
    | paths setting to the appropriate path and replace App namespace
    | by your own namespace.
    |
    | Available meta drivers: fluent|annotations|yaml|simplified_yaml|xml|simplified_xml|config|static_php|php
    |
    | Available connections: mysql|oracle|pgsql|sqlite|sqlsrv
    | (Connections can be configured in the database config)
    |
    | --> Warning: Proxy auto generation should only be enabled in dev!
    |
    */
    'managers'                  => [
        'cms' => [
            'dev'        => env('APP_DEBUG'),
            'meta'       => env('DOCTRINE_METADATA', 'attributes'),
            'connection' => env('CMS_DB_CONNECTION', 'cms'),
            'namespaces' => [
                'App'
            ],
            'paths'      => [
                base_path('app')
            ],
            'repository' => Doctrine\ORM\EntityRepository::class,
            'proxies'    => [
                'namespace'     => true,
                'path'          => storage_path('proxies'),
                'auto_generate' => env('DOCTRINE_PROXY_AUTOGENERATE', false)
            ],
            /*
            |--------------------------------------------------------------------------
            | Doctrine events
            |--------------------------------------------------------------------------
            |
            | The listener array expects the key to be a Doctrine event
            | e.g. Doctrine\ORM\Events::onFlush
            |
            */
            'events'     => [
                'listeners'   => [],
                'subscribers' => []
            ],
            'filters'    => [],
            'prefix' => 'App\\Entities\\Cms'
        ]
    ],
    /*
    |--------------------------------------------------------------------------
    | Doctrine Extensions
    |--------------------------------------------------------------------------
    |
    | Enable/disable Doctrine Extensions by adding or removing them from the list
    |
    | If you want to require custom extensions you will have to require
    | laravel-doctrine/extensions in your composer.json
    |
    */
    'extensions'                => [
        //LaravelDoctrine\ORM\Extensions\TablePrefix\TablePrefixExtension::class,
        //LaravelDoctrine\Extensions\Timestamps\TimestampableExtension::class,
        //LaravelDoctrine\Extensions\SoftDeletes\SoftDeleteableExtension::class,
        //LaravelDoctrine\Extensions\Sluggable\SluggableExtension::class,
        //LaravelDoctrine\Extensions\Sortable\SortableExtension::class,
        //LaravelDoctrine\Extensions\Tree\TreeExtension::class,
        //LaravelDoctrine\Extensions\Loggable\LoggableExtension::class,
        //LaravelDoctrine\Extensions\Blameable\BlameableExtension::class,
        //LaravelDoctrine\Extensions\IpTraceable\IpTraceableExtension::class,
        //LaravelDoctrine\Extensions\Translatable\TranslatableExtension::class
    ],
    /*
    |--------------------------------------------------------------------------
    | Doctrine custom types
    |--------------------------------------------------------------------------
    */
    'custom_types'              => [

    ],
    /*
    |--------------------------------------------------------------------------
    | DQL custom datetime functions
    |--------------------------------------------------------------------------
    */
    'custom_datetime_functions' => [],
    /*
    |--------------------------------------------------------------------------
    | DQL custom numeric functions
    |--------------------------------------------------------------------------
    */
    'custom_numeric_functions'  => [],
    /*
    |--------------------------------------------------------------------------
    | DQL custom string functions
    |--------------------------------------------------------------------------
    */
    'custom_string_functions'   => [
        'CHAR_LENGTH' => DoctrineExtensions\Query\Mysql\CharLength::class,
        'CONCAT_WS'   => DoctrineExtensions\Query\Mysql\ConcatWs::class,
        'FIELD'       => DoctrineExtensions\Query\Mysql\Field::class,
        'FIND_IN_SET' => DoctrineExtensions\Query\Mysql\FindInSet::class,
        'REPLACE'     => DoctrineExtensions\Query\Mysql\Replace::class,
        'SOUNDEX'     => DoctrineExtensions\Query\Mysql\Soundex::class,
        'STR_TO_DATE' => DoctrineExtensions\Query\Mysql\StrToDate::class
    ],
    /*
    |--------------------------------------------------------------------------
    | Register custom hydrators
    |--------------------------------------------------------------------------
    */
    'custom_hydration_modes'     => [
        // e.g. 'hydrationModeName' => MyHydrator::class,
    ],
    /*
    |--------------------------------------------------------------------------
    | Enable query logging with laravel file logging,
    | debugbar, clockwork or an own implementation.
    | Setting it to false, will disable logging
    |
    | Available:
    | - LaravelDoctrine\ORM\Loggers\LaravelDebugbarLogger
    | - LaravelDoctrine\ORM\Loggers\ClockworkLogger
    | - LaravelDoctrine\ORM\Loggers\FileLogger
    |--------------------------------------------------------------------------
    */
    'logger'                    => env('DOCTRINE_LOGGER', false),
    /*
    |--------------------------------------------------------------------------
    | Cache
    |--------------------------------------------------------------------------
    |
    | Configure meta-data, query and result caching here.
    | Optionally you can enable second level caching.
    |
    | Available: acp|array|file|memcached|redis
    |
    */
    'cache'                     => [
        'second_level'     => false,
        'default'          => env('DOCTRINE_CACHE', 'array'),
        'namespace'        => null,
        'metadata'         => [
            'driver'       => env('DOCTRINE_METADATA_CACHE', env('DOCTRINE_CACHE', 'array')),
            'namespace'    => null,
        ],
        'query'            => [
            'driver'       => env('DOCTRINE_QUERY_CACHE', env('DOCTRINE_CACHE', 'array')),
            'namespace'    => null,
        ],
        'result'           => [
            'driver'       => env('DOCTRINE_RESULT_CACHE', env('DOCTRINE_CACHE', 'array')),
            'namespace'    => null,
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Gedmo extensions
    |--------------------------------------------------------------------------
    |
    | Settings for Gedmo extensions
    | If you want to use this you will have to require
    | laravel-doctrine/extensions in your composer.json
    |
    */
    'gedmo'                     => [
        'all_mappings' => false
    ],

    'paths' => [
        base_path('app/Entities'),
    ],
];
