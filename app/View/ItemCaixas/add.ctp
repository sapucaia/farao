<div class="itemCaixas form">
<?php echo $this->Form->create('ItemCaixa'); ?>
	<fieldset>
		<legend><?php echo __('Add Item Caixa'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('caixa_id');
		echo $this->Form->input('qtd_item_compra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Item Caixas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caixas'), array('controller' => 'caixas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caixa'), array('controller' => 'caixas', 'action' => 'add')); ?> </li>
	</ul>
</div>
