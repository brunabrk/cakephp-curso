<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/sobre-evento',array('controller'=>'pages','action'=>'display','sobre-evento'));
	
	Router::connect('/inscricao-sucesso', array('controller' => 'pages', 'action' => 'display','inscricao-sucesso'));

	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'sobre-evento'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/como-chegar', array('controller' => 'pages', 'action' => 'display','como-chegar'));

	Router::connect('/galeria', array('controller' => 'pages', 'action' => 'display','galeria'));

	Router::connect('/pagina/*', array('controller' => 'pages', 'action' => 'display'));
	
	Router::connect('/inscrever', array('controller' => 'inscricoes', 'action' => 'inscrever','inscrever'));
	
	Router::connect('/palestrante', array('controller'=>'palestrantes', 'action'=>'index'));
	Router::connect('/palestrante/:nome/:id', array('controller'=>'palestrantes', 'action'=>'view'),
		array(
			'pass'=>array('id'),
			'titulo'=>'[a-z0-9-]+',
			'id'=>'[0-9]+'
		));
	

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
