<div style="float:right">
<?php echo $this->Html->image($template['Template']['img_path'], array('width' => '400px', 'height' => '500px'));?>
</div>
<div class="flyers form">
<?php echo $this->Form->create('Flyer'); ?>
	<fieldset>
		<legend><?php echo __('Add Flyer'); ?></legend>
	<?php
		//echo $this->Form->input('template_id');
		if (!empty($template)) {
    		echo $this->Form->hidden('template_id', array('value' => $template['Template']['id']));
		} else {
		    $this->Form->input('template_id');
		}
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

		<li><?php echo $this->Html->link(__('List Flyers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
