<div class="enderecos form">
<?php echo $this->Form->create('Endereco'); ?>
	<fieldset>
		<legend><?php echo __('Edit Endereco'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('logradouro');
		echo $this->Form->input('tipo_logradouro_id');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cep');
		echo $this->Form->input('complemento');
		echo $this->Form->input('cidade_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Endereco.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Endereco.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Enderecos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipologradouros'), array('controller' => 'tipologradouros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Logradouro'), array('controller' => 'tipologradouros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
