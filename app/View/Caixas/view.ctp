<div class="caixas view">
<h2><?php  echo __('Caixa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caixa['Caixa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Caixa'); ?></dt>
		<dd>
			<?php echo h($caixa['Caixa']['data_caixa']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caixa'), array('action' => 'edit', $caixa['Caixa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caixa'), array('action' => 'delete', $caixa['Caixa']['id']), null, __('Are you sure you want to delete # %s?', $caixa['Caixa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caixas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caixa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Caixas'), array('controller' => 'item_caixas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Caixa'), array('controller' => 'item_caixas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Item Caixas'); ?></h3>
	<?php if (!empty($caixa['ItemCaixa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Caixa Id'); ?></th>
		<th><?php echo __('Qtd Item Compra'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($caixa['ItemCaixa'] as $itemCaixa): ?>
		<tr>
			<td><?php echo $itemCaixa['item_id']; ?></td>
			<td><?php echo $itemCaixa['caixa_id']; ?></td>
			<td><?php echo $itemCaixa['qtd_item_compra']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'item_caixas', 'action' => 'view', $itemCaixa['n'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'item_caixas', 'action' => 'edit', $itemCaixa['n'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'item_caixas', 'action' => 'delete', $itemCaixa['n']), null, __('Are you sure you want to delete # %s?', $itemCaixa['n'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item Caixa'), array('controller' => 'item_caixas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
