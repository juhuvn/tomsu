<div class="snps form">
<?php echo $this->Form->create('Snp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Snp'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('unigene_id');
		echo $this->Form->input('position');
		echo $this->Form->input('snp_id');
		echo $this->Form->input('reference');
		echo $this->Form->input('alternative');
		echo $this->Form->input('quality');
		echo $this->Form->input('filter');
		echo $this->Form->input('info');
		echo $this->Form->input('format');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Snp.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Snp.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Snps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Unigenes'), array('controller' => 'unigenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unigene'), array('controller' => 'unigenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
