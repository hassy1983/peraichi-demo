<div class="flyers view">
	<div class="flyer_section_<?php echo $h($flyer['Flyer']['id'])?>">
		
	
	</div>


<h2><?php  echo __('Flyer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($flyer['Flyer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flyer['Template']['name'], array('controller' => 'templates', 'action' => 'view', $flyer['Template']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($flyer['Flyer']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtitle'); ?></dt>
		<dd>
			<?php echo h($flyer['Flyer']['subtitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($flyer['Flyer']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($flyer['Flyer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($flyer['Flyer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flyer'), array('action' => 'edit', $flyer['Flyer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Flyer'), array('action' => 'delete', $flyer['Flyer']['id']), null, __('Are you sure you want to delete # %s?', $flyer['Flyer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flyers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flyer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
