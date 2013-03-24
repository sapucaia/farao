<div class="tipologradouros form">
<?php echo $this->Form->create('Tipologradouro'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipologradouro'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipologradouro.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tipologradouro.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipologradouros'), array('action' => 'index')); ?></li>
	</ul>
</div>
