<div class="itemCaixas view">
<h2><?php  echo __('Item Caixa'); ?></h2>
	<dl>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemCaixa['Item']['nome'], array('controller' => 'items', 'action' => 'view', $itemCaixa['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caixa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemCaixa['Caixa']['data_caixa'], array('controller' => 'caixas', 'action' => 'view', $itemCaixa['Caixa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qtd Item Compra'); ?></dt>
		<dd>
			<?php echo h($itemCaixa['ItemCaixa']['qtd_item_compra']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Caixa'), array('action' => 'edit', $itemCaixa['ItemCaixa']['n'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Caixa'), array('action' => 'delete', $itemCaixa['ItemCaixa']['n']), null, __('Are you sure you want to delete # %s?', $itemCaixa['ItemCaixa']['n'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Caixas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Caixa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caixas'), array('controller' => 'caixas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caixa'), array('controller' => 'caixas', 'action' => 'add')); ?> </li>
	</ul>
</div>
