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
<div class="navbar navbar-fixed-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
			<?php echo $this->Html->Link('Simplicity', array('controller' => 'posts', 'action' => 'index'), array('class' => 'brand')); ?>
			<ul class="nav">
				<li><a href="#">About</a></li>
			</ul>
			<ul class="nav pull-right">
				<li class="divider-vertical"></li>
				<?php if (!$authUser) { ?>
				<li><?php echo $this->Html->Link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
				<?php } else { ?>
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $authUser['username']; ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->Link('New Post', array('controller' => 'posts', 'action' => 'add')); ?></li>
						<?php if ($authUser['role'] == 'admin') { ?>
						<li class="divider"></li>
						<li><?php echo $this->Html->Link('Users', array('controller' => 'users', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->Link('Add User', array('controller' => 'users', 'action' => 'add')); ?></li>
						<?php } ?>
						<li class="divider"></li>
						<li><?php echo $this->Html->Link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
					</ul>
				</li>
				<?php } ?>
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