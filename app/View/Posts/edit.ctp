<?php echo $this->Html->Link('Go back', array('controller' => 'posts', 'action' => 'index')); ?>
<h2>Edit Post</h2>
<?php 
echo $this->Form->create('Post');
echo $this->Form->input('title', array('style' => 'width: 97.50%'));
echo $this->Form->Input('body', array('label' => 'Body - Supports HTML', 'rows' => '10', 'style' => 'width: 97.50%'));
echo $this->Form->submit('Save Post', array('class' => 'btn btn-primary', 'style' => 'width: 100%'));
echo $this->Form->end();
?>
<table style="width: 100%">
	<tr>
		<td>
			<?php echo $this->Html->Link('Go back', array('controller' => 'posts', 'action' => 'index')); ?>
		</td>
		<td style="text-align: right;">
			<?php echo $this->Form->postLink(
				'Delete',
				array('action' => 'delete', $id),
				array('confirm' => 'Are you sure?'));
			?>
		</td>
	</tr>
</table>