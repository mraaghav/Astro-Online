<div class="login-container">
									
	<div class="position-relative">
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
	</div><!-- /.position-relative -->
</div>