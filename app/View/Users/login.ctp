<div class="users-form">
<h2>Login</h2>
	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User'); ?>
		<?php 
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		?>
		<?php
		echo $this->Form->submit('Login', array('class' => 'btn btn-primary'));
		echo $this->Form->end();
		?>
</div>