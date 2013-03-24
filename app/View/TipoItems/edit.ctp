<div class="tipoItems form">
<?php echo $this->Form->create('TipoItem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoItem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TipoItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
