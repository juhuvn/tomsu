<div class="snps index">
	<h2><?php echo __('Snps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('unigene_id'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('snp_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reference'); ?></th>
			<th><?php echo $this->Paginator->sort('alternative'); ?></th>
			<th><?php echo $this->Paginator->sort('quality'); ?></th>
			<th><?php echo $this->Paginator->sort('filter'); ?></th>
			<th><?php echo $this->Paginator->sort('info'); ?></th>
			<th><?php echo $this->Paginator->sort('format'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($snps as $snp): ?>
	<tr>
		<td><?php echo h($snp['Snp']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($snp['Unigene']['id'], array('controller' => 'unigenes', 'action' => 'view', $snp['Unigene']['id'])); ?>
		</td>
		<td><?php echo h($snp['Snp']['position']); ?>&nbsp;</td>
		<td><?php echo h($snp['Snp']['snp_id']); ?>&nbsp;</td>
		<td><?php echo h($snp['Snp']['reference']); ?>&nbsp;</td>
		<td><?php echo h($snp['Snp']['alternative']); ?>&nbsp;</td>
		<td><?php echo h($snp['Snp']['quality']); ?>&nbsp;</td>
		<td><?php echo h($snp['Snp']['filter']); ?>&nbsp;</td>
		<td><?php echo h($snp['Snp']['info']); ?>&nbsp;</td>
		<td><?php echo h($snp['Snp']['format']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $snp['Snp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $snp['Snp']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $snp['Snp']['id']), array(), __('Are you sure you want to delete # %s?', $snp['Snp']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Snp'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Unigenes'), array('controller' => 'unigenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unigene'), array('controller' => 'unigenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
