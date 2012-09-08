<?php echo $this->Html->Link('Go back', array('controller' => 'Pages', 'action' => 'index')); ?>
<h2>Add Page</h2>
<?php 
echo $this->Form->create('Page');
echo $this->Form->input('title', array('style' => 'width: 97.50%'));
echo $this->Form->Input('body', array('label' => 'Body - Supports HTML', 'rows' => '10', 'style' => 'width: 97.50%'));
echo $this->Form->submit('Save Page', array('class' => 'btn btn-primary', 'style' => 'width: 100%'));
echo $this->Form->end();
?>
<?php echo $this->Html->Link('Go back', array('controller' => 'Pages', 'action' => 'index')); ?>