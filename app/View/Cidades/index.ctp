<div class="cidades index">
	<h2><?php echo __('Cidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome_cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cidades as $cidade): ?>
	<tr>
		<td><?php echo h($cidade['Cidade']['id']); ?>&nbsp;</td>
		<td><?php echo h($cidade['Cidade']['nome_cidade']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cidade['Estado']['nome_estado'], array('controller' => 'estados', 'action' => 'view', $cidade['Estado']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cidade['Cidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cidade['Cidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cidade['Cidade']['id']), null, __('Are you sure you want to delete # %s?', $cidade['Cidade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cidade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Enderecos'), array('controller' => 'enderecos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Endereco'), array('controller' => 'enderecos', 'action' => 'add')); ?> </li>
	</ul>
</div>
