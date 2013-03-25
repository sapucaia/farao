<div class="caixas index">
	<h2><?php echo __('Caixas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_caixa'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($caixas as $caixa): ?>
	<tr>
		<td><?php echo h($caixa['Caixa']['id']); ?>&nbsp;</td>
		<td><?php echo h($caixa['Caixa']['data_caixa']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $caixa['Caixa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $caixa['Caixa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $caixa['Caixa']['id']), null, __('Are you sure you want to delete # %s?', $caixa['Caixa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Caixa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Caixas'), array('controller' => 'item_caixas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Caixa'), array('controller' => 'item_caixas', 'action' => 'add')); ?> </li>
	</ul>
</div>
