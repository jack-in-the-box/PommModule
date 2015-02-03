<?php
/**
 * Base module for integration of Pomm projects with ZF2 applications
 *
 * @license MIT
 * @link    http://www.pomm-project.org/
 * @author  Martin Supiot <msupiot@jack.fr>
 */

return array(
    'service_manager' => array(
        'factories' =>  array(
            'PommProject\Cli\Service\PommServiceFactory' => 'PommProject\Cli\Service\PommServiceFactory',
        ),
    ),
    'controllers' => [
        'invokables' => [
            'mapfile' => 'PommProject\Cli\Controller\MapFileController',
            'scanmapfile' => 'PommProject\Cli\Controller\ScanMapFileController',
        ],
    ],
    'console' => array(
        'router' => array(
            'routes' => array(
                'pomm-mapfile-create' => array(
                    'options' => array(
                        'route'    => 'mapfile-create <table> --database= --schema= --prefix-path= [--extends=] [--output-level=] [--prefix-namespace=]',
                        'defaults' => array(
                            'controller' => 'mapfile',
                            'action'     => 'generate'
                        )
                    )
                ),
                'pomm-mapfile-scan' => array(
                    'options' => array(
                        'route'    => 'mapfile-scan --database= --schema= --prefix-path= [--extends=] [--output-level=] [--prefix-namespace=]',
                        'defaults' => array(
                            'controller' => 'scanmapfile',
                            'action'     => 'generate'
                        )
                    )
                )
            )
        )
    ),
);
