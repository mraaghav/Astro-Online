<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 */

App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $components = array(
	        'Auth' => array(
	        
	        	'authenticate' => array(
		            'Form' => array(
		            	'userModel' => 'User',
		                'fields' => array('username' => 'email', 
		                                  'password' => 'password'),
	                     'scope' => array('User.active'=>1)
		            )
		        ),
		        
		        'loginAction' => array(
		            'controller' => 'Users',
		            'action' => 'login'
		        ),
		        
	            'loginRedirect' => array(
	                'controller' => 'Home',
	                'action' => 'index'
	            ),
	            
	            'authError' => 'Você não tem recursos de acesso a esta área. Autentique-se com uma conta com nível de acesso compatível para acessá-la.',
	            
	            'loginError' => 'Nome de usuário e/ou senha incorreto(s). Por favor, tente novamente',
	            
	            'logoutRedirect' => array(
	                'controller' => 'Users',
	                'action' => 'login'
	            )            
	        ),
	        'RequestHandler',
			'Flash');
}
