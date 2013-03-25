<div class="caixas form">
<?php echo $this->Form->create('Caixa'); ?>
	<fieldset>
		<legend><?php echo __('Add Caixa'); ?></legend>
	<?php
		echo $this->Form->input('data_caixa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Caixas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Caixas'), array('controller' => 'item_caixas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Caixa'), array('controller' => 'item_caixas', 'action' => 'add')); ?> </li>
	</ul>
</div>
