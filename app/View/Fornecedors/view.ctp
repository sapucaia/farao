<div class="fornecedors view">
<h2><?php  echo __('Fornecedor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fornecedor['Fornecedor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razao Social'); ?></dt>
		<dd>
			<?php echo h($fornecedor['Fornecedor']['razao_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Fantasia'); ?></dt>
		<dd>
			<?php echo h($fornecedor['Fornecedor']['nome_fantasia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnpj'); ?></dt>
		<dd>
			<?php echo h($fornecedor['Fornecedor']['cnpj']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fornecedor'), array('action' => 'edit', $fornecedor['Fornecedor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fornecedor'), array('action' => 'delete', $fornecedor['Fornecedor']['id']), null, __('Are you sure you want to delete # %s?', $fornecedor['Fornecedor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fornecedors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fornecedor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
