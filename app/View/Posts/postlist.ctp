<h2>Posts</h2>
<table class="table table-striped">
	<tr>
		<th width="80%">
			Title
		</th>
		<?php if ($authUser) { ?>
		<th>
			Actions
		</th>
		<?
		}
		?>
	</tr>
<?php foreach ($posts as $post): ?>
	<tr>
		<td>
			<?php echo $this->Html->Link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', h($post['Post']['id']))); ?>
		</td>
		<?php if ($authUser) { ?>
		<td>
				<? echo $this->Html->Link('Edit', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?>
		</td>
		<?
		}
		?>
	</tr>
<?php endforeach; ?>
</table>