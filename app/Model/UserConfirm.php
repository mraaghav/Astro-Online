<?php

App::uses('AppModel', 'Model');
App::uses('User', 'Model');

/**
 * UserConfirms Model
 *
 */
class UserConfirm extends AppModel
{
	
	public function sendPasswordRecoverEmail($data)
	{
		$appTitle = Configure::read("Application.title");
		$userTable = new User();
		$user = $userTable->find("first",array("conditions"=>array("User.id" => $data["users_id"])));
		
		$url = Router::url(array('controller' => 'Users', 'action' => 'password_recover_confirm',$data["confcode"]),true);
		
		$msg = "<p>Voc&ecirc; solicitou redefinição de senha no {$appTitle}.</p>	" .
		       "<p>Para confirmar a sua identidade e redefinir a senha, clique no link abaixo. Caso n&atilde;o seja possível clicar, copie o link e cole na barra de endereço do seu navegador. </p>" .
			   "<p>Link: <a href='" . $url ."'>". $url ."</a>";

		$subject = "Redefina sua senha";
		
		$result = $this->sendMail($user["User"]["name"], $user["User"]["email"], $subject, $msg);
		
		return $result;
	}
	
	private function sendUserActivationEmail($data)
	{
		$appTitle = Configure::read("Application.title");
		
		$userTable = new User();
		$user = $userTable->find("first",array("conditions"=>array("User.id" => $data["user_id"])));

		$url = Router::url(array('controller' => 'Users', 'action' => 'register_confirm',$data["confcode"]),true);
		
		$msg = "<p>Voc&ecirc; se cadastrou no {$appTitle} e forneceu este endereço de e-mail no cadastro.</p>	" .
		       "<p>Para confirmar o seu cadastro, clique no link abaixo, ou copie e cole na sua barra de endere&ccedil;o caso o seu cliente de e-mail o tenha bloqueado</p>" .
			   "<p>Link: <a href='" . $url ."'>". $url ."</a>";

		$subject = "Confirme seu cadastro";
		
		$result = $this->sendMail($user["User"]["name"], $user["User"]["email"], $subject, $msg);
		
		return $result;
	}
	
	public function sendUserConfirmEmail($userConfirmData)
	{
		$result = false;
		
		switch(intval($userConfirmData['confirm_type'])) {
			
			case USERCONFIRM_REGISTER_ACTIVATION:
				$result = $this->sendUserActivationEmail($userConfirmData);
				break;
				
			case USERCONFIRM_PASSWORD_RECOVER:
				$result = $this->sendPasswordRecoverEmail($userConfirmData); 
				break;
				
		}
		
		return $result;
	}
	
	public function generateUserConfirm($userId, $confirmType)
	{

		$charsAllowed = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		$generatedCode = "";
		
		while(strlen($generatedCode) < 100)
		{
			$index = rand(0,strlen($charsAllowed));
			$generatedCode = $generatedCode . substr($charsAllowed,$index,1);
		}
        $UserConfirmTable = new UserConfirm();
        
        $UserConfirmData = array();
		$UserConfirmData["confcode"] = $generatedCode;
		$UserConfirmData["user_id"] = $userId;
		$UserConfirmData["confirm_type"] = $confirmType;
		
		$result = $this->save($UserConfirmData);
		
		if($result) 
			$result = $this->sendUserConfirmEmail($UserConfirmData);
		
		if(!$result)
			$generatedCode = false;
		
		return $generatedCode;
	}
}
