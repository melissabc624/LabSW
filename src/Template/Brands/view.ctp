<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brand $brand
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Brand'), ['action' => 'edit', $brand->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Brand'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="brands view large-9 medium-8 columns content">
    <h3><?= h($brand->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($brand->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($brand->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Assets') ?></h4>
        <?php if (!empty($brand->assets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Classification Id') ?></th>
                <th scope="col"><?= __('Observation') ?></th>
                <th scope="col"><?= __('Brand Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($brand->assets as $assets): ?>
            <tr>
                <td><?= h($assets->id) ?></td>
                <td><?= h($assets->name) ?></td>
                <td><?= h($assets->date) ?></td>
                <td><?= h($assets->classification_id) ?></td>
                <td><?= h($assets->observation) ?></td>
                <td><?= h($assets->brand_id) ?></td>
                <td><?= h($assets->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Assets', 'action' => 'view', $assets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Assets', 'action' => 'edit', $assets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assets', 'action' => 'delete', $assets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
