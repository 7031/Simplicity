<h2>Pages</h2>
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
<?php foreach ($pages as $page): ?>
	<tr>
		<td>
			<?php echo $this->Html->Link($page['Page']['title'], array('controller' => 'pages', 'action' => 'view', h($page['Page']['id']))); ?>
		</td>
		<?php if ($authUser) { ?>
		<td>
				<? echo $this->Html->Link('Edit', array('controller' => 'pages', 'action' => 'edit', $page['Page']['id'])); ?>
		</td>
		<?
		}
		?>
	</tr>
<?php endforeach; ?>
</table>