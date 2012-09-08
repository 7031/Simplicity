<h2><?php echo h($page['Page']['title']); ?></h2>
<?php echo nl2br($page['Page']['body']); ?>
<?php if ($authUser) { 
echo '<br><br>';
echo '<p>';
echo $this->Html->Link('Edit page', array('controller' => 'pages', 'action' => 'edit', $page['Page']['id']));
echo '</p>';
} ?>
