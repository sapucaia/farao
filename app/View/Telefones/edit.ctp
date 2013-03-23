<div class="telefones form">
<?php echo $this->Form->create('Telefone'); ?>
	<fieldset>
		<legend><?php echo __('Edit Telefone'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('ddd');
		echo $this->Form->input('numero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Telefone.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Telefone.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Telefones'), array('action' => 'index')); ?></li>
	</ul>
</div>
