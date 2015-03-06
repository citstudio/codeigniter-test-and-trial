<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>CITSTUDIO SAMPLE</title>
		<meta name="author" content="citstudio" />
		<meta name="generator" content="nextscms" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php $this->carabiner->display('css'); ?>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" rel="home" href="<?php echo base_url()?>">CITSTUDIO</a>
	</div>
	
	<div class="collapse navbar-collapse">
		
		<?php $this->load->view('templates/primary-menu'); ?>
		
		<div class="col-sm-3 col-md-3 pull-right">
        <div class="navbar-text">Text</div>
		<form class="navbar-form" role="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
		</form>
		</div>
		
	</div>
</div>


<div class="container">
  
  <?php $this->load->view($contents); ?>
  
</div><!-- /.container -->
	<!-- script references -->
	<?php $this->carabiner->display('js'); ?>
	</body>
</html>