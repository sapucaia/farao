<div class="telefones view">
<h2><?php  echo __('Telefone'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($telefone['Telefone']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($telefone['Telefone']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ddd'); ?></dt>
		<dd>
			<?php echo h($telefone['Telefone']['ddd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($telefone['Telefone']['numero']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Telefone'), array('action' => 'edit', $telefone['Telefone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Telefone'), array('action' => 'delete', $telefone['Telefone']['id']), null, __('Are you sure you want to delete # %s?', $telefone['Telefone']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefone'), array('action' => 'add')); ?> </li>
	</ul>
</div>
