	
	<div class="page-work" id="work">
	
	<div class="container">
		<div class="page-heading">
			<h1><span>//</span> Work</h1>
		</div>
		
		<ul class="thumbnails">
		
			<?php foreach($templates as $template):?>
			<li class="span4">
				<?php 
				    echo $this->Html->link(
    				    $this->Html->image($template['Template']['img_path'], array(/*'width' => '100px', 'height' => '100px'*/)),
    				    array('controller' => 'flyers', 'action' => 'add', $template['Template']['id']),
    				    array('escape' => false)
				);?>
				
			</li>
            <?php endforeach ?>
			

			<li class="span4">
				<a href="/img/image_01.jpg" class="thumbnail">
				  <img src="/img/image_01.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
			
			<li class="span4">
				<a href="/img/image_02.jpg" class="thumbnail">
				  <img src="/img/image_02.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
			
			<li class="span4">
				<a href="/img/image_03.jpg" class="thumbnail">
				  <img src="/img/image_03.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
			
			<li class="span4">
				<a href="/img/image_04.jpg" class="thumbnail">
				  <img src="/img/image_04.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
			
			<li class="span4">
				<a href="/img/image_05.jpg" class="thumbnail">
				  <img src="/img/image_05.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li> 
			
			<li class="span4">
				<a href="/img/image_06.jpg" class="thumbnail">
				  <img src="/img/image_06.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
			
			<li class="span4">
				<a href="/img/image_07.jpg" class="thumbnail">
				  <img src="/img/image_07.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
			
			<li class="span4">
				<a href="/img/image_08.jpg" class="thumbnail">
				  <img src="/img/image_08.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
			
			<li class="span4">
				<a href="/img/image_09.jpg" class="thumbnail">
				  <img src="/img/image_09.jpg" alt="" />
				  <span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
			
		</ul>
		
	</div>
	
	</div>
	
	
	<div id="contact">
	</div>

<div class="templates index">
	<h2><?php echo __('Templates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('img_path'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($templates as $template): ?>
	<tr>
		<td><?php echo h($template['Template']['id']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['name']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['img_path']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['created']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $template['Template']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $template['Template']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $template['Template']['id']), null, __('Are you sure you want to delete # %s?', $template['Template']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Template'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Flyers'), array('controller' => 'flyers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flyer'), array('controller' => 'flyers', 'action' => 'add')); ?> </li>
	</ul>
</div>
