<div class="unigenes form">
<?php echo $this->Form->create('Unigene'); ?>
	<fieldset>
		<legend><?php echo __('Add Unigene'); ?></legend>
	<?php
		echo $this->Form->input('sequence');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Unigenes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Snps'), array('controller' => 'snps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snp'), array('controller' => 'snps', 'action' => 'add')); ?> </li>
	</ul>
</div>
