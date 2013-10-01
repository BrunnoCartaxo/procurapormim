<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index'      => 'Application\Controller\IndexController',
            'Application\Controller\Login'      => 'Application\Controller\LoginController',
        ),
    ),


    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes'  => array(
                    'action' => array(
                        'type' => 'segment',
                        'options' => array(
                            'route' => ':action/',
                            'constraints' => array(
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            )
                        )
                    ),
                ),
            ),
        ),
    ),


    // Componente para gerenciar arvores (menus, breadcrumbs, sitemaps, etc.)
    'navigation' => array(
        'default' => array(
            array(
                'label'  => 'Quem somos',
                'route'  => 'home/action',
                'action' => 'quem-somos',
            ),
            array(
                'label' => 'Dicas',
                'route' => 'home/action',
                'action' => 'dicas',
            ),
            array(
                'label' => 'Estatísticas',
                'route' => 'home/action',
                'action' => 'estatisticas',
            ),
            array(
                'label' => 'Criar uma conta',
                'route' => 'criar-conta',
            ),
            array(
                'label' => 'Login',
                'route' => 'login',
                'pages' => array(
                    array(
                        'label' => 'Esqueci Senha',
                        'route' => 'login/esqueci-senha',
                    ),
                ),
            ),
        ),
    ),


    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
        'factories' => array(
            'Navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'Breadcrumb' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),


    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),


    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
