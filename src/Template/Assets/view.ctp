<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asset $asset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset'), ['action' => 'edit', $asset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset'), ['action' => 'delete', $asset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $asset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classifications'), ['controller' => 'Classifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classification'), ['controller' => 'Classifications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conservations'), ['controller' => 'Conservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conservation'), ['controller' => 'Conservations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assets view large-9 medium-8 columns content">
    <h3><?= h($asset->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($asset->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classification') ?></th>
            <td><?= $asset->has('classification') ? $this->Html->link($asset->classification->name, ['controller' => 'Classifications', 'action' => 'view', $asset->classification->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observation') ?></th>
            <td><?= h($asset->observation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand') ?></th>
            <td><?= $asset->has('brand') ? $this->Html->link($asset->brand->name, ['controller' => 'Brands', 'action' => 'view', $asset->brand->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $asset->has('user') ? $this->Html->link($asset->user->name, ['controller' => 'Users', 'action' => 'view', $asset->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($asset->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($asset->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Conservations') ?></h4>
        <?php if (!empty($asset->conservations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Observation') ?></th>
                <th scope="col"><?= __('User') ?></th>
                <th scope="col"><?= __('Asset Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($asset->conservations as $conservations): ?>
            <tr>
                <td><?= h($conservations->id) ?></td>
                <td><?= h($conservations->date) ?></td>
                <td><?= h($conservations->observation) ?></td>
                <td><?= h($conservations->user) ?></td>
                <td><?= h($conservations->asset_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Conservations', 'action' => 'view', $conservations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Conservations', 'action' => 'edit', $conservations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Conservations', 'action' => 'delete', $conservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conservations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
