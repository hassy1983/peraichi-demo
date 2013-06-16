<div class="templates view">
<h2><?php  echo __('Template'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($template['Template']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($template['Template']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img Path'); ?></dt>
		<dd>
			<?php echo h($template['Template']['img_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($template['Template']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($template['Template']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template'), array('action' => 'edit', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Template'), array('action' => 'delete', $template['Template']['id']), null, __('Are you sure you want to delete # %s?', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flyers'), array('controller' => 'flyers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flyer'), array('controller' => 'flyers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Flyers'); ?></h3>
	<?php if (!empty($template['Flyer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Template Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Subtitle'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($template['Flyer'] as $flyer): ?>
		<tr>
			<td><?php echo $flyer['id']; ?></td>
			<td><?php echo $flyer['template_id']; ?></td>
			<td><?php echo $flyer['title']; ?></td>
			<td><?php echo $flyer['subtitle']; ?></td>
			<td><?php echo $flyer['text']; ?></td>
			<td><?php echo $flyer['created']; ?></td>
			<td><?php echo $flyer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'flyers', 'action' => 'view', $flyer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'flyers', 'action' => 'edit', $flyer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'flyers', 'action' => 'delete', $flyer['id']), null, __('Are you sure you want to delete # %s?', $flyer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Flyer'), array('controller' => 'flyers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
