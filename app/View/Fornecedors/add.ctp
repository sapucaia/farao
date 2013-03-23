<div class="fornecedors form">
<?php echo $this->Form->create('Fornecedor'); ?>
	<fieldset>
		<legend><?php echo __('Add Fornecedor'); ?></legend>
	<?php
		echo $this->Form->input('razao_social');
		echo $this->Form->input('nome_fantasia');
		echo $this->Form->input('cnpj');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fornecedors'), array('action' => 'index')); ?></li>
	</ul>
</div>
