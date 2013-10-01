<?php

return array(
	'controllers' => array(
		'invokables' => array(
			'User\Controller\User' => 'User\Controller\UserController',
		),
	),


	'router' => array(
		'routes' => array(
			'criar-conta' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/criar-conta/',
                    'defaults' => array(
                        'controller' => 'User\Controller\User',
                        'action' => 'criarConta'
                    ),
                ),
            ),

            'login' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/login/',
                    'defaults' => array(
                        'controller' => 'User\Controller\User',
                        'action' => 'login'
                    ),
                ),
                'may_terminate' => true,
                'child_routes'  => array(
                    'esqueci-senha' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => 'esqueci-senha/',
                            'defaults' => array(
                                'controller' => 'User\Controller\User',
                                'action' => 'esqueciSenha'
                            ),
                        ),
                    ),
                ),
            ),
		),
	),

	'view_manager' => array(
        'template_path_stack' => array(
            'user' => __DIR__ . '/../view',
        ),
    ),
);