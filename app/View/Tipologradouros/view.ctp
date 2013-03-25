<div class="tipologradouros view">
<h2><?php  echo __('Tipologradouro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipologradouro['Tipologradouro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipologradouro['Tipologradouro']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipologradouro'), array('action' => 'edit', $tipologradouro['Tipologradouro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipologradouro'), array('action' => 'delete', $tipologradouro['Tipologradouro']['id']), null, __('Are you sure you want to delete # %s?', $tipologradouro['Tipologradouro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipologradouros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipologradouro'), array('action' => 'add')); ?> </li>
	</ul>
</div>
