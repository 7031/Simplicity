<p><?php echo $this->Html->Link('Go back', array('controller' => 'posts', 'action' => 'index')); ?></p>
<h2><?php echo h($post['Post']['title']); ?></h2>
<?php echo nl2br($post['Post']['body']); ?>
<hr>
<p><?php echo $this->Html->Link('Go back', array('controller' => 'posts', 'action' => 'index')); ?></p>
