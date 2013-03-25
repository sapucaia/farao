<div class="itemCaixas index">
	<h2><?php echo __('Item Caixas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('caixa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qtd_item_compra'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemCaixas as $itemCaixa): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($itemCaixa['Item']['nome'], array('controller' => 'items', 'action' => 'view', $itemCaixa['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itemCaixa['Caixa']['data_caixa'], array('controller' => 'caixas', 'action' => 'view', $itemCaixa['Caixa']['id'])); ?>
		</td>
		<td><?php echo h($itemCaixa['ItemCaixa']['qtd_item_compra']); ?>&nbsp;</td>
		<!--<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $itemCaixa['ItemCaixa']['item_id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemCaixa['ItemCaixa']['n'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemCaixa['ItemCaixa']['n']), null, __('Are you sure you want to delete # %s?', $itemCaixa['ItemCaixa']['n'])); ?>
		</td>-->
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
		<li><?php echo $this->Html->link(__('New Item Caixa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caixas'), array('controller' => 'caixas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caixa'), array('controller' => 'caixas', 'action' => 'add')); ?> </li>
	</ul>
</div>
