<!DOCTYPE html>
<html>
<head>
	<title>Simplicity</title>
	<?php
	echo $this->Html->css('style');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
<div class="navbar navbar-static-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#">Simplicity</a>
			<ul class="nav">
				<li><a href="#">About</a></li>
			</ul>
			<ul class="nav pull-right">
				<li class="divider-vertical"></li>
				<li><a href="#">Admin</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="container">
	<div class="content">
		<div class="header">
			<h1>Simplicity</h1>
			<h4>The most simple blog ever.</h4>
		</div>
		<hr>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
</div>
<footer>
	Copyright &copy; HippieJoel.com<br>
	Powered by <a href="https://github.com/StuzzHosting/Simplicity">Simplicity</a>
</footer>
<?php echo $this->Html->script('jquery.min'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>