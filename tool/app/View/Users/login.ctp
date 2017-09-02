<div class="login-container">

	<div class="position-relative">
		<div id="login-box" class="login-box visible widget-box no-border">
			<div class="widget-body">
				<div class="widget-main">
					<h4 class="header blue lighter bigger">
						<i class="ace-icon fa fa-star green"></i>
						Por favor, entre suas credenciais
					</h4>

					<div class="space-6"></div>

					<?php echo $this->Form->create('user'); ?>
						<fieldset>

							<label class="block clearfix">
								<span class="block input-icon input-icon-right">
									<input type="email" class="form-control" placeholder="E-mail" />
									<i class="ace-icon fa fa-user"></i>
								</span>
							</label>

							<label class="block clearfix">
								<span class="block input-icon input-icon-right">
									<input type="password" class="form-control" placeholder="Senha" />
									<i class="ace-icon fa fa-lock"></i>
								</span>
							</label>

							<div class="space"></div>

							<div class="clearfix">
								<label class="inline">
									<input type="checkbox" class="ace" />
									<span class="lbl"> Lembrar neste computador</span>
								</label>

								<button type="button" class="width-35 pull-right btn btn-sm btn-primary">
									<i class="ace-icon fa fa-key"></i>
									<span class="bigger-110">Entrar</span>
								</button>
							</div>

							<div class="space-4"></div>
						</fieldset>
					<?php echo $this->Form->end(); ?>


				</div><!-- /.widget-main -->

				<div class="toolbar clearfix">
					<div>
						<a href="#" data-target="#forgot-box" class="forgot-password-link">
							<i class="ace-icon fa fa-arrow-left"></i>
							Esqueci a senha
						</a>
					</div>

					<div>
						<a href="#" data-target="#signup-box" class="user-signup-link">
							Quero me registrar
							<i class="ace-icon fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div><!-- /.widget-body -->
		</div><!-- /.login-box -->

		<div id="forgot-box" class="forgot-box widget-box no-border">
			<div class="widget-body">
				<div class="widget-main">
					<h4 class="header red lighter bigger">
						<i class="ace-icon fa fa-key"></i>
						Recuperar senha
					</h4>

					<div class="space-6"></div>
					<p>
						Informe seu e-mail e siga as instru&ccedil;&otilde;es que ser&atilde;o enviadas
					</p>

					<form id="password_recover" method="post" action="<?php echo $this->Html->url(["controller"=>"users","action"=>"password_recover"]); ?>">
						<fieldset>
							<label class="block clearfix">
								<span class="block input-icon input-icon-right">
									<input type="email" name="email" class="form-control" placeholder="E-mail" />
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

		<div id="signup-box" class="signup-box widget-box no-border">
			<div class="widget-body">
				<div class="widget-main">
					<h4 class="header green lighter bigger">
						<i class="ace-icon fa fa-users blue"></i>
						Novo cadastro
					</h4>

					<div class="space-6"></div>
					<p> Entre as informa&ccedil;&otilde;es de perfil abaixo para se registrar: </p>

					<?php echo $this->Form->create('user',array("id"=>"register","url"=>array("controller"=>"users","action"=>"register"))); ?>
						<fieldset>

							<?php echo $this->Form->input('name',array("class"=>"form-control",
																												 "placeholder"=>__("Nome"),
																												 "after"=>'<i class="ace-icon fa fa-user"></i>',
																											 	 "label"=>false,
																												 "data-min-length"=>"5",
																												 "data-max-length"=>"200",
																											 	 "div"=>array(
																												 		"class"=>"block input-icon input-icon-right"
																											 	 ))); ?>

						 <?php echo $this->Form->input('birth',array("class"=>"form-control date-picker mask-date",
																												 "placeholder"=>__("Data de Nascimento"),
																												 "after"=>'<i class="ace-icon fa fa-birthday-cake"></i>',
																											 	 "label"=>false,
																											 	 "div"=>array(
																												 		"class"=>"block input-icon input-icon-right"
																											 	 ))); ?>

						 <?php echo $this->Form->input('birthplace-latitude',array("type"=>"hidden","id"=>"birthplaceLatitude")); ?>

						 <?php echo $this->Form->input('birthplace-longitude',array("type"=>"hidden","id"=>"birthplaceLongitude")); ?>

						 <?php echo $this->Form->input('birthplace',array("class"=>"form-control",
																												 "placeholder"=>__("Local de Nascimento"),
																												 "after"=>'<div class="location-picker"></div>',
																												 "before"=>'<i class="ace-icon fa fa-map"></i>',
																											 	 "label"=>false,
																												 "id"=>"birthplace",
																											 	 "div"=>array(
																												 		"class"=>"block input-icon input-icon-right"
																											 	 ))); ?>

						 <?php echo $this->Form->input('email',array("class"=>"form-control",
						 																						 "type"=>"email",
																												 "data-min-length"=>"4",
																												 "data-max-length"=>"150",
																												 "placeholder"=>__("E-mail"),
																												 "after"=>'<i class="ace-icon fa fa-envelope"></i>',
																											 	 "label"=>false,
																											 	 "div"=>array(
																												 		"class"=>"block input-icon input-icon-right"
																											 	 ))); ?>

					 <?php echo $this->Form->input('password',array("class"=>"form-control",
					 																						 "type"=>"password",
																											 "data-min-length"=>"7",
																											 "data-max-length"=>"30",
																											 "placeholder"=>__("Senha"),
																											 "after"=>'<i class="ace-icon fa fa-lock"></i>',
																										 	 "label"=>false,
																										 	 "div"=>array(
																											 		"class"=>"block input-icon input-icon-right"
																										 	 ))); ?>


 					 <?php echo $this->Form->input('password_confirm',array("class"=>"form-control",
 					 																						 "type"=>"password",
																											 "data-min-length"=>"7",
 																											 "placeholder"=>__("Confirmação de senha"),
 																											 "after"=>'<i class="ace-icon fa fa-retweet"></i>',
 																										 	 "label"=>false,
 																										 	 "div"=>array(
 																											 		"class"=>"block input-icon input-icon-right"
 																										 	 ))); ?>

					 <?php echo $this->Form->input('terms',array("class"=>"form-control",
					 																						 "type"=>"checkbox",
																											 "class"=>"ace",
																											 "after"=>"<span class='lbl'>" . __("Li e aceito os ") . "<a href='#'>" . __("termos de uso") . "</a></span>",
																											 "label"=>false,
																											 "value"=>"0",
																											 "checked"=>false,
																											 "div"=>array(
																												 "class"=>"block"
																											 )
																				 )); ?>

							<div class="clearfix">
								<button type="reset" class="width-30 pull-left btn btn-sm">
									<i class="ace-icon fa fa-refresh"></i>
									<span class="bigger-110">Limpar</span>
								</button>

								<button type="submit" class="width-65 pull-right btn btn-sm btn-success btn-submit">
									<span class="bigger-110">Continuar</span>
									<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
								</button>

							</div>
						</fieldset>
					<?php echo $this->Form->end(); ?>
				</div>

				<div class="toolbar center">
					<a href="#" data-target="#login-box" class="back-to-login-link">
						<i class="ace-icon fa fa-arrow-left"></i>
						Voltar para autentica&ccedil;&atilde;o
					</a>
				</div>

			</div><!-- /.widget-body -->
		</div><!-- /.signup-box -->
	</div><!-- /.position-relative -->

</div>
