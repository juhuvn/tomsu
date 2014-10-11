<div class="unigenes form">
<?php echo $this->Form->create('Unigene'); ?>
	<fieldset>
		<legend><?php echo __('Edit Unigene'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sequence');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Unigene.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Unigene.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Unigenes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Snps'), array('controller' => 'snps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snp'), array('controller' => 'snps', 'action' => 'add')); ?> </li>
	</ul>
</div>
