<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conservation $conservation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conservation'), ['action' => 'edit', $conservation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conservation'), ['action' => 'delete', $conservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conservation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conservations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conservation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="conservations view large-9 medium-8 columns content">
    <h3><?= h($conservation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Observation') ?></th>
            <td><?= h($conservation->observation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= h($conservation->user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Asset') ?></th>
            <td><?= $conservation->has('asset') ? $this->Html->link($conservation->asset->name, ['controller' => 'Assets', 'action' => 'view', $conservation->asset->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($conservation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($conservation->date) ?></td>
        </tr>
    </table>
</div>
