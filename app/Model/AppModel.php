<?php


App::uses('Model', 'Model');

/**
 * Generic application model.
 * Any method defined here can be called within any other model. So it is used to define generic implementations.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	
	/* Begin: Mail sending methods */
	
	public function __call($method, $arguments) {
      if($method == 'sendMail') {
          if(count($arguments) == 4) {
             return call_user_func_array(array($this,'sendMailWithoutSource'), $arguments);
          }
          else if(count($arguments) == 6) {
             return call_user_func_array(array($this,'sendMailWithSource'), $arguments);
          }
      }
   }    
	
	public function sendMailWithoutSource($toName, $toEmail, $subject, $content) {
		
		return $this->sendMailWithSource(Configure::read("Mail.FromName"),
		                                 Configure::read("Mail.FromAddress"),
		                                 $toName, 
		                                 $toEmail, 
		                                 $subject,
		                                 $content);
	}
	
	public function sendMailWithSource($fromName, $fromEmail, $toName, $toEmail, $subject, $content) {
		$appTitle = Configure::write("Application.title");
		
		$mail = $this->prepareMailer();
		$mail->setFrom($fromEmail, $fromName);
		//$mail->addReplyTo('replyto@example.com', 'First Last');
		$mail->addAddress($toEmail, $toName);
		$mail->Subject = "[{$appTitle}] " . $subject;
		$mail->msgHTML($content);
		
		$result = $mail->send();
		
		if(!$result)
			$this->log("PHPMailer error:" . $mail->ErrorInfo);
		
		return $result;
		
	}
	
	public function prepareMailer() {
			
		// PHP Mailer
		require_once(ROOT . DS . 'app' . DS . 'Vendor' . DS . 'PHPMailer' . DS . 'PHPMailerAutoload.php');		
		
		$mail = new PHPMailer();
		
		$mail->isSMTP();
		
		if(Configure::read('debug')) {
			$mail->SMTPDebug = Configure::read('debug');
			$mail->Debugoutput = 'html';
		}
		
		if(Configure::read('Mail.Security')) {
			$mail->SMTPSecure = Configure::read('Mail.Security');
		}
			
		$mail->Host = Configure::read("Mail.SmtpHost");
		$mail->Port = Configure::read("Mail.Port");
		$mail->SMTPAuth = Configure::read("Mail.IsAuthenticated");
		$mail->Username = Configure::read("Mail.User");
		$mail->Password = Configure::read("Mail.Password");
		
		return $mail;
	}
	
	/* End: Mail sending methods */
}
