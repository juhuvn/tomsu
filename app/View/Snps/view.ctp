<div class="snps view">
<h2><?php echo __('Snp'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unigene'); ?></dt>
		<dd>
			<?php echo $this->Html->link($snp['Unigene']['id'], array('controller' => 'unigenes', 'action' => 'view', $snp['Unigene']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Snp Id'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['snp_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alternative'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['alternative']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quality'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filter'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['filter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo h($snp['Snp']['format']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Snp'), array('action' => 'edit', $snp['Snp']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Snp'), array('action' => 'delete', $snp['Snp']['id']), array(), __('Are you sure you want to delete # %s?', $snp['Snp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Snps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unigenes'), array('controller' => 'unigenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unigene'), array('controller' => 'unigenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
