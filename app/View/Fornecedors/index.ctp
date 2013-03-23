<div class="fornecedors index">
	<h2><?php echo __('Fornecedors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('razao_social'); ?></th>
			<th><?php echo $this->Paginator->sort('nome_fantasia'); ?></th>
			<th><?php echo $this->Paginator->sort('cnpj'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fornecedors as $fornecedor): ?>
	<tr>
		<td><?php echo h($fornecedor['Fornecedor']['id']); ?>&nbsp;</td>
		<td><?php echo h($fornecedor['Fornecedor']['razao_social']); ?>&nbsp;</td>
		<td><?php echo h($fornecedor['Fornecedor']['nome_fantasia']); ?>&nbsp;</td>
		<td><?php echo h($fornecedor['Fornecedor']['cnpj']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fornecedor['Fornecedor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fornecedor['Fornecedor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fornecedor['Fornecedor']['id']), null, __('Are you sure you want to delete # %s?', $fornecedor['Fornecedor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fornecedor'), array('action' => 'add')); ?></li>
	</ul>
</div>
