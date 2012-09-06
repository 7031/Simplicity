<?php foreach ($posts as $post): ?>
<h2><?php echo $this->Html->Link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></h2>

<?php echo $post['Post']['body']; ?>
<?php endforeach; ?>