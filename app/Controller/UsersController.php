<?php

App::uses('AppController', 'Controller');

/**
 * User Controller
 * @author Diego Silva
 * @package		app.Controller
 */
class UsersController extends AppController {

	public function beforeFilter()
	{
		parent::beforeFilter();
		
		$this->Auth->allow(array("register",
								 "confirm",
								 "login",
								 "logout",
			                    ));
	}
	
	public function login() {
		$this->layout = "authentication";
		
		$user = $this->Auth->user();
		
		if ($user)
			return $this->redirect(array("controller"=>"Home","action"=>"index"));
		
		else if ($this->request->is('post')) {
			
			if ($this->Auth->login())
				$this->redirect($this->Auth->redirectUrl());
			else 
				$this->Flash->error(__('Nome de usuário e/ou senha incorreto(s), tente novamente'));
			   
		}
		
		$this->set(compact('user'));
	}
	
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	
	public function register() {
		
	}
	
	public function confirm() {
		
	}
	
	
}
