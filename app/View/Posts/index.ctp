<?php foreach ($posts as $post): ?>
	<div class="post">
		<h2><?php echo $this->Html->Link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', h($post['Post']['id']))); ?> <small>Posted on <?php echo $post['Post']['created']; ?></small></h2>
	
		<?php echo nl2br($post['Post']['body']); ?>
	</div>
<?php endforeach; ?>