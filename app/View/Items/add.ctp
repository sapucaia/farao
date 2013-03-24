<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('tipo_item_id');
		echo $this->Form->input('nome');
                echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Items'), array('controller' => 'tipo_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Item'), array('controller' => 'tipo_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
