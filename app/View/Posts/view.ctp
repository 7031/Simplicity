<?php echo $this->Html->Link('Go back', array('controller' => 'posts', 'action' => 'index')); ?>
<h2><?php echo h($post['Post']['title']); ?></h2>
<?php echo ($post['Post']['body']); ?>