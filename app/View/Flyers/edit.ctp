<div class="flyers form">
<?php echo $this->Form->create('Flyer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Flyer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('template_id');
		echo $this->Form->input('title');
		echo $this->Form->input('subtitle');
		echo $this->Form->input('text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Flyer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Flyer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flyers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
