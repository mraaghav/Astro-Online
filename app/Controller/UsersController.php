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
								 "register_confirm",
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
		
		App::uses("UserConfirm","Model");
		$userConfirmTable = new UserConfirm();
		
		$user = $this->User->create();
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$lastInsertId = $this->User->getLastInsertID();
				
				if($userConfirmTable->generateUserConfirm($lastInsertId, USERCONFIRM_REGISTER_ACTIVATION)) {
					return $this->redirect(['action' => 'register_confirm',$lastInsertId]);
				} else {
					$this->Flash->error('Não foi possível concluir o seu cadastro. Por favor, tente novamente mais tarde.');
					$this->User->delete($lastInsertId);
					
				}
			}
		}
	}
	
	public function register_confirm($id = null)
	{
		$this->layout = "authentication";
				
		if(is_numeric($id))
		{
			$user = $this->User->find("first",array("conditions"=>array("id"=>$id)));
			$this->set("user",$user);
		}
		else 
		{
			App::uses('UserConfirm', 'Model');
			$UserConfirmTable = new UserConfirm();
			$UserConfirm = $UserConfirmTable->find("first",array("conditions"=>array("confcode"=>$id,"confirm_type"=>USERCONFIRM_REGISTER_ACTIVATION)));
			
			if($UserConfirm == null)
			{
				$result = false;
			}
			else 
			{
				$user = $this->User->find("first",array("conditions"=>array("id"=>$UserConfirm["UserConfirm"]["user_id"])));
				$user["User"]["is_active"] = 1;
				$this->User->save($user);
				$result = $UserConfirmTable->delete($UserConfirm["UserConfirm"]["id"]);
			}
			
			$this->set("result",$result);
		}
	}
	
	
}
