<?php
return array(
    'modules' => array(
        'PommProject\PommModule',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            '../config/{,*.}{global,local}.php',
            '../../config/{,*.}{global,local}.php',
            '../../../config/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            'module',
            'vendor',
        ),
    ),
    'pomm' => array(
        'databases' => array(
            'pstudio2' => array(
                'dsn' => 'pgsql://pstudio2:pstudio2@192.168.42.11:5432/pstudio2',
                'name' => 'pstudio2',
            ),
        ),
    ),
);
