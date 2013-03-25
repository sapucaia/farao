<div class="tipologradouros form">
<?php echo $this->Form->create('Tipologradouro'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipologradouro'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipologradouros'), array('action' => 'index')); ?></li>
	</ul>
</div>
