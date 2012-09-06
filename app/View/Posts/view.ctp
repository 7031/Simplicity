<p><?php echo $this->Html->Link('Go back', array('controller' => 'posts', 'action' => 'index')); ?></p>
<h2><?php echo h($post['Post']['title']); ?></h2>
<?php echo nl2br($post['Post']['body']); ?>
<?php if ($authUser) { 
echo '<br><br>';
echo '<p>';
echo $this->Html->Link('Edit post', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id']));
echo '</p>';
} ?>
<hr>
<p><?php echo $this->Html->Link('Go back', array('controller' => 'posts', 'action' => 'index')); ?></p>
