<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<?php echo $this->Html->charset(); ?>
		<title><?php echo Configure::read("Application.title"); ?>: autentique-se</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<?php echo $this->Html->css('bootstrap.min'); ?>
		<?php echo $this->Html->css('bootstrap-datepicker3.min'); ?>
		<?php echo $this->Html->css('font-awesome.min'); ?>

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<?php echo $this->Html->css('fonts.googleapis.com'); ?>

		<!-- ace styles -->
		<?php echo $this->Html->css('ace.min.css',["class"=>"ace-main-stylesheet","id"=>"main-ace-style"]); ?>

		<!--[if lte IE 9]>
			<?php echo $this->Html->css('ace-part2.min',["class"=>"ace-main-stylesheet"]); ?>
		<![endif]-->
		<?php echo $this->Html->css('ace-skins.min'); ?>
		<?php echo $this->Html->css('ace-rtl.min'); ?>

		<!--[if lte IE 9]>
			<?php echo $this->Html->css('ace-ie.min'); ?>
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<?php echo $this->Html->script('ace-extra.min'); ?>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<?php echo $this->Html->script('html5shiv.min'); ?>
		<?php echo $this->Html->script('respond.min'); ?>
		<![endif]-->

		<!-- App level styles -->
		<?php echo $this->Html->css('astro-login'); ?>

		<?php
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>

	</head>

	<body class="login-layout">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							<?php echo Configure::read("Application.title"); ?>
						</small>
					</a>
				</div>

			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">

						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<?php echo $this->Flash->render(); ?>
								<?php echo $this->fetch('content'); ?>
							</div>
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<?php echo $this->Html->script('jquery-2.1.4.min'); ?>
		<!-- <![endif]-->

		<!--[if IE]>
		<script src="js/jquery-1.11.3.min.js"></script>
		<![endif]-->

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!--[if lte IE 8]>
		  <?php echo $this->Html->script('excanvas.min'); ?>
		<![endif]-->

 		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaIeJ-3I6-VFWRTARSYmnvuHdxAdg7qlo&libraries=places"></script>

		<!-- Jquery UI -->
		<?php echo $this->Html->script('jquery-ui.custom.min'); ?>
		<?php echo $this->Html->script('jquery.ui.touch-punch.min'); ?>
		<?php echo $this->Html->script('jquery.easypiechart.min'); ?>
		<?php echo $this->Html->script('jquery.sparkline.index.min'); ?>
		<?php echo $this->Html->script('jquery.flot.min'); ?>
		<?php echo $this->Html->script('jquery.flot.pie.min'); ?>
		<?php echo $this->Html->script('jquery.flot.resize.min'); ?>
		<?php echo $this->Html->script('locationpicker.jquery.min'); ?>

		<!-- bootstrap -->
		<?php echo $this->Html->script('bootstrap.min'); ?>
		<?php echo $this->Html->script('bootstrap-datepicker.min'); ?>
		<?php echo $this->Html->script('bootstrap-datepicker.pt'); ?>

		<!-- ace scripts -->
		<?php echo $this->Html->script('ace-elements.min'); ?>
		<?php echo $this->Html->script('ace.min'); ?>

		<!-- app scripts -->
		<?php echo $this->Html->script('astro.base'); ?>
		<?php echo $this->Html->script('astro.login'); ?>

	</body>
</html>
