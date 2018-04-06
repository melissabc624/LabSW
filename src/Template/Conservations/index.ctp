<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conservation[]|\Cake\Collection\CollectionInterface $conservations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Conservation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conservations index large-9 medium-8 columns content">
    <h3><?= __('Conservations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('asset_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conservations as $conservation): ?>
            <tr>
                <td><?= $this->Number->format($conservation->id) ?></td>
                <td><?= h($conservation->date) ?></td>
                <td><?= h($conservation->observation) ?></td>
                <td><?= h($conservation->user) ?></td>
                <td><?= $conservation->has('asset') ? $this->Html->link($conservation->asset->name, ['controller' => 'Assets', 'action' => 'view', $conservation->asset->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $conservation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conservation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conservation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
