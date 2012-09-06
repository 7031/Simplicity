<h2>Users</h2>
<table class="table table-striped">
	<tr>
		<th>Username</th>
		<th>Email address</th>
		<th>Role</th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['email']; ?></td>
		<td><?php echo $user['User']['role']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<?php echo $this->Html->Link('Add User', array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?>