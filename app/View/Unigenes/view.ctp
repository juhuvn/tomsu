<div class="unigenes view">
<h2><?php echo __('Unigene'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unigene['Unigene']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sequence'); ?></dt>
		<dd>
			<?php echo h($unigene['Unigene']['sequence']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unigene'), array('action' => 'edit', $unigene['Unigene']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unigene'), array('action' => 'delete', $unigene['Unigene']['id']), array(), __('Are you sure you want to delete # %s?', $unigene['Unigene']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Unigenes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unigene'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Snps'), array('controller' => 'snps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Snp'), array('controller' => 'snps', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Snps'); ?></h3>
	<?php if (!empty($unigene['Snp'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Unigene Id'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Snp Id'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th><?php echo __('Alternative'); ?></th>
		<th><?php echo __('Quality'); ?></th>
		<th><?php echo __('Filter'); ?></th>
		<th><?php echo __('Info'); ?></th>
		<th><?php echo __('Format'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($unigene['Snp'] as $snp): ?>
		<tr>
			<td><?php echo $snp['id']; ?></td>
			<td><?php echo $snp['unigene_id']; ?></td>
			<td><?php echo $snp['position']; ?></td>
			<td><?php echo $snp['snp_id']; ?></td>
			<td><?php echo $snp['reference']; ?></td>
			<td><?php echo $snp['alternative']; ?></td>
			<td><?php echo $snp['quality']; ?></td>
			<td><?php echo $snp['filter']; ?></td>
			<td><?php echo $snp['info']; ?></td>
			<td><?php echo $snp['format']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'snps', 'action' => 'view', $snp['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'snps', 'action' => 'edit', $snp['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'snps', 'action' => 'delete', $snp['id']), array(), __('Are you sure you want to delete # %s?', $snp['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Snp'), array('controller' => 'snps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
