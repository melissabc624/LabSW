<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conservation $conservation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conservation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conservation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Conservations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conservations form large-9 medium-8 columns content">
    <?= $this->Form->create($conservation) ?>
    <fieldset>
        <legend><?= __('Edit Conservation') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('observation');
            echo $this->Form->control('user');
            echo $this->Form->control('asset_id', ['options' => $assets]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
