<div class="users-form">
	<?php echo $this->Form->create('User');?>
		<h2>Add User</h2>
		<fieldset class="users-form">
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('email');
			/*echo $this->Form->input('role', array(
				'options' => array('admin' => 'Admin', 'author' => 'Author')
			));*/
		?>
		</fieldset>
	<?php
	echo $this->Form->submit('Add User', array('class' => 'btn btn-primary'));
	echo $this->Form->end();
	?>
</div>