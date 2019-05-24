<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    'default' => [
        'type'           => 'pdo',
        'connection'     => [
            'dsn'            => 'mysql:host=fuel_mysql;dbname=fuel_db',
            'username'       => 'root',
            'password'       => 'fuel_db_password',
            'persistent'     => false,
            'compress'       => false,
        ],
        'identifier'   => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
    ],
);
