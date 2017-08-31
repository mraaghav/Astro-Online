<?php
	$this->assign("title","Termos de uso");
?>
<div class="register-confirmation-page page clearfix">
	<div class="title">Registro finalizado</div>
	
	<div class="content">
		<?php if(!isset($result)): ?>
			<p>Seu cadastro foi enviado com sucesso, mas antes de se autenticar, é necessário confirmar o cadastro.</p>
			<p>Para confirmar o cadastro, acesse o endereço de e-mail <b><?php echo $user["User"]["email"]; ?></b> e siga as instruções contidas no e-mail.</p>
			<br/>
			<p>Obrigado!</p>
		<?php elseif($result === true): ?>
			<p>Seu cadastro foi ativado com sucesso! Você j&aacute; pode se autenticar utilizando seu nome de usu&aacute;rio e senha.</p>
		<?php else: ?>
			<p>Seu cadastro já foi ativado anteriormente ou esta chave de ativação está expirada.</p>
		<?php endif; ?>  
	</div>
	
	<?php echo $this->Html->link("Autentique-se e faça seu mapa!",["controller"=>"Users","action"=>"login"]); ?>
	
</div>