<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace News;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'news' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/news/index',
                    'defaults' => [
                        'controller' => Controller\NewsController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'create' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/news/create',
                    'defaults' => [
                        'controller' => Controller\NewsController::class,
                        'action'     => 'create',
                    ],
                ],
            ],
            'success' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/news/success',
                    'defaults' => [
                        'controller' => Controller\NewsController::class,
                        'action'     => 'success',
                    ],
                ],
            ],
            'failed' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/news/failed',
                    'defaults' => [
                        'controller' => Controller\NewsController::class,
                        'action'     => 'failed',
                    ],
                ],
            ],
            'update' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/news/update',
                    'defaults' => [
                        'controller' => Controller\NewsController::class,
                        'action'     => 'update',
                    ],
                ],
            ],
            'confirm' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/news/confirm',
                    'defaults' => [
                        'controller' => Controller\NewsController::class,
                        'action'     => 'confirm',
                    ],
                ],
            ],
            'delete' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/news/delete',
                    'defaults' => [
                        'controller' => Controller\NewsController::class,
                        'action'     => 'delete',
                    ],
                ],
            ],
            'confirmCreate' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/news/confirmCreate',
                    'defaults' => [
                        'controller' => Controller\NewsController::class,
                        'action'     => 'confirmCreate',
                    ],
                ],
            ],
            // 'application' => [
            //     'type'    => Segment::class,
            //     'options' => [
            //         'route'    => '/application[/:action]',
            //         'defaults' => [
            //             'controller' => Controller\IndexController::class,
            //             'action'     => 'index',
            //         ],
            //     ],
            // ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\NewsController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        // 'display_not_found_reason' => true,
        // 'display_exceptions'       => true,
        // 'doctype'                  => 'HTML5',
        // 'not_found_template'       => 'error/404',
        // 'exception_template'       => 'error/index',
        // 'template_map' => [
        //     'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
        //     'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
        //     'error/404'               => __DIR__ . '/../view/error/404.phtml',
        //     'error/index'             => __DIR__ . '/../view/error/index.phtml',
        // ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
