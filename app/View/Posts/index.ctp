<?php foreach ($posts as $post): ?>
<h2><?php echo $this->Html->Link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', h($post['Post']['id']))); ?> <small>Posted on <?php echo $post['Post']['created']; ?></h2>

<?php echo $post['Post']['body']; ?>
<?php endforeach; ?>