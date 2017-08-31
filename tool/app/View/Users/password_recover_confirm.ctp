<?php if(!$result): ?>
	<div class="register-confirmation-page page clearfix">
		<div class="title">Pedido expirado</div>
		
		<div class="content">
			<p>Este pedido de requisição expirou. Por favor, solicite um <?php echo $this->Html->link("novo pedido de redefinição",["controller"=>"Users", "action"=>"pswrecover"]); ?>.</p>
		</div>
	</div>
<?php elseif(!isset($saved)): ?>
	<div class="login-container">
									
		<div class="position-relative">
			<div id="forgot-box" class="forgot-box widget-box no-border">
				<div class="widget-body">
					<div class="widget-main">
						<h4 class="header red lighter bigger">
							<i class="ace-icon fa fa-key"></i>
							Redefinir senha
						</h4>

						<div class="space-6"></div>

						<form id="password_recover" method="post" action="<?php echo $this->Html->url(["controller"=>"users","action"=>"password_recover_confirm"]); ?>">
							<fieldset>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<?php echo $this->Form->input("password",["type"=>"password","class"=>"input-signtype","placeholder"=>"Senha:", "label"=>false]); ?>
										<i class="ace-icon fa fa-envelope"></i>
									</span>
								</label>
								
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<?php echo $this->Form->input("password_confirm",["type"=>"password","class"=>"input-signtype","placeholder"=>"Confirmação:", "label"=>false]); ?>
										<i class="ace-icon fa fa-envelope"></i>
									</span>
								</label>

								<div class="clearfix">
									<button type="button" class="width-35 pull-right btn btn-sm btn-danger btn-submit">
										<i class="ace-icon fa fa-lightbulb-o"></i>
										<span class="bigger-110">Redefinir</span>
									</button>
								</div>
							</fieldset>
						</form>
					</div><!-- /.widget-main -->

					<div class="toolbar center">
						<a href="#" data-target="#login-box" class="back-to-login-link">
							Voltar para autentica&ccedil;&atilde;o
							<i class="ace-icon fa fa-arrow-right"></i>
						</a>
					</div>
				</div><!-- /.widget-body -->
			</div><!-- /.forgot-box -->
		</div><!-- /.position-relative -->
	</div>

<?php else: ?>
	<div class="register-confirmation-page page clearfix">
		<div class="title">Redefinição concluída</div>
		
		<div class="content">
				<p>Senha redefinida com sucesso. Você já pode utilizá-la para se autenticar.</p>
		</div>
		
	</div>
<?php endif; ?>